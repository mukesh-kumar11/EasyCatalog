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

	getTree: function () {
		if (!this.tree) {
			  var store = Ext.create('Ext.data.TreeStore', {
				autoLoad: false,
				autoSync: true,
				proxy: {
					type: 'ajax',
					url: '/admin/EasyCatalogExport/export/tree',
					reader: {
						type: 'json'
					}
				},
				root: {
					iconCls: "pimcore_icon_thumbnails"
				}
			}); 
			
			this.tree = new Ext.tree.TreePanel({
				id: "exports_tree",
				store: store,
				region: "west",
				autoScroll: true,
				animate: false,
				containerScroll: true,
				width: 250,
				split: true,
				root: {
					id: '0',
					expanded: true
				},
				rootVisible: false,
				listeners: this.getTreeNodeListeners(),
				tbar: {
					items: [{
							text: 'Add Export Configuration',
							iconCls: "pimcore_icon_thumbnails",
							handler: this.addField.bind(this)
						}]
				}
			});
			this.tree.on("render", function () {
				this.getRootNode().expand();
			});
		}

		return this.tree;
	},
	
	addField: function () {
		Ext.MessageBox.prompt(
				'EasyCatalogExport',
				'Please insert the name of new Easy Catalog Export',
				this.addFieldComplete.bind(this), null, null, "");
	},
	
	// Adds new EasyCatalogExport Object
	addFieldComplete: function (button, value, object) {

		// Validation on EasyCatalogExport name
		var regresult = value.match(/[a-zA-Z0-9_\-]+/);
		if (button == "ok" && value.length > 2 && regresult == value) {

			var codes = this.tree.getRootNode().childNodes;
			for (var i = 0; i < codes.length; i++) {
				if (codes[i].text == value) {
					Ext.MessageBox.alert('export_title', 'EasyCatalogExport key already exists');
					return;
				}
			}
			Ext.Ajax.request({
				url: "/admin/EasyCatalogExport/export/add",
				params: {
					name: value
				},
				success: function (response) {
					var data = Ext.decode(response.responseText);
					this.tree.getStore().load({
						node: this.tree.getRootNode()
					});
					if (data.success == false) {
						Ext.Msg.alert("Error", "Error while adding EasyCatalogExport");
					} else if (data.conn == false) {
						Ext.Msg.alert('Error', "EasyCatalogExport already Exists");
					} else {
						this.openConfig(data.id);
					}
				}.bind(this)
			});
		} else if (button == "cancel") {
			return;
		} else {
			Ext.Msg.alert("Error",
					"Error while adding EasyCatalogExport");
		}
	},
	
	
	// Exports event listeners
	getTreeNodeListeners: function () {
		var treeNodeListeners = {
			'itemclick': this.onTreeNodeClick.bind(this),
			"itemcontextmenu": this.onTreeNodeContextmenu.bind(this),
			'beforeitemappend': function (thisNode, newChildNode,
					index, eOpts) {
				newChildNode.data.leaf = true;
				newChildNode.data.expaned = true;
				newChildNode.data.iconCls = "pimcore_icon_sql";
			}
		};
		return treeNodeListeners;
	},
	
 // Opens Export Object 
	onTreeNodeClick: function (tree, record, item, index, e, eOpts) {
		var tree = Ext.getCmp("pimcore_panel_tree_objects");
		this.openConfig(record.data.id);
	},
	
	// Creates an option to delete Export object
	onTreeNodeContextmenu: function (tree, record, item, index, e, eOpts) {
		e.stopEvent();
		tree.select();
		var menu = new Ext.menu.Menu();
		menu.add(new Ext.menu.Item({
			text: t('delete'),
			iconCls: "pimcore_icon_delete",
			handler: this.deleteField.bind(this, tree, record)
		}));
		menu.add(new Ext.menu.Item({
			text: "Duplicate",
			iconCls: "pimcore_icon_clone",
			handler: this.pasteInfo.bind(this, tree, record, "child")
		}));
		menu.add(new Ext.menu.Item({
			text: t('rename'),
			iconCls: "pimcore_icon_key pimcore_icon_overlay_go",
			handler: this.editObjectKey.bind(this, tree, record)
		}));

		menu.showAt(e.pageX, e.pageY);
	},
	
	// Deletes Export object
	deleteField: function (tree, record) {
		Ext.Ajax.request({
			url: "/admin/EasyCatalogExport/export/delete",
			params: {
				name: record.data.id
			}
		});
		this.getEditPanel().removeAll();
		record.remove();
	},
	
	// Open Mapping objects edit panel
	getEditPanel: function () {
		if (!this.editPanel) {
			this.editPanel = new Ext.TabPanel({
				region: "center",
				plugins: ['tabclosemenu']
			});
		}

		// expanding left tree panel -- starts
		this.editPanel.on('remove', function (panel, item, index, eOpts) {
			var comp = Ext.getCmp("pimcore_panel_tree_left");
			if (panel.items.length == 0) {
				comp.expand();
			}
		});
		// expanding left tree panel -- ends

		return this.editPanel;
	},
	
	pasteInfo: function (tree, record, type) {
		pimcore.cachedExportId = record.data.id;
		var targetFolderId = null;
		Ext.Ajax.request({
			url: "/admin/EasyCatalogExport/export/get-export-folder-id",
			success: function (response) {
				var response = Ext.decode(response.responseText);
				console.log(response);
				if (response.success) {
					targetFolderId = response.exportFolderId;
					pimcore.helpers.addTreeNodeLoadingIndicator("object", record.data.id);
					Ext.Ajax.request({
						url: "/admin/EasyCatalogExport/export/copy-info",
						params: {
							targetId: targetFolderId,
							sourceId: pimcore.cachedExportId,
							type: type
						},
						success: this.paste.bind(this, tree, record)
					});
				} else {
					var msg = response.msg;
					Ext.MessageBox.alert('Error', msg);
				}
			}.bind(this)
		});

	},
	
	 paste: function (tree, record, response) {

			try {
				var res = Ext.decode(response.responseText);

				if (res.pastejobs) {

					record.pasteProgressBar = new Ext.ProgressBar({
						text: t('initializing')
					});
					record.pasteWindow = new Ext.Window({
						title: t("paste"),
						layout: 'fit',
						width: 500,
						bodyStyle: "padding: 10px;",
						closable: false,
						plain: true,
						modal: true,
						items: [record.pasteProgressBar]
					});
					record.pasteWindow.show();
					var pj = new pimcore.tool.paralleljobs({
						success: function () {

							try {
								this.pasteComplete(tree, record);
							} catch (e) {
								console.log(e);
								pimcore.helpers.showNotification(t("error"), t("error_pasting_object"), "error");
								pimcore.elementservice.refreshNodeAllTrees("object", record.id);
							}
						}.bind(this),
						update: function (currentStep, steps, percent) {
							if (record.pasteProgressBar) {
								var status = currentStep / steps;
								record.pasteProgressBar.updateProgress(status, percent + "%");
							}
						}.bind(this),
						failure: function (message) {
							record.pasteWindow.close();
							record.pasteProgressBar = null;
							pimcore.helpers.showNotification(t("error"), t("error_pasting_object"), "error", t(message));
							pimcore.elementservice.refreshNodeAllTrees("object", record.parentNode.id);
						}.bind(this),
						jobs: res.pastejobs
					});
				} else {
					throw "There are no pasting jobs";
				}
			} catch (e) {
				console.log(e);
				Ext.MessageBox.alert(t('error'), e);
				this.pasteComplete(tree, record);
			}
		},
		pasteComplete: function (tree, record) {
			if (record.pasteWindow) {
				record.pasteWindow.close();
			}

			record.pasteProgressBar = null;
			record.pasteWindow = null;
			//this.tree.loadMask.hide();
			pimcore.helpers.removeTreeNodeLoadingIndicator("object", record.id);
			pimcore.elementservice.refreshNodeAllTrees("object", record.id);
			this.tree.getStore().load();
		},
		
		editObjectKey: function (tree, record) {
			var options = {
				sourceTree: tree,
				elementType: "object",
				elementSubType: record.data.type,
				id: record.data.id,
				default: record.data.text
			};
			this.editElementKey(options);
		},
		editElementKey: function (options) {
			if (options.elementType == "asset") {
				completeCallback = pimcore.elementservice.editAssetKeyComplete.bind(this, options);
			} else if (options.elementType == "document") {
				completeCallback = pimcore.elementservice.editDocumentKeyComplete.bind(this, options);
			} else if (options.elementType == "object") {
				completeCallback = this.editObjectKeyComplete.bind(this, options);
			} else {
				throw new Error("type " + options.elementType + " not supported!");
			}

			Ext.MessageBox.prompt(t('rename'), t('please_enter_the_new_name'), completeCallback, window, false, options.default);
		},
		editObjectKeyComplete: function (options, button, value, object) {
			if (button == "ok") {

				var record;
				var id = options.id;
				var elementType = options.elementType;
				value = pimcore.helpers.getValidFilename(value, "object");
				if (options.sourceTree) {
					var tree = options.sourceTree;
					var store = tree.getStore();
					record = store.getById(id);
					if (pimcore.elementservice.isKeyExistingInLevel(record.parentNode, value, record)) {
						return;
					}
				}

				var affectedNodes = pimcore.elementservice.getAffectedNodes(elementType, id);
				if (affectedNodes) {
					record = affectedNodes[0];
					if (record) {
						originalText = record.get("text");
						originalPath = record.get("path");
					}
				}
				pimcore.elementservice.applyNewKey(affectedNodes, elementType, id, value);

				this.updateObject(id, {key: value},
						function (response) {
							var index, record;
							for (index = 0; index < affectedNodes.length; index++) {
								record = affectedNodes[index];
								pimcore.elementservice.refreshNode(record);
							}

							try {
								var rdata = Ext.decode(response.responseText);
								if (rdata && rdata.success) {
									pimcore.elementservice.reopenElement(options);
									// removes loading indicator added in the applyNewKey method
									pimcore.helpers.removeTreeNodeLoadingIndicator(elementType, id);
								} else {
									pimcore.helpers.showNotification(t("error"), t("error_renaming_object"), "error",
											t(rdata.message));
									for (index = 0; index < affectedNodes.length; index++) {
										record = affectedNodes[index];
										pimcore.elementservice.refreshNode(record.parentNode);
									}
								}
							} catch (e) {
								pimcore.helpers.showNotification(t("error"), t("error_renaming_object"), "error");
								for (index = 0; index < affectedNodes.length; index++) {
									record = affectedNodes[index];
									pimcore.elementservice.refreshNode(record.parentNode);
								}
							}
							this.tree.getStore().load();
						}.bind(this))
						;
			}
		},
		
		updateObject: function (id, values, callback) {
			if (!callback) {
				callback = function () {
				};
			}

			Ext.Ajax.request({
				url: "/admin/EasyCatalogExport/export/rename",
				method: "post",
				params: {
					id: id,
					values: Ext.encode(values)
				},
				success: callback
			});
		},
	
	// Opens Export configuration
	openConfig: function (id) {
		var existingPanel = Ext.getCmp("export_" + id);
		//var existingPanel = Ext.getCmp("object_1");
		// Activates already existing panel
		if (existingPanel) {
			this.editPanel.setActiveTab(existingPanel);
			return;
		}

		// closing left tree panel -- open
		var comp = Ext.getCmp("pimcore_panel_tree_left");
		comp.collapse();
		// closing left tree panel -- ends


		Ext.Ajax.request({
			url: "/admin/EasyCatalogExport/export/get-export-detail",
			params: {
				id: id
			},
			success: function (response) {
				var data = Ext.decode(response.responseText);
				if (data.success) {
					var tab = Ext.getCmp("object_1");
					tab.add(this.getTabPanel());
					tab.add(this.getLayoutToolbar());
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
	},

    addTab: function () {

        var tabTitle = this.data.general.o_key;
        if (this.id == 1) {
            tabTitle = "Easy Catalog Export";
        }

        this.tabPanel = Ext.getCmp("pimcore_panel_tabs");
        var tabId = "object_" + this.id;

        this.tab = new Ext.Panel({
            id: tabId,
            title: tabTitle,
            closable:true,
            layout: "border",
            items: [
				this.getTree(),
                //this.getTabPanel(),
                //this.getLayoutToolbar(),
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
     
     /* 
      * columnConfigId
      * filters
      * classId
      * */
        var data = {
                    'fields': this.search.fieldObject,
                    'class_id' : this.search.classId,
                    'filters' : this.search.store.filters.items
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


