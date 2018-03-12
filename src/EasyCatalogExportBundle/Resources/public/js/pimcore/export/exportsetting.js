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
        pimcore.plugin.exportstatic.exportsetting.obj = this;
    },
    pimcoreReady: function (params, broker) {

    },
    getLayout: function (currentExportId) {
//        if (this.layout) {
//            //this.layout.destroy();
//            //this.layout.removeAll();
//        }

        //get current exportObjectId
        this.currentExportId = currentExportId;
        //get savedExportObject setting value
        settingData = this.getSavedData(this.currentExportId);
        accessUrl = this.getAccessUrl();
        //if (this.layout == null) {
        var staticInstance = new pimcore.plugin.exportstatic();

        this.settingForm = new Ext.form.FormPanel({
            items: [
                {
                    xtype: 'textfield',
                    name: 'url',
                    fieldLabel: 'URL to access export data:',
                    id: 'UrlId',
                    width: 800,
                    labelWidth: 200,
                    value: accessUrl,
                    queryMode: 'local',
                    readOnly: true,
                },
                {
                    xtype: 'checkbox',
                    name: 'cache',
                    id: 'cacheId',
                    labelWidth: 210,
                    value: settingData.caching,
                    fieldLabel: 'Caching ',
                },
                {
                    xtype: 'panel',
                    html: "<br/><b style='font-weight:bold'>Disabled:</b> Create export data on the fly. Server up-to-date data, but can be slow for large exports.<br/><b style='font-weight:bold'>Enabled:</b> Server export data from a pre- generated file. Fast, but does not necessarily contain the most recent data.<br/><br/>If this option is enabled, you have to set up a cronjob to create the export file. See manual for details."

                },
            ],
            buttons: [
                {
                    text: 'Save',
                    iconCls: "pimcore_icon_apply",
                    region: "north",
                    cls: "pimcore_save_button",
                    scale: "small",
                    border: false,
                    style: '{margin-right:10px;}',
                    //handler: this.saveSetting.bind(this)
                    handler: pimcore.plugin.exportstatic.exportsetting.obj.saveSetting.bind(pimcore.plugin.exportstatic.exportsetting.obj)
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
        //}


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
                        //Ext.MessageBox.alert("Success", "Setting has been saved successfully.");
                        pimcore.plugin.exportstatic.exportsearch.obj.save(pimcore.plugin.exportstatic.exportsearch.obj);
                    } else {
                        pimcore.helpers.showNotification(t('error'), t(successFlag.message), 'error');
                    }
                },
                failure: function (formPanel, action) {
                    var successFlag = Ext.decode(action.response.responseText);
                    pimcore.helpers.showNotification(t('error'), t(successFlag.message), 'error');
                }
            });
        } else {
            pimcore.helpers.showNotification('Error', 'Some error occurs', 'error');
        }
    },

    getAccessUrl: function () {
        var accessUrl = '';
        Ext.Ajax.request({
            url: "/admin/EasyCatalogExport/export/get-export-url",
            async: false,
            params: {
                id: this.currentExportId
            },
            success: function (response) {
                var data = Ext.decode(response.responseText);
                if (data.success) {
                    accessUrl = data.accessUrl;
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
        return accessUrl;
    },

    /**
     * Functional Description: Function to get saved data by there object id
     * @returns {data|String}
     */
    getSavedData: function () {
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
