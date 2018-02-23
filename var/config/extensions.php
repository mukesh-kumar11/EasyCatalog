<?php 

return [
    "plugin" => [
        "Elements_OutputDataConfigToolkit" => TRUE,
        "EcommerceFramework" => TRUE,
        "ElementsWorkfrontAuth" => TRUE,
        "Web2Print" => TRUE
    ],
    "brick" => [
        "image" => "1",
        "wysiwyg" => TRUE,
        "productgrid" => "1",
        "productteaser" => "1"
    ],
    "bundle" => [
        "Pimcore\\Bundle\\EcommerceFrameworkBundle\\PimcoreEcommerceFrameworkBundle" => TRUE,
        "OutputDataConfigToolkitBundle\\OutputDataConfigToolkitBundle" => TRUE,
        "Web2PrintToolsBundle\\Web2PrintToolsBundle" => FALSE,
        "AdvancedObjectSearchBundle\\AdvancedObjectSearchBundle" => FALSE,
        "CustomerManagementFrameworkBundle\\PimcoreCustomerManagementFrameworkBundle" => TRUE,
        "Pimcore\\Bundle\\ObjectMergerBundle\\ObjectMergerBundle" => TRUE,
        "EasyCatalogExportBundle\\EasyCatalogExportBundle" => TRUE
    ]
];
