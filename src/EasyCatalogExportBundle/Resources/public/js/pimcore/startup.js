pimcore.registerNS("pimcore.plugin.EasyCatalogExportBundle");

pimcore.plugin.EasyCatalogExportBundle = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.plugin.EasyCatalogExportBundle";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params, broker) {
        var exportbutton = new pimcore.plugin.exportbutton();
        exportbutton.leftNavigation();
    }
});

var EasyCatalogExportBundlePlugin = new pimcore.plugin.EasyCatalogExportBundle();
