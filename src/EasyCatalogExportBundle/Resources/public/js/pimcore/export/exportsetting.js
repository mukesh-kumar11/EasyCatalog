/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

pimcore.registerNS("pimcore.plugin.exportsetting");
pimcore.plugin.exportsetting = Class.create(pimcore.plugin.admin, {
    title: t('Settings'),
    onlyDirectChildren: false,
    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);
    },
    pimcoreReady: function (params, broker) {
               
    }, 
    getLayout: function(currentExportId) {
        //get current exportObjectId
        this.currentExportId = currentExportId;
        //get savedExportObject setting value
        settingData = this.getSavedData(this.currentExportId);
        if (this.layout == null) {
            this.settingForm = new Ext.form.FormPanel({
            items: [
                {
                    xtype: 'textfield',
                    name: 'url',
                    fieldLabel: 'URL to access export data:',
                    id: 'UrlId',
                    labelWidth: 200,
                    value: settingData.xmlUrl,
                    queryMode: 'local',
                    readOnly: true,
                },
                {
                    xtype: 'checkbox',
                    name: 'cache',
                    id: 'cacheId',
                    labelWidth: 210,
                    value: settingData.caching,
                    fieldLabel: 'Caching: ',
                },
            ],
            buttons: [
                {
                    text: 'Save',
                    iconCls: "pimcore_icon_apply",
                    region: "north",
                    cls: "pimcore_save_button",
                    scale: "medium",
                    border: false,
                    handler: this.saveSetting.bind(this)
                }
            ],
            bodyStyle: "padding: 10px;"
            });
           
            // check for classtypes inside of the folder if there is only one type don't display the selection
            var toolbarConfig;

            this.layout = new Ext.Panel({
                title: this.title,
                border: false,
                layout: "fit",
                iconCls: this.icon,
                items: [this.settingForm, this.button],
                tbar: toolbarConfig
            });
        }


        return this.layout;
    },
    
    /**
     * Functional Description: Function to post setting form
     * @returns {undefined}
     */
    saveSetting: function () 
    { 
        var form = this.settingForm;
        if (form.isValid())
        {
            form.submit({
                url: '/admin/EasyCatalogExport/export/save-export-object',
                method: "POST",
                params: {
                    'exportObjectId': this.currentExportId
                },
                success: function (response, action) {
                    successFlag = Ext.decode(action.response.responseText);
                    if (successFlag.success) {
                        Ext.MessageBox.alert("Success", "Setting has been saved successfully.");

                    } else {
                        pimcore.helpers.showNotification(
                                t('error'),
                                t(successFlag.message),
                                'error');
                    }
                },
                failure: function (formPanel, action) {
                    var successFlag = Ext.decode(action.response.responseText);

                    pimcore.helpers.showNotification(
                            t('error'),
                            t(successFlag.message),
                            'error');
                }
            });
        } else {
            pimcore.helpers.showNotification('Error',
            'Some error occurs',
            'error');
        }
    },
    
    /**
     * Functional Description: Function to get saved data by there object id
     * @returns {data|String}
     */
    getSavedData : function () {
        var settingData = '';
        Ext.Ajax.request({
            url: "/admin/EasyCatalogExport/export/get-export-detail",
            async: false,
            params: {
                    id: this.currentExportId
            },
            success: function (response) {
                var data = Ext.decode(response.responseText);
                if (data.success) {
                    settingData = data;
                } else {
                    pimcore.helpers.showNotification('Error',
                        'Error while getting info.',
                        'error');
                    this.tree.getStore().load({
                            node: this.tree.getRootNode()
                    });
                }
                pimcore.layout.refresh();
            }.bind(this)
        }); 
        
        return settingData;
    }

});
