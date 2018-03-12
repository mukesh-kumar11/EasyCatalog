pimcore.registerNS("pimcore.plugin.exportstatic");
Ext.define('pimcore.plugin.exportstatic', {
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
    },

    exportscreenOnTreeNodeClick: function () {
        this.self.exportsearch.ifOpenedByFolder = true;
        if (this.self.IsLastCreated) {
            $('#object_easy_1 span.x-tree-node-text:last').click();
        } else {
            if (this.self.exportscreen.onTreeNodeClick.item) {
                document.getElementById(this.self.exportscreen.onTreeNodeClick.item.id).click();
            }
        }
    }

});