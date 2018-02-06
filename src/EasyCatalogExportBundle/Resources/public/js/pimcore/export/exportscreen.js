/** 
 *
 * @class exportscreen
 * @desc This file adds home folder listing screen 
 * 
 */

pimcore.registerNS("pimcore.plugin.exportscreen");
pimcore.plugin.exportscreen = Class.create(pimcore.object.abstract, {

    type: "folder",

    initialize: function(id, options) {

        this.options = options;
        this.id = intval(id);
        this.addLoadingPanel();

        pimcore.plugin.broker.fireEvent("preOpenObject", this, "folder");
        this.getData();
    },

    init: function () {

        var user = pimcore.globalmanager.get("user");

        this.search = new pimcore.plugin.exportsearch(this, "folder");
        
        if (this.isAllowed("properties")) {
            this.properties = new pimcore.element.properties(this, "object");
        }

        if (user.isAllowed("notes_events")) {
            this.notes = new pimcore.element.notes(this, "object");
        }

        this.dependencies = new pimcore.element.dependencies(this, "object");
        this.tagAssignment = new pimcore.element.tag.assignment(this, "object");
    },


    getData: function () {
        var options = this.options || {};
        Ext.Ajax.request({
            url: "/admin/object/get-folder",
            params: {id: this.id},
            ignoreErrors: options.ignoreNotFoundError,
            success: this.getDataComplete.bind(this),
            failure: function() {
                this.forgetOpenTab();
            }.bind(this)
        });
    },

    forgetOpenTab: function() {
        pimcore.globalmanager.remove("object_" + this.id);
        pimcore.helpers.forgetOpenTab("object_" + this.id + "_folder");
    },

    getDataComplete: function (response) {
        try {
            this.data = Ext.decode(response.responseText);

            if (typeof this.data.editlock == "object") {
                pimcore.helpers.lockManager(this.id, "object", "folder", this.data);
                throw "object is locked";
            }

            this.init();
            this.addTab();
            this.startChangeDetector();
        }
        catch (e) {
            console.log(e);
            pimcore.helpers.closeObject(this.id);
        }
    },


    addTab: function () {

        var tabTitle = this.data.general.o_key;
        if (this.id == 1) {
            tabTitle = "home";
        }

        this.tabPanel = Ext.getCmp("pimcore_panel_tabs");
        var tabId = "object_" + this.id;

        this.tab = new Ext.Panel({
            id: tabId,
            title: tabTitle,
            closable:true,
            layout: "border",
            items: [
                this.getTabPanel(),
                this.getLayoutToolbar(),
            ],
            iconCls: "pimcore_icon_folder",
            object: this
        });

        this.tab.on("beforedestroy", function () {
            Ext.Ajax.request({
                url: "/admin/element/unlock-element",
                params: {
                    id: this.id,
                    type: "object"
                }
            });
        }.bind(this));

        // remove this instance when the panel is closed
        this.tab.on("destroy", function () {
            pimcore.globalmanager.remove("object_" + this.id);
            pimcore.helpers.forgetOpenTab("object_" + this.id + "_folder");

        }.bind(this));

        this.tab.on("activate", function () {
            this.tab.updateLayout();
            pimcore.layout.refresh();
        }.bind(this));

        this.tab.on("afterrender", function (tabId) {
            this.tabPanel.setActiveItem(tabId);
            //pimcore.plugin.broker.fireEvent("postOpenObject", this, "folder");

            // load selected class if available
            if(this.data["selectedClass"]) {
                this.search.setClass(this.data["selectedClass"]);
            }

        }.bind(this, tabId));

        this.removeLoadingPanel();

        this.tabPanel.add(this.tab);

        if (this.getAddToHistory()) {
            pimcore.helpers.recordElement(this.id, "object", this.data.general.o_path + this.data.general.o_key);
        }

        // recalculate the layout
        pimcore.layout.refresh();
    },

    activate: function () {
        var tabId = "object_" + this.id;
        var tabPanel = Ext.getCmp("pimcore_panel_tabs");
        tabPanel.setActiveItem(tabId);
    },

    getLayoutToolbar : function () {

        if (!this.toolbar) {

            this.toolbarButtons = {};

            this.toolbarButtons.publish = new Ext.Button({
                text: t('save'),
                iconCls: "pimcore_icon_save_white",
                cls: "pimcore_save_button",
                scale: "medium",
                handler: this.save.bind(this)
            }); 
         

            var buttons = [];

            if (this.isAllowed("publish")) {
                buttons.push(this.toolbarButtons.publish);
            }

            this.toolbar = new Ext.Toolbar({
                id: "object_toolbar_" + this.id,
                region: "south",
                border: false,
                cls: "main-toolbar",
                items: buttons,
                overflowHandler: 'scroller'
            }); 
        }

        return this.toolbar;
    },

    getTabPanel: function () {

        var items = [];
        var user = pimcore.globalmanager.get("user");

        var search = this.search.getLayout();
        console.log(search);
        if (search) {
            items.push(search);
        }
        /*if (this.isAllowed("properties")) {
            //items.push(this.properties.getLayout());
        }
        //items.push(this.dependencies.getLayout());

        if (user.isAllowed("notes_events")) {
            //items.push(this.notes.getLayout());
        }
        */
//        if (user.isAllowed("tags_assignment")) {
//            items.push(this.tagAssignment.getLayout());
//        }
		
		
		
        this.tabbar = new Ext.TabPanel({
            tabPosition: "top",
            region:'center',
            deferredRender:true,
            enableTabScroll:true,
            border: false,
            items: items,
            activeTab: 0
        });

        return this.tabbar;
    },

    getSaveData: function () {
        var data = {};

        data.id = this.id;

        // properties
        try {
            data.properties = Ext.encode(this.properties.getValues());
        }
        catch (e1) {
            //console.log(e1);
        }


        try {
            data.general = Ext.apply({}, this.data.general);
            // object shouldn't be relocated, renamed, or anything else that is evil
            delete data.general["o_parentId"];
            delete data.general["o_type"];
            delete data.general["o_key"];
            delete data.general["o_locked"];

            data.general = Ext.encode(data.general);
        }
        catch (e2) {
            //console.log(e2);
        }
        return data;
    },

    save : function (task) {

        if(this.tab.disabled || this.tab.isMasked()) {
            return;
        }
     
     console.log(this.search);
     /* 
      * columnConfigId
      * filters
      * classId
      * */
        var data = {
                    'columns': this.search.fieldObject,
                    'class_id' : this.search.classId,
                    'filters' : this.search.store.filters.items,
                    'columnConfig': this.search.settings.gridConfigName,
                    };
                    
        this.tab.mask();

        Ext.Ajax.request({
            url: '/easy_catalog_export',
            method: "post",
            params: data,
            success: function (response) {
                try{
                    var rdata = Ext.decode(response.responseText);
                    if (rdata && rdata.success) {
                        pimcore.helpers.showNotification(t("success"), t("your_object_has_been_saved"), "success");
                        this.resetChanges();
                    }
                    else {
                        pimcore.helpers.showNotification(t("error"), t("error_saving_object"),
                            "error",t(rdata.message));
                    }
                } catch(e){
                    pimcore.helpers.showNotification(t("error"), t("error_saving_object"), "error");
                }

                this.tab.unmask();
            }.bind(this),
            failure: function () {
                this.tab.unmask();
            }
        });

    },


    remove: function () {
        var options = {
            "elementType" : "object",
            "id": this.id
        };
        pimcore.elementservice.deleteElement(options);
    },

    isAllowed : function (key) {
        return this.data.userPermissions[key];
    },

    reload: function () {
        window.setTimeout(function (id) {
            pimcore.helpers.openObject(id, "folder");
        }.bind(window, this.id), 500);

        pimcore.helpers.closeObject(this.id);
    },

    showMetaInfo: function() {

        new pimcore.element.metainfo([
        {
            name: "id",
            value: this.data.general.o_id
        },
        {
            name: "path",
            value: this.data.general.fullpath
        }, {
            name: "modificationdate",
            type: "date",
            value: this.data.general.o_modificationDate
        }, {
            name: "creationdate",
            type: "date",
            value: this.data.general.o_creationDate
        }, {
            name: "usermodification",
            type: "user",
            value: this.data.general.o_userModification
        }, {
            name: "userowner",
            type: "user",
            value: this.data.general.o_userOwner
        },
        {
            name: "deeplink",
            value: window.location.protocol + "//" + window.location.hostname + "/admin/login/deeplink?object_" + this.data.general.o_id + "_folder"
        }
        ], "folder");
    }

});


