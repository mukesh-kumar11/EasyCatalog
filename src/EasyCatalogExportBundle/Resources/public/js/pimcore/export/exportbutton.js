/** 
 *
 * @class exportbutton
 * @desc This file adds button in the left navigation for the Easy Catalog Export
 * 
 */


pimcore.registerNS("pimcore.plugin.exportbutton");

pimcore.plugin.exportbutton = Class.create({
    
    /*
     * @constructor
     */
    initialize: function () {
        
    },
    
    /*
     * @desc Adds button icon in the left main menu
     */ 
    leftNavigation: function (scope) {
        var navigation = Ext.get("pimcore_navigation");
        var ulElement = navigation.selectNode('ul');
        var li = document.createElement("li");
        
        li.setAttribute("id", "pimcore_menu_exportbutton");
        li.setAttribute("class", "x-btn-icon-el-default-small pimcore_icon_class pimcore_icon_overlay initialized");
        li.setAttribute("data-menu-tooltip", "Easy Catalog Export");
        ulElement.appendChild(li);

        pimcore.helpers.initMenuTooltips();
        Ext.get("pimcore_menu_exportbutton").on("click", function (e, el) {
            var options = {};
            var exportScreen = new pimcore.plugin.exportscreen(1,options);
        });
    },

});

var exportbutton = new pimcore.plugin.exportbutton(); 
