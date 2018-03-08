/** 
 *
 * @class exportscreen
 * @desc This file adds home folder listing screen 
 * /var/www/html/EasyCatalog/src/EasyCatalogExportBundle/Resources/public/js/pimcore/export/exportStatic.js
 */
///src.EasyCatalogExportBundle.Resources.public.js.pimcore.export.exportStatic.
pimcore.registerNS("pimcore.plugin.exportstatic");
Ext.define('pimcore.plugin.exportstatic', {

    //name: 'Unknown',
    statics: {
        folderId: '',
        IsLastCreated: false,
        exportscreen: {
            obj: '',
            onTreeNodeClick: {
                tree: '',
                record: '',
                item: '',
                index: '',
                e: '',
                eOpts: ''
            }
        },
        exportsearch: {
            obj: '',
            ifOpenedByFolder: false,
            changeClassSelect: {
                selectedClass: '',
            }
        },
        exportsetting: {
            obj: '',
        }
    },

    staticReset: function () {
        this.self.folderId = '';
        this.self.exportscreen.obj = '';
        this.self.exportscreen.onTreeNodeClick.tree = '';
        this.self.exportscreen.onTreeNodeClick.record = '';
        this.self.exportscreen.onTreeNodeClick.item = '';
        this.self.exportscreen.onTreeNodeClick.index = '';
        this.self.exportscreen.onTreeNodeClick.e = '';
        this.self.exportscreen.onTreeNodeClick.eOpts = '';
        this.self.exportsearch.obj = '';
        this.self.exportsearch.ifOpenedByFolder = false;
        this.self.exportsearch.changeClassSelect.selectedClass = '';
        this.self.exportsetting.obj = '';

    },

    expObj(obj) {
        this.self.exportscreen.obj = obj;
        console.log('-------');
        console.log(this.self.exportscreen.obj);
        console.log('-------');
    },

    exportscreenOnTreeNodeClick: function () {
        //this.self.exportscreen.onTreeNodeClick.eOpts.itemclick();
        //this.self.exportscreen.onTreeNodeClick.item.id;
        this.self.exportsearch.ifOpenedByFolder = true;
        if (this.self.IsLastCreated) {
//            console.log( $('#object_easy_1').html());
//            console.log( $('#object_easy_1 span.x-tree-node-text').html());
//            console.log( $('#object_easy_1 span.x-tree-node-text:last').html());
            $('#object_easy_1 span.x-tree-node-text:last').click();
        } else {
            if (this.self.exportscreen.onTreeNodeClick.item) {
                document.getElementById(this.self.exportscreen.onTreeNodeClick.item.id).click();
            }
        }

//
//this.self.url.User
        //console.log(this.self.exportscreen.onTreeNodeClick.record);
        //this.self.exportscreen.obj.getData();
//        this.self.exportscreen.obj.onTreeNodeClick(
//                this.self.exportscreen.onTreeNodeClick.tree,
//                this.self.exportscreen.onTreeNodeClick.record,
//                this.self.exportscreen.onTreeNodeClick.item,
//                this.self.exportscreen.onTreeNodeClick.index,
//                this.self.exportscreen.onTreeNodeClick.e,
//                this.self.exportscreen.onTreeNodeClick.eOpts
//                );
        //this.self.exportscreen.obj.getTreeNodeListeners();
    }
//    constructor: function (name) {
//        if (name) {
//            this.name = name;
//        }
//    }
    //   ,
//    doSomething: function () {
//        console.log('HELLO');
//    }
});