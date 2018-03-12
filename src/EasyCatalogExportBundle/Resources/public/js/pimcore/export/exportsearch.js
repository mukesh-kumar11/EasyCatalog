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

pimcore.registerNS("pimcore.plugin.exportsearch");
pimcore.plugin.exportsearch = Class.create(pimcore.object.helpers.gridTabAbstract, {
    systemColumns: ["id", "fullpath", "type", "subtype", "filename", "classname", "creationDate", "modificationDate"],
    fieldObject: {},
    //title: t('search_edit'),
    title: t('Filter'),
    icon: "pimcore_icon_search",
    onlyDirectChildren: false,
    sortinfo: {},
    initialize: function (object, searchType) {
        this.object = object;
        this.element = object;
        this.searchType = searchType;
        this.noBatchColumns = [];
        pimcore.plugin.exportstatic.exportsearch.obj = this;
    },
    getLayout: function (selectedClass, exportFilter, gridColumnConfigId, savedFolderId, search, currentExportId) {
//        if (this.layout) {
//            //this.layout.destroy();
//            //this.layout.removeAll();
//        }
        this.savedFolderId = savedFolderId;
        this.defaultClass = selectedClass;
//        if (this.layout == null) {
        // check for classtypes inside of the folder if there is only one type don't display the selection
        var toolbarConfig;
        this.searchData = search;
        this.currentExportId = currentExportId;
        if (this.object.data.classes && typeof this.object.data.classes == "object") {

            if (this.object.data.classes.length < 1) {
                return;
            }

            var data = [];
            for (i = 0; i < this.object.data.classes.length; i++) {
                var klass = this.object.data.classes[i];
                data.push([klass.id, klass.name, ts(klass.name)]);
            }
            var classStore = new Ext.data.ArrayStore({
                data: data,
                sorters: 'translatedText',
                fields: [
                    {name: 'id', type: 'number'},
                    {name: 'name', type: 'string'},
                    {name: 'translatedText', type: 'string'}
                ]
            });
            //AUTO SELECT CLASS
            var currentLocalClass = selectedClass;
            if (pimcore.plugin.exportstatic.exportsearch.ifOpenedByFolder) {
                if (pimcore.plugin.exportstatic.exportsearch.changeClassSelect.selectedClass != '') {
                    this.object.data["selectedClass"] = pimcore.plugin.exportstatic.exportsearch.changeClassSelect.selectedClass;
                    
                } else {
                    if (selectedClass) {
                        this.object.data["selectedClass"] = selectedClass;
                    } else {
                        this.object.data["selectedClass"] = '';
                    }
                    
                }
            } else {
                
                pimcore.plugin.exportstatic.folderId = '';
                pimcore.plugin.exportstatic.exportsearch.changeClassSelect.selectedClass = '';
                if (selectedClass) {
                    this.object.data["selectedClass"] = selectedClass;
                } else {
                    this.object.data["selectedClass"] = '';
                }
            }
            currentLocalClass = this.object.data["selectedClass"];
            pimcore.plugin.exportstatic.exportsearch.ifOpenedByFolder = false;
            this.classSelector = new Ext.form.ComboBox({
                name: "selectClass",
                listWidth: 'auto',
                store: classStore,
                queryMode: "local",
                valueField: 'id',
                displayField: 'translatedText',
                triggerAction: 'all',
                editable: true,
                typeAhead: true,
                forceSelection: true,
                value: this.object.data["selectedClass"],
                listeners: {
                    "select": this.changeClassSelect.bind(this)
                }
            });

            if (this.object.data.classes.length > 1) {
                toolbarConfig = [new Ext.Toolbar.TextItem({
                        text: t("please_select_a_type")
                    }), this.classSelector, '->', this.button];
            } else {
                this.currentClass = this.object.data.classes[0].id;
            }
        } else {
            return;
        }

        this.layout = new Ext.Panel({
            title: this.title,
            border: false,
            layout: "fit",
            iconCls: this.icon,
            items: [],
            tbar: toolbarConfig
        });
        this.exportFilter = this.filter = exportFilter;
        this.selectedClass = selectedClass;
        this.gridColumnConfigId = gridColumnConfigId;
        this.savedGridColumnConfigId = gridColumnConfigId;
        //this.gridColumnConfigId = gridColumnConfigId;
        this.layout.on("afterrender", this.setClass.bind(this, currentLocalClass));
        return this.layout;
    },
    changeClassSelect: function (field, newValue, oldValue) {
        if (this.defaultClass == newValue.data.id) {
            this.gridColumnConfigId = this.savedGridColumnConfigId;
        } else {
            this.gridColumnConfigId = null;
        }
        pimcore.plugin.exportstatic.exportsearch.changeClassSelect.selectedClass = newValue.data.id;
        var selectedClass = newValue.data.id;
        this.setClass(selectedClass);
    },
    setClass: function (classId) {
        this.classId = classId;
        this.settings = {};
        this.getTableDescription(this.exportFilter, this.gridColumnConfigId);
    },
    getTableDescription: function () {

        if (typeof (this.settings.gridConfigId) == "undefined") {
            this.settings.gridConfigId = this.gridColumnConfigId;
        }
        if (this.classId) {
            Ext.Ajax.request({
                url: "/admin/object-helper/grid-get-column-config",
                params: {
                    id: this.classId,
                    objectId: this.object.id,
                    gridtype: "grid",
                    gridConfigId: this.settings ? this.settings.gridConfigId : null,
                    searchType: this.searchType
                },
                success: this.createGrid.bind(this, false)
            });
        } else {
            return false;
        }
    },
    
    save: function (task) {
        var filterData = [];
        var columnData = [];
        for (var i = 0; i < this.searchData.store.filters.length; i++) {
            filterData[i] = {
                'operator': this.searchData.store.filters.items[i].config.operator,
                'value': this.searchData.store.filters.items[i]._value,
                'property': this.searchData.store.filters.items[i].config.property,
                'type': this.searchData.store.filters.items[i].config.type,
            };
        }
        
        var c =0;
        for (var key in this.searchData.fieldObject) {
            if (this.searchData.fieldObject.hasOwnProperty(key)) {
                columnData[c++] = key;
            }
        }

        var data = {
            'columns': JSON.stringify(this.searchData.fieldObject),
            'class_id': this.searchData.classId,
            'filters': JSON.stringify(filterData),
            'columnConfig': this.searchData.settings.gridConfigId,
            'exportObjectId': this.currentExportId,
            'folderId': pimcore.plugin.exportstatic.folderId,
            'gridColumns' : JSON.stringify(columnData)
        };
        Ext.Ajax.request({
            url: '/admin/EasyCatalogExport/export/save-export-object',
            method: "post",
            dataType: "json",
            params: data,
            success: function (response) {
                try {
                    if (response.status == 200) {
                        pimcore.helpers.showNotification(t("success"), t("your_object_has_been_saved"), "success");
//                        this.resetChanges();
                    } else {
                        pimcore.helpers.showNotification(t("error"), t("error_saving_object"),
                                "error");
                    }
                } catch (e) {
                    pimcore.helpers.showNotification(t("error"), t("error_saving_object"), "error");
                }
            }.bind(this)
        });
    },
    
    createGrid: function (fromConfig, response, settings, save) {
        this.fromClearFilter = false;
        var itemsPerPage = pimcore.helpers.grid.getDefaultPageSize(-1);
        var fields = [];
        if (response.responseText) {
            response = Ext.decode(response.responseText);
            if (response.pageSize) {
                itemsPerPage = response.pageSize;
            }

            fields = response.availableFields;
            this.gridLanguage = response.language;
            this.sortinfo = response.sortinfo;
            this.settings = response.settings || {};
            this.availableConfigs = response.availableConfigs;
            this.sharedConfigs = response.sharedConfigs;
            if (response.onlyDirectChildren) {
                this.onlyDirectChildren = response.onlyDirectChildren;
            }
        } else {
            fields = response;
            this.settings = settings;
            this.buildColumnConfigMenu();
        }

        this.fieldObject = {};
        for (var i = 0; i < fields.length; i++) {
            this.fieldObject[fields[i].key] = fields[i];
        }

        this.cellEditing = Ext.create('Ext.grid.plugin.CellEditing', {
            clicksToEdit: 1,
            listeners: {
                beforeedit: function (editor, context, eOpts) {
                    //need to clear cached editors of cell-editing editor in order to
                    //enable different editors per row
                    var editors = editor.editors;
                    editors.each(function (editor) {
                        if (typeof editor.column.config.getEditor !== "undefined") {
                            Ext.destroy(editor);
                            editors.remove(editor);
                        }
                    });
                }
            }
        }
        );
        var plugins = [this.cellEditing, 'pimcore.gridfilters'];
        // get current class
        var classStore = pimcore.globalmanager.get("object_types_store");
        var klass = classStore.getById(this.classId);
        if (this.selectedClass != this.classId) {
            this.exportFilter = '';
        } else {
            this.exportFilter = this.filter;
        }

        var staticInstance = new pimcore.plugin.exportstatic();
        if (staticInstance.self.folderId != '') {
            folderId = staticInstance.self.folderId;
        } else if (this.savedFolderId) {
            folderId = this.savedFolderId;
        } else {
            folderId = 1;
        }

        var gridHelper = new pimcore.object.helpers.grid(
                klass.data.text,
                fields,
                "/admin/object/grid-proxy?classId=" + this.classId + "&folderId=" + folderId,
                {
                    language: this.gridLanguage,
                    filter: this.exportFilter, //Added default filter
                    // limit: itemsPerPage
                },
                false
                );
        gridHelper.showSubtype = false;
        gridHelper.enableEditor = true;
        gridHelper.limit = itemsPerPage;
        this.toolbarFilterInfo = new Ext.Button({
            iconCls: "pimcore_icon_filter_condition",
            hidden: true,
            text: '<b>' + t("filter_active") + '</b>',
            tooltip: t("filter_condition"),
            handler: function (button) {
                Ext.MessageBox.alert(t("filter_condition"), button.pimcore_filter_condition);
            }.bind(this)
        });
        this.clearFilterButton = new Ext.Button({
            iconCls: "pimcore_icon_clear_filters",
            hidden: true,
            text: t("clear_filters"),
            tooltip: t("clear_filters"),
            handler: function (button) {

                this.grid.filters.clearFilters();
                this.toolbarFilterInfo.hide();
                this.clearFilterButton.hide();
                this.fromClearFilter = true;
                this.clearFilterButton.setHidden(true);
            }.bind(this)
        });
        var hideSaveColumnConfig = !fromConfig;
        var propertyVisibility = klass.get("propertyVisibility");
        this.store = gridHelper.getStore(this.noBatchColumns);
        if (this.sortinfo) {
            this.store.sort(this.sortinfo.field, this.sortinfo.direction);
        }
        this.store.getProxy().setExtraParam("only_direct_children", this.onlyDirectChildren);
        this.store.setPageSize(itemsPerPage);
        this.languageInfo = new Ext.Toolbar.TextItem({
            text: t("grid_current_language") + ": " + (this.gridLanguage == "default" ? t("default") : pimcore.available_languages[this.gridLanguage])
        });
        var gridColumns = gridHelper.getGridColumns();
        // add filters
        this.gridfilters = gridHelper.getGridFilters();
        this.createSqlEditor();
        this.checkboxOnlyDirectChildren = new Ext.form.Checkbox({
            name: "onlyDirectChildren",
            style: "margin-bottom: 5px; margin-left: 5px",
            checked: this.onlyDirectChildren,
            boxLabel: t("only_children"),
            listeners: {
                "change": function (field, checked) {
                    this.grid.filters.clearFilters();
                    this.store.getProxy().setExtraParam("only_direct_children", checked);
                    this.onlyDirectChildren = checked;
                    this.pagingtoolbar.moveFirst();
                }.bind(this)
            }
        });
        var hideSaveColumnConfig = !fromConfig || save;
        this.saveColumnConfigButton = new Ext.Button({
            tooltip: t('save_column_configuration'),
            iconCls: "pimcore_icon_publish",
            hidden: hideSaveColumnConfig,
            handler: function () {
                var asCopy = !(this.settings.gridConfigId > 0);
                this.saveConfig(asCopy)
            }.bind(this)
        });
        this.columnConfigButton = new Ext.SplitButton({
            text: t('grid_column_config'),
            iconCls: "pimcore_icon_table_col pimcore_icon_overlay_edit",
            handler: function () {
                this.openColumnConfig();
            }.bind(this),
            menu: []
        });
        this.buildColumnConfigMenu();
        // grid
        this.grid = Ext.create('Ext.grid.Panel', {
            frame: false,
            store: this.store,
            columns: gridColumns,
            columnLines: true,
            stripeRows: true,
            bodyCls: "pimcore_editable_grid",
            border: true,
            selModel: gridHelper.getSelectionColumn(),
            trackMouseOver: true,
            loadMask: true,
            plugins: plugins,
            viewConfig: {
                forceFit: false,
                xtype: 'patchedgridview'
            },
            cls: 'pimcore_object_grid_panel',
            tbar: [this.languageInfo, "-", this.toolbarFilterInfo, this.clearFilterButton, "->",
                this.columnConfigButton,
                this.saveColumnConfigButton
            ]
//            tbar: [this.languageInfo, "-", this.toolbarFilterInfo, this.clearFilterButton, "->", this.checkboxOnlyDirectChildren, "-", this.sqlEditor, this.sqlButton, "-", {
//                    text: t("search_and_move"),
//                    iconCls: "pimcore_icon_search pimcore_icon_overlay_go",
//                    handler: pimcore.helpers.searchAndMove.bind(this, this.object.id,
//                            function () {
//                                this.store.reload();
//                            }.bind(this), "object")
//                }, "-", {
//                    text: t("export_csv"),
//                    iconCls: "pimcore_icon_export",
//                    handler: function () {
//
//                        Ext.MessageBox.show({
//                            title: t('warning'),
//                            msg: t('csv_object_export_warning'),
//                            buttons: Ext.Msg.OKCANCEL,
//                            fn: function (btn) {
//                                if (btn == 'ok') {
//                                    this.exportPrepare();
//                                }
//                            }.bind(this),
//                            icon: Ext.MessageBox.WARNING
//                        });
//                    }.bind(this)
//                }, "-",
//                this.columnConfigButton,
//                this.saveColumnConfigButton
//            ]
        });
        this.grid.on("columnmove", function () {
            this.saveColumnConfigButton.show()
        }.bind(this));
        this.grid.on("columnresize", function () {
            this.saveColumnConfigButton.show()
        }.bind(this));
        this.grid.on("rowcontextmenu", this.onRowContextmenu);
        this.grid.on("afterrender", function (grid) {
            this.updateGridHeaderContextMenu(grid);
            if (this.exportFilter) {
                this.filterUpdateFunction(this.grid, this.toolbarFilterInfo, this.clearFilterButton);
            }
        }.bind(this));
        this.grid.on("sortchange", function (ct, column, direction, eOpts) {
            this.sortinfo = {
                field: column.dataIndex,
                direction: direction
            };
        }.bind(this));
        //Delete the current filter when user is about to apply new filter.
        delete this.grid.getStore().getProxy().getInitialConfig().extraParams.filter;
        // check for filter updates
        this.grid.on("filterchange", function () {
            this.filterUpdateFunction(this.grid, this.toolbarFilterInfo, this.clearFilterButton);
        }.bind(this));
        gridHelper.applyGridEvents(this.grid);
        this.pagingtoolbar = pimcore.helpers.grid.buildDefaultPagingToolbar(this.store, {pageSize: itemsPerPage});
        // applying filters on grid -- open
        if (this.exportFilter) {

            var appliedFilters = this.exportFilter;
            var columnManager = this.grid.columnManager;
            if (appliedFilters) {
                appliedFilters = JSON.parse(appliedFilters);
                appliedFilters.forEach(function (appliedFilter) {
                    var column = columnManager.getHeaderByDataIndex(appliedFilter.property);
                    if (column.filter.type == 'numeric') {
                        if (appliedFilter.operator == "lt") {
                            column.filter.setValue({"lt": appliedFilter.value});
                        }
                        if (appliedFilter.operator == "gt") {
                            column.filter.setValue({"gt": appliedFilter.value});
                        }
                        if (appliedFilter.operator == "eq") {
                            column.filter.setValue({"eq": appliedFilter.value});
                        }
                    } else if (column.filter.type == 'boolean') {
                        column.filter.setValue(appliedFilter.value);
                        column.filter.defaultValue = appliedFilter.value;
                    } else if (column.filter.type == 'list') {
                        //var valueArr = appliedFilter.value.split('|');
                        var valueArr = appliedFilter.value;
                        column.filter.filter.setValue(valueArr);
                        column.filter.setActive(true);
                    } else if (column.filter.type == 'date') {
                        var date = new Date(appliedFilter.value);
                        if (appliedFilter.operator == "eq") {
                            column.filter.setValue({"eq": date});
                        }
                        if (appliedFilter.operator == "lt") {
                            column.filter.setValue({"lt": date});
                        }
                        if (appliedFilter.operator == "gt") {
                            column.filter.setValue({"gt": date});
                        }
                    } else {
                        column.filter.setValue(appliedFilter.value);
                    }
                });
//                this.panel.updateLayout();
            }
        } else {
            this.fromClearFilter = false;
        }

        this.editor = new Ext.Panel({
            layout: "border",
            items: [new Ext.Panel({
                    items: [this.grid],
                    region: "center",
                    layout: "fit",
                    bbar: this.pagingtoolbar
                })
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
                    handler: pimcore.plugin.exportstatic.exportsetting.obj.saveSetting.bind(pimcore.plugin.exportstatic.exportsetting.obj)
                }
            ],
        });
        this.layout.removeAll();
        this.layout.add(this.editor);
        this.layout.updateLayout();
        if (save) {
            if (this.settings.isShared) {
                this.settings.gridConfigId = null;
            }
            this.saveConfig(false);
        }
    },
    
    getGridConfig: function ($super) {
        var config = $super();
        config.onlyDirectChildren = this.onlyDirectChildren;
        config.pageSize = this.pagingtoolbar.pageSize;
        return config;
    },
    buildColumnConfigMenu: function () {
        var menu = this.columnConfigButton.getMenu();
        menu.removeAll();
        menu.add({
            text: t('save_as'),
            iconCls: "pimcore_icon_save",
            handler: this.saveConfig.bind(this, true)
        });
        // menu.add({
        //     text: t('set_as_favourite'),
        //     iconCls: "pimcore_icon_favourite",
        //     handler: function () {
        //         pimcore.helpers.markColumnConfigAsFavourite(this.object.id, this.classId, this.settings.gridConfigId, this.searchType, true);
        //     }.bind(this)
        // });

        menu.add({
            text: t('remove_config'),
            iconCls: "pimcore_icon_delete",
            disabled: !this.importConfigId,
            handler: this.deleteGridConfig.bind(this)
        });
        menu.add('-');
        var disabled = false;
        var text = t('predefined');
        if (!this.settings.gridConfigId) {
            text = "<b>" + text + "</b>";
            disabled = true;
        }

        menu.add({
            text: text,
            iconCls: "pimcore_icon_importconfig",
            disabled: disabled,
            gridConfig: {
                id: 0
            },
            handler: this.switchToGridConfig.bind(this)
        });
        if (this.availableConfigs && this.availableConfigs.length > 0) {
            this.addGridConfigMenuItems(menu, this.availableConfigs);
        }

        if (this.sharedConfigs && this.sharedConfigs.length > 0) {
            menu.add('-');
            this.addGridConfigMenuItems(menu, this.sharedConfigs);
        }
    },
    onRowContextmenu: function (grid, record, tr, rowIndex, e, eOpts) {

        var menu = new Ext.menu.Menu();
        var data = grid.getStore().getAt(rowIndex);
        var selectedRows = grid.getSelectionModel().getSelection();
        if (selectedRows.length <= 1) {

            menu.add(new Ext.menu.Item({
                text: t('open'),
                iconCls: "pimcore_icon_open",
                handler: function (data) {
                    pimcore.helpers.openObject(data.data.id, "object");
                }.bind(this, data)
            }));
            if (pimcore.elementservice.showLocateInTreeButton("object")) {
                menu.add(new Ext.menu.Item({
                    text: t('show_in_tree'),
                    iconCls: "pimcore_icon_show_in_tree",
                    handler: function () {
                        try {
                            try {
                                pimcore.treenodelocator.showInTree(record.id, "object", this);
                            } catch (e) {
                                console.log(e);
                            }

                        } catch (e2) {
                            console.log(e2);
                        }
                    }
                }));
            }

            menu.add(new Ext.menu.Item({
                text: t('delete'),
                iconCls: "pimcore_icon_delete",
                handler: function (data) {
                    var store = this.getStore();
                    var options = {
                        "elementType": "object",
                        "id": data.data.id,
                        "success": store.reload.bind(this.getStore())
                    };
                    pimcore.elementservice.deleteElement(options);
                }.bind(grid, data)
            }));
        } else {
            menu.add(new Ext.menu.Item({
                text: t('open_selected'),
                iconCls: "pimcore_icon_open",
                handler: function (data) {
                    var selectedRows = grid.getSelectionModel().getSelection();
                    for (var i = 0; i < selectedRows.length; i++) {
                        pimcore.helpers.openObject(selectedRows[i].data.id, "object");
                    }
                }.bind(this, data)
            }));
            menu.add(new Ext.menu.Item({
                text: t('delete_selected'),
                iconCls: "pimcore_icon_delete",
                handler: function (data) {
                    var ids = [];
                    var selectedRows = grid.getSelectionModel().getSelection();
                    for (var i = 0; i < selectedRows.length; i++) {
                        ids.push(selectedRows[i].data.id);
                    }
                    ids = ids.join(',');
                    var options = {
                        "elementType": "object",
                        "id": ids,
                        "success": function () {
                            this.getStore().reload();
                            var tree = pimcore.globalmanager.get("layout_object_tree");
                            var treePanel = tree.tree;
                            tree.refresh(treePanel.getRootNode());
                        }.bind(this)
                    };
                    pimcore.elementservice.deleteElement(options);
                }.bind(grid, data)
            }));
        }
        pimcore.plugin.broker.fireEvent("prepareOnRowContextmenu", menu, this, selectedRows);
        e.stopEvent();
        menu.showAt(e.pageX, e.pageY);
    }


});
pimcore.plugin.exportsearch.addMethods(pimcore.object.helpers.gridcolumnconfig);
