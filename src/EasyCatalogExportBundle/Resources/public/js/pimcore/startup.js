pimcore.registerNS("pimcore.plugin.EasyCatalogExportBundle");

pimcore.plugin.EasyCatalogExportBundle = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.plugin.EasyCatalogExportBundle";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params, broker) {
        element = Ext.getCmp("pimcore_panel_tree_objects");
        element.un('itemclick', element.config.listeners.itemclick);
        element.setListeners({
            'itemclick': this.onTreeNodeClick,
        });

        if (pimcore.globalmanager.get("user").isAllowed("plugin_easycatalog_config")) {
            var exportbutton = new pimcore.plugin.exportbutton();
            exportbutton.leftNavigation();
        }

    },

    onTreeNodeClick: function (tree, record, item, index, e, eOpts) {
        try {
            if (record.data.permissions.view) {
                if (record.data.type == 'folder') {
                    var tabPanel = Ext.getCmp("pimcore_panel_tabs");
                    var isEasyCatalogActive = 0;
                    if (tabPanel.activeTab) {
                        if (tabPanel.activeTab.id == 'object_easy_1') {
                            isEasyCatalogActive = 1;
                            var staticInstance = new pimcore.plugin.exportstatic();
                            staticInstance.self.folderId = record.data.id;
                            if (staticInstance.self.exportscreen.obj != '') {
                                console.log(staticInstance.self.exportscreen);
                                staticInstance.exportscreenOnTreeNodeClick();
                            }
                        }
                    }
                    if (!isEasyCatalogActive) {
                        pimcore.helpers.openObject(record.data.id, record.data.type);
                    }
                } else {
                    pimcore.helpers.openObject(record.data.id, record.data.type);
                }
            }
        } catch (e) {
            console.log(e);
        }
    },
});

var EasyCatalogExportBundlePlugin = new pimcore.plugin.EasyCatalogExportBundle();
