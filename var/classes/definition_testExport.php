<?php 

/** 
* Generated at: 2018-02-22T12:21:16+01:00
* Inheritance: no
* Variants: no
* Changed by: admin (16)
* IP: 127.0.0.1


Fields Summary: 
- ainput [input]
- atextarea [textarea]
- awyswyg [wysiwyg]
- apassword [password]
- ainput_qty_value [inputQuantityValue]
- anumber [numeric]
- aslider [slider]
- aqty_value [quantityValue]
- adateandtime [datetime]
- aboolselect [booleanSelect]
- aselect [select]
- auser [user]
- acountry [country]
- alan [language]
- amultiselection [multiselect]
- acountries_multi [countrymultiselect]
- alan_multi [languagemultiselect]
- ahref [href]
- aobjects [objects]
- amultihrefadv [multihrefMetadata]
- aobjects_nonowner [nonownerobjects]
- amul_href [multihref]
- ablock [block]
- aclassification_store [classificationstore]
- atable [table]
- astr_table [structuredTable]
- afc [fieldcollections]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'name' => 'testExport',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1519298432,
   'userOwner' => 16,
   'userModification' => 16,
   'parentClass' => '',
   'useTraits' => '',
   'allowInherit' => false,
   'allowVariants' => false,
   'showVariants' => false,
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => NULL,
     'collapsed' => NULL,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'fieldtype' => 'panel',
         'labelWidth' => 100,
         'layout' => NULL,
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => NULL,
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => NULL,
         'bodyStyle' => NULL,
         'datatype' => 'layout',
         'permissions' => NULL,
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => NULL,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'regex' => '',
             'unique' => false,
             'name' => 'ainput',
             'title' => 'input',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
             'fieldtype' => 'textarea',
             'width' => '',
             'height' => '',
             'queryColumnType' => 'longtext',
             'columnType' => 'longtext',
             'phpdocType' => 'string',
             'name' => 'atextarea',
             'title' => 'textarea',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
             'fieldtype' => 'wysiwyg',
             'width' => '',
             'height' => '',
             'queryColumnType' => 'longtext',
             'columnType' => 'longtext',
             'phpdocType' => 'string',
             'toolbarConfig' => '',
             'name' => 'awyswyg',
             'title' => 'wyswyg',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Password::__set_state(array(
             'fieldtype' => 'password',
             'width' => '',
             'queryColumnType' => 'varchar(190)',
             'columnType' => 'varchar(190)',
             'phpdocType' => 'string',
             'algorithm' => 'password_hash',
             'salt' => '',
             'saltlocation' => 'back',
             'name' => 'apassword',
             'title' => 'password',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\InputQuantityValue::__set_state(array(
             'fieldtype' => 'inputQuantityValue',
             'defaultValue' => NULL,
             'queryColumnType' => 
            array (
              'value' => 'varchar(255)',
              'unit' => 'bigint(20)',
            ),
             'columnType' => 
            array (
              'value' => 'varchar(255)',
              'unit' => 'bigint(20)',
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\InputQuantityValue',
             'width' => NULL,
             'defaultUnit' => NULL,
             'validUnits' => 
            array (
            ),
             'decimalPrecision' => NULL,
             'name' => 'ainput_qty_value',
             'title' => 'input_qty_value',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          5 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
             'fieldtype' => 'numeric',
             'width' => '',
             'defaultValue' => NULL,
             'queryColumnType' => 'double',
             'columnType' => 'double',
             'phpdocType' => 'float',
             'integer' => false,
             'unsigned' => false,
             'minValue' => NULL,
             'maxValue' => NULL,
             'unique' => false,
             'decimalSize' => NULL,
             'decimalPrecision' => NULL,
             'name' => 'anumber',
             'title' => 'number',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          6 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Slider::__set_state(array(
             'fieldtype' => 'slider',
             'width' => '',
             'height' => '',
             'minValue' => '',
             'maxValue' => '',
             'vertical' => false,
             'increment' => '',
             'decimalPrecision' => '',
             'queryColumnType' => 'double',
             'columnType' => 'double',
             'phpdocType' => 'float',
             'name' => 'aslider',
             'title' => 'slider',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          7 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'fieldtype' => 'quantityValue',
             'width' => NULL,
             'defaultValue' => NULL,
             'defaultUnit' => NULL,
             'validUnits' => 
            array (
            ),
             'decimalPrecision' => NULL,
             'queryColumnType' => 
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'columnType' => 
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\QuantityValue',
             'name' => 'aqty_value',
             'title' => 'qty_value',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          8 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Datetime::__set_state(array(
             'fieldtype' => 'datetime',
             'queryColumnType' => 'bigint(20)',
             'columnType' => 'bigint(20)',
             'phpdocType' => '\\Carbon\\Carbon',
             'defaultValue' => NULL,
             'useCurrentDate' => false,
             'name' => 'adateandtime',
             'title' => 'dateandtime',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          9 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\BooleanSelect::__set_state(array(
             'fieldtype' => 'booleanSelect',
             'yesLabel' => 'yes',
             'noLabel' => 'no',
             'emptyLabel' => 'empty',
             'options' => 
            array (
              0 => 
              array (
                'key' => 'empty',
                'value' => 0,
              ),
              1 => 
              array (
                'key' => 'yes',
                'value' => 1,
              ),
              2 => 
              array (
                'key' => 'no',
                'value' => -1,
              ),
            ),
             'width' => '',
             'queryColumnType' => 'tinyint(1) null',
             'columnType' => 'tinyint(1) null',
             'phpdocType' => 'boolean',
             'name' => 'aboolselect',
             'title' => 'boolselect',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          10 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'fieldtype' => 'select',
             'options' => 
            array (
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'name' => 'aselect',
             'title' => 'select',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          11 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\User::__set_state(array(
             'fieldtype' => 'user',
             'options' => 
            array (
              0 => 
              array (
                'value' => '16',
                'key' => 'admin',
              ),
              1 => 
              array (
                'value' => '3',
                'key' => 'demo',
              ),
              2 => 
              array (
                'value' => '9',
                'key' => 'test',
              ),
            ),
             'width' => '',
             'defaultValue' => NULL,
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'name' => 'auser',
             'title' => 'user',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          12 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Country::__set_state(array(
             'fieldtype' => 'country',
             'restrictTo' => '',
             'options' => 
            array (
              0 => 
              array (
                'key' => 'Afghanistan',
                'value' => 'AF',
              ),
              1 => 
              array (
                'key' => 'Albania',
                'value' => 'AL',
              ),
              2 => 
              array (
                'key' => 'Algeria',
                'value' => 'DZ',
              ),
              3 => 
              array (
                'key' => 'American Samoa',
                'value' => 'AS',
              ),
              4 => 
              array (
                'key' => 'Andorra',
                'value' => 'AD',
              ),
              5 => 
              array (
                'key' => 'Angola',
                'value' => 'AO',
              ),
              6 => 
              array (
                'key' => 'Anguilla',
                'value' => 'AI',
              ),
              7 => 
              array (
                'key' => 'Antigua and Barbuda',
                'value' => 'AG',
              ),
              8 => 
              array (
                'key' => 'Argentina',
                'value' => 'AR',
              ),
              9 => 
              array (
                'key' => 'Armenia',
                'value' => 'AM',
              ),
              10 => 
              array (
                'key' => 'Aruba',
                'value' => 'AW',
              ),
              11 => 
              array (
                'key' => 'Australia',
                'value' => 'AU',
              ),
              12 => 
              array (
                'key' => 'Austria',
                'value' => 'AT',
              ),
              13 => 
              array (
                'key' => 'Azerbaijan',
                'value' => 'AZ',
              ),
              14 => 
              array (
                'key' => 'Bahamas',
                'value' => 'BS',
              ),
              15 => 
              array (
                'key' => 'Bahrain',
                'value' => 'BH',
              ),
              16 => 
              array (
                'key' => 'Bangladesh',
                'value' => 'BD',
              ),
              17 => 
              array (
                'key' => 'Barbados',
                'value' => 'BB',
              ),
              18 => 
              array (
                'key' => 'Belarus',
                'value' => 'BY',
              ),
              19 => 
              array (
                'key' => 'Belgium',
                'value' => 'BE',
              ),
              20 => 
              array (
                'key' => 'Belize',
                'value' => 'BZ',
              ),
              21 => 
              array (
                'key' => 'Benin',
                'value' => 'BJ',
              ),
              22 => 
              array (
                'key' => 'Bermuda',
                'value' => 'BM',
              ),
              23 => 
              array (
                'key' => 'Bhutan',
                'value' => 'BT',
              ),
              24 => 
              array (
                'key' => 'Bolivia',
                'value' => 'BO',
              ),
              25 => 
              array (
                'key' => 'Bosnia and Herzegovina',
                'value' => 'BA',
              ),
              26 => 
              array (
                'key' => 'Botswana',
                'value' => 'BW',
              ),
              27 => 
              array (
                'key' => 'Brazil',
                'value' => 'BR',
              ),
              28 => 
              array (
                'key' => 'British Indian Ocean Territory',
                'value' => 'IO',
              ),
              29 => 
              array (
                'key' => 'British Virgin Islands',
                'value' => 'VG',
              ),
              30 => 
              array (
                'key' => 'Brunei',
                'value' => 'BN',
              ),
              31 => 
              array (
                'key' => 'Bulgaria',
                'value' => 'BG',
              ),
              32 => 
              array (
                'key' => 'Burkina Faso',
                'value' => 'BF',
              ),
              33 => 
              array (
                'key' => 'Burundi',
                'value' => 'BI',
              ),
              34 => 
              array (
                'key' => 'Cambodia',
                'value' => 'KH',
              ),
              35 => 
              array (
                'key' => 'Cameroon',
                'value' => 'CM',
              ),
              36 => 
              array (
                'key' => 'Canada',
                'value' => 'CA',
              ),
              37 => 
              array (
                'key' => 'Canary Islands',
                'value' => 'IC',
              ),
              38 => 
              array (
                'key' => 'Cape Verde',
                'value' => 'CV',
              ),
              39 => 
              array (
                'key' => 'Caribbean Netherlands',
                'value' => 'BQ',
              ),
              40 => 
              array (
                'key' => 'Cayman Islands',
                'value' => 'KY',
              ),
              41 => 
              array (
                'key' => 'Central African Republic',
                'value' => 'CF',
              ),
              42 => 
              array (
                'key' => 'Ceuta and Melilla',
                'value' => 'EA',
              ),
              43 => 
              array (
                'key' => 'Chad',
                'value' => 'TD',
              ),
              44 => 
              array (
                'key' => 'Chile',
                'value' => 'CL',
              ),
              45 => 
              array (
                'key' => 'China',
                'value' => 'CN',
              ),
              46 => 
              array (
                'key' => 'Christmas Island',
                'value' => 'CX',
              ),
              47 => 
              array (
                'key' => 'Cocos (Keeling) Islands',
                'value' => 'CC',
              ),
              48 => 
              array (
                'key' => 'Colombia',
                'value' => 'CO',
              ),
              49 => 
              array (
                'key' => 'Comoros',
                'value' => 'KM',
              ),
              50 => 
              array (
                'key' => 'Congo - Brazzaville',
                'value' => 'CG',
              ),
              51 => 
              array (
                'key' => 'Congo - Kinshasa',
                'value' => 'CD',
              ),
              52 => 
              array (
                'key' => 'Cook Islands',
                'value' => 'CK',
              ),
              53 => 
              array (
                'key' => 'Costa Rica',
                'value' => 'CR',
              ),
              54 => 
              array (
                'key' => 'Croatia',
                'value' => 'HR',
              ),
              55 => 
              array (
                'key' => 'Cuba',
                'value' => 'CU',
              ),
              56 => 
              array (
                'key' => 'Curaçao',
                'value' => 'CW',
              ),
              57 => 
              array (
                'key' => 'Cyprus',
                'value' => 'CY',
              ),
              58 => 
              array (
                'key' => 'Czech Republic',
                'value' => 'CZ',
              ),
              59 => 
              array (
                'key' => 'Côte d’Ivoire',
                'value' => 'CI',
              ),
              60 => 
              array (
                'key' => 'Denmark',
                'value' => 'DK',
              ),
              61 => 
              array (
                'key' => 'Diego Garcia',
                'value' => 'DG',
              ),
              62 => 
              array (
                'key' => 'Djibouti',
                'value' => 'DJ',
              ),
              63 => 
              array (
                'key' => 'Dominica',
                'value' => 'DM',
              ),
              64 => 
              array (
                'key' => 'Dominican Republic',
                'value' => 'DO',
              ),
              65 => 
              array (
                'key' => 'Ecuador',
                'value' => 'EC',
              ),
              66 => 
              array (
                'key' => 'Egypt',
                'value' => 'EG',
              ),
              67 => 
              array (
                'key' => 'El Salvador',
                'value' => 'SV',
              ),
              68 => 
              array (
                'key' => 'Equatorial Guinea',
                'value' => 'GQ',
              ),
              69 => 
              array (
                'key' => 'Eritrea',
                'value' => 'ER',
              ),
              70 => 
              array (
                'key' => 'Estonia',
                'value' => 'EE',
              ),
              71 => 
              array (
                'key' => 'Ethiopia',
                'value' => 'ET',
              ),
              72 => 
              array (
                'key' => 'Falkland Islands',
                'value' => 'FK',
              ),
              73 => 
              array (
                'key' => 'Faroe Islands',
                'value' => 'FO',
              ),
              74 => 
              array (
                'key' => 'Fiji',
                'value' => 'FJ',
              ),
              75 => 
              array (
                'key' => 'Finland',
                'value' => 'FI',
              ),
              76 => 
              array (
                'key' => 'France',
                'value' => 'FR',
              ),
              77 => 
              array (
                'key' => 'French Guiana',
                'value' => 'GF',
              ),
              78 => 
              array (
                'key' => 'French Polynesia',
                'value' => 'PF',
              ),
              79 => 
              array (
                'key' => 'Gabon',
                'value' => 'GA',
              ),
              80 => 
              array (
                'key' => 'Gambia',
                'value' => 'GM',
              ),
              81 => 
              array (
                'key' => 'Georgia',
                'value' => 'GE',
              ),
              82 => 
              array (
                'key' => 'Germany',
                'value' => 'DE',
              ),
              83 => 
              array (
                'key' => 'Ghana',
                'value' => 'GH',
              ),
              84 => 
              array (
                'key' => 'Gibraltar',
                'value' => 'GI',
              ),
              85 => 
              array (
                'key' => 'Greece',
                'value' => 'GR',
              ),
              86 => 
              array (
                'key' => 'Greenland',
                'value' => 'GL',
              ),
              87 => 
              array (
                'key' => 'Grenada',
                'value' => 'GD',
              ),
              88 => 
              array (
                'key' => 'Guadeloupe',
                'value' => 'GP',
              ),
              89 => 
              array (
                'key' => 'Guam',
                'value' => 'GU',
              ),
              90 => 
              array (
                'key' => 'Guatemala',
                'value' => 'GT',
              ),
              91 => 
              array (
                'key' => 'Guernsey',
                'value' => 'GG',
              ),
              92 => 
              array (
                'key' => 'Guinea',
                'value' => 'GN',
              ),
              93 => 
              array (
                'key' => 'Guinea-Bissau',
                'value' => 'GW',
              ),
              94 => 
              array (
                'key' => 'Guyana',
                'value' => 'GY',
              ),
              95 => 
              array (
                'key' => 'Haiti',
                'value' => 'HT',
              ),
              96 => 
              array (
                'key' => 'Honduras',
                'value' => 'HN',
              ),
              97 => 
              array (
                'key' => 'Hong Kong SAR China',
                'value' => 'HK',
              ),
              98 => 
              array (
                'key' => 'Hungary',
                'value' => 'HU',
              ),
              99 => 
              array (
                'key' => 'Iceland',
                'value' => 'IS',
              ),
              100 => 
              array (
                'key' => 'India',
                'value' => 'IN',
              ),
              101 => 
              array (
                'key' => 'Indonesia',
                'value' => 'ID',
              ),
              102 => 
              array (
                'key' => 'Iran',
                'value' => 'IR',
              ),
              103 => 
              array (
                'key' => 'Iraq',
                'value' => 'IQ',
              ),
              104 => 
              array (
                'key' => 'Ireland',
                'value' => 'IE',
              ),
              105 => 
              array (
                'key' => 'Isle of Man',
                'value' => 'IM',
              ),
              106 => 
              array (
                'key' => 'Israel',
                'value' => 'IL',
              ),
              107 => 
              array (
                'key' => 'Italy',
                'value' => 'IT',
              ),
              108 => 
              array (
                'key' => 'Jamaica',
                'value' => 'JM',
              ),
              109 => 
              array (
                'key' => 'Japan',
                'value' => 'JP',
              ),
              110 => 
              array (
                'key' => 'Jersey',
                'value' => 'JE',
              ),
              111 => 
              array (
                'key' => 'Jordan',
                'value' => 'JO',
              ),
              112 => 
              array (
                'key' => 'Kazakhstan',
                'value' => 'KZ',
              ),
              113 => 
              array (
                'key' => 'Kenya',
                'value' => 'KE',
              ),
              114 => 
              array (
                'key' => 'Kiribati',
                'value' => 'KI',
              ),
              115 => 
              array (
                'key' => 'Kosovo',
                'value' => 'XK',
              ),
              116 => 
              array (
                'key' => 'Kuwait',
                'value' => 'KW',
              ),
              117 => 
              array (
                'key' => 'Kyrgyzstan',
                'value' => 'KG',
              ),
              118 => 
              array (
                'key' => 'Laos',
                'value' => 'LA',
              ),
              119 => 
              array (
                'key' => 'Latvia',
                'value' => 'LV',
              ),
              120 => 
              array (
                'key' => 'Lebanon',
                'value' => 'LB',
              ),
              121 => 
              array (
                'key' => 'Lesotho',
                'value' => 'LS',
              ),
              122 => 
              array (
                'key' => 'Liberia',
                'value' => 'LR',
              ),
              123 => 
              array (
                'key' => 'Libya',
                'value' => 'LY',
              ),
              124 => 
              array (
                'key' => 'Liechtenstein',
                'value' => 'LI',
              ),
              125 => 
              array (
                'key' => 'Lithuania',
                'value' => 'LT',
              ),
              126 => 
              array (
                'key' => 'Luxembourg',
                'value' => 'LU',
              ),
              127 => 
              array (
                'key' => 'Macau SAR China',
                'value' => 'MO',
              ),
              128 => 
              array (
                'key' => 'Macedonia',
                'value' => 'MK',
              ),
              129 => 
              array (
                'key' => 'Madagascar',
                'value' => 'MG',
              ),
              130 => 
              array (
                'key' => 'Malawi',
                'value' => 'MW',
              ),
              131 => 
              array (
                'key' => 'Malaysia',
                'value' => 'MY',
              ),
              132 => 
              array (
                'key' => 'Mali',
                'value' => 'ML',
              ),
              133 => 
              array (
                'key' => 'Malta',
                'value' => 'MT',
              ),
              134 => 
              array (
                'key' => 'Marshall Islands',
                'value' => 'MH',
              ),
              135 => 
              array (
                'key' => 'Martinique',
                'value' => 'MQ',
              ),
              136 => 
              array (
                'key' => 'Mauritania',
                'value' => 'MR',
              ),
              137 => 
              array (
                'key' => 'Mauritius',
                'value' => 'MU',
              ),
              138 => 
              array (
                'key' => 'Mayotte',
                'value' => 'YT',
              ),
              139 => 
              array (
                'key' => 'Mexico',
                'value' => 'MX',
              ),
              140 => 
              array (
                'key' => 'Micronesia',
                'value' => 'FM',
              ),
              141 => 
              array (
                'key' => 'Moldova',
                'value' => 'MD',
              ),
              142 => 
              array (
                'key' => 'Monaco',
                'value' => 'MC',
              ),
              143 => 
              array (
                'key' => 'Mongolia',
                'value' => 'MN',
              ),
              144 => 
              array (
                'key' => 'Montenegro',
                'value' => 'ME',
              ),
              145 => 
              array (
                'key' => 'Montserrat',
                'value' => 'MS',
              ),
              146 => 
              array (
                'key' => 'Morocco',
                'value' => 'MA',
              ),
              147 => 
              array (
                'key' => 'Mozambique',
                'value' => 'MZ',
              ),
              148 => 
              array (
                'key' => 'Myanmar (Burma)',
                'value' => 'MM',
              ),
              149 => 
              array (
                'key' => 'Namibia',
                'value' => 'NA',
              ),
              150 => 
              array (
                'key' => 'Nauru',
                'value' => 'NR',
              ),
              151 => 
              array (
                'key' => 'Nepal',
                'value' => 'NP',
              ),
              152 => 
              array (
                'key' => 'Netherlands',
                'value' => 'NL',
              ),
              153 => 
              array (
                'key' => 'New Caledonia',
                'value' => 'NC',
              ),
              154 => 
              array (
                'key' => 'New Zealand',
                'value' => 'NZ',
              ),
              155 => 
              array (
                'key' => 'Nicaragua',
                'value' => 'NI',
              ),
              156 => 
              array (
                'key' => 'Niger',
                'value' => 'NE',
              ),
              157 => 
              array (
                'key' => 'Nigeria',
                'value' => 'NG',
              ),
              158 => 
              array (
                'key' => 'Niue',
                'value' => 'NU',
              ),
              159 => 
              array (
                'key' => 'Norfolk Island',
                'value' => 'NF',
              ),
              160 => 
              array (
                'key' => 'North Korea',
                'value' => 'KP',
              ),
              161 => 
              array (
                'key' => 'Northern Mariana Islands',
                'value' => 'MP',
              ),
              162 => 
              array (
                'key' => 'Norway',
                'value' => 'NO',
              ),
              163 => 
              array (
                'key' => 'Oman',
                'value' => 'OM',
              ),
              164 => 
              array (
                'key' => 'Pakistan',
                'value' => 'PK',
              ),
              165 => 
              array (
                'key' => 'Palau',
                'value' => 'PW',
              ),
              166 => 
              array (
                'key' => 'Palestinian Territories',
                'value' => 'PS',
              ),
              167 => 
              array (
                'key' => 'Panama',
                'value' => 'PA',
              ),
              168 => 
              array (
                'key' => 'Papua New Guinea',
                'value' => 'PG',
              ),
              169 => 
              array (
                'key' => 'Paraguay',
                'value' => 'PY',
              ),
              170 => 
              array (
                'key' => 'Peru',
                'value' => 'PE',
              ),
              171 => 
              array (
                'key' => 'Philippines',
                'value' => 'PH',
              ),
              172 => 
              array (
                'key' => 'Pitcairn Islands',
                'value' => 'PN',
              ),
              173 => 
              array (
                'key' => 'Poland',
                'value' => 'PL',
              ),
              174 => 
              array (
                'key' => 'Portugal',
                'value' => 'PT',
              ),
              175 => 
              array (
                'key' => 'Puerto Rico',
                'value' => 'PR',
              ),
              176 => 
              array (
                'key' => 'Qatar',
                'value' => 'QA',
              ),
              177 => 
              array (
                'key' => 'Romania',
                'value' => 'RO',
              ),
              178 => 
              array (
                'key' => 'Russia',
                'value' => 'RU',
              ),
              179 => 
              array (
                'key' => 'Rwanda',
                'value' => 'RW',
              ),
              180 => 
              array (
                'key' => 'Réunion',
                'value' => 'RE',
              ),
              181 => 
              array (
                'key' => 'Saint Barthélemy',
                'value' => 'BL',
              ),
              182 => 
              array (
                'key' => 'Saint Helena',
                'value' => 'SH',
              ),
              183 => 
              array (
                'key' => 'Saint Kitts and Nevis',
                'value' => 'KN',
              ),
              184 => 
              array (
                'key' => 'Saint Lucia',
                'value' => 'LC',
              ),
              185 => 
              array (
                'key' => 'Saint Martin',
                'value' => 'MF',
              ),
              186 => 
              array (
                'key' => 'Saint Pierre and Miquelon',
                'value' => 'PM',
              ),
              187 => 
              array (
                'key' => 'Samoa',
                'value' => 'WS',
              ),
              188 => 
              array (
                'key' => 'San Marino',
                'value' => 'SM',
              ),
              189 => 
              array (
                'key' => 'Saudi Arabia',
                'value' => 'SA',
              ),
              190 => 
              array (
                'key' => 'Senegal',
                'value' => 'SN',
              ),
              191 => 
              array (
                'key' => 'Serbia',
                'value' => 'RS',
              ),
              192 => 
              array (
                'key' => 'Seychelles',
                'value' => 'SC',
              ),
              193 => 
              array (
                'key' => 'Sierra Leone',
                'value' => 'SL',
              ),
              194 => 
              array (
                'key' => 'Singapore',
                'value' => 'SG',
              ),
              195 => 
              array (
                'key' => 'Sint Maarten',
                'value' => 'SX',
              ),
              196 => 
              array (
                'key' => 'Slovakia',
                'value' => 'SK',
              ),
              197 => 
              array (
                'key' => 'Slovenia',
                'value' => 'SI',
              ),
              198 => 
              array (
                'key' => 'Solomon Islands',
                'value' => 'SB',
              ),
              199 => 
              array (
                'key' => 'Somalia',
                'value' => 'SO',
              ),
              200 => 
              array (
                'key' => 'South Africa',
                'value' => 'ZA',
              ),
              201 => 
              array (
                'key' => 'South Korea',
                'value' => 'KR',
              ),
              202 => 
              array (
                'key' => 'South Sudan',
                'value' => 'SS',
              ),
              203 => 
              array (
                'key' => 'Spain',
                'value' => 'ES',
              ),
              204 => 
              array (
                'key' => 'Sri Lanka',
                'value' => 'LK',
              ),
              205 => 
              array (
                'key' => 'St. Vincent & Grenadines',
                'value' => 'VC',
              ),
              206 => 
              array (
                'key' => 'Sudan',
                'value' => 'SD',
              ),
              207 => 
              array (
                'key' => 'Suriname',
                'value' => 'SR',
              ),
              208 => 
              array (
                'key' => 'Svalbard and Jan Mayen',
                'value' => 'SJ',
              ),
              209 => 
              array (
                'key' => 'Swaziland',
                'value' => 'SZ',
              ),
              210 => 
              array (
                'key' => 'Sweden',
                'value' => 'SE',
              ),
              211 => 
              array (
                'key' => 'Switzerland',
                'value' => 'CH',
              ),
              212 => 
              array (
                'key' => 'Syria',
                'value' => 'SY',
              ),
              213 => 
              array (
                'key' => 'São Tomé and Príncipe',
                'value' => 'ST',
              ),
              214 => 
              array (
                'key' => 'Taiwan',
                'value' => 'TW',
              ),
              215 => 
              array (
                'key' => 'Tanzania',
                'value' => 'TZ',
              ),
              216 => 
              array (
                'key' => 'Thailand',
                'value' => 'TH',
              ),
              217 => 
              array (
                'key' => 'Timor-Leste',
                'value' => 'TL',
              ),
              218 => 
              array (
                'key' => 'Togo',
                'value' => 'TG',
              ),
              219 => 
              array (
                'key' => 'Tokelau',
                'value' => 'TK',
              ),
              220 => 
              array (
                'key' => 'Tonga',
                'value' => 'TO',
              ),
              221 => 
              array (
                'key' => 'Trinidad and Tobago',
                'value' => 'TT',
              ),
              222 => 
              array (
                'key' => 'Tunisia',
                'value' => 'TN',
              ),
              223 => 
              array (
                'key' => 'Turkey',
                'value' => 'TR',
              ),
              224 => 
              array (
                'key' => 'Turks and Caicos Islands',
                'value' => 'TC',
              ),
              225 => 
              array (
                'key' => 'Tuvalu',
                'value' => 'TV',
              ),
              226 => 
              array (
                'key' => 'U.S. Outlying Islands',
                'value' => 'UM',
              ),
              227 => 
              array (
                'key' => 'U.S. Virgin Islands',
                'value' => 'VI',
              ),
              228 => 
              array (
                'key' => 'Uganda',
                'value' => 'UG',
              ),
              229 => 
              array (
                'key' => 'Ukraine',
                'value' => 'UA',
              ),
              230 => 
              array (
                'key' => 'United Arab Emirates',
                'value' => 'AE',
              ),
              231 => 
              array (
                'key' => 'United Kingdom',
                'value' => 'GB',
              ),
              232 => 
              array (
                'key' => 'United States',
                'value' => 'US',
              ),
              233 => 
              array (
                'key' => 'Uruguay',
                'value' => 'UY',
              ),
              234 => 
              array (
                'key' => 'Uzbekistan',
                'value' => 'UZ',
              ),
              235 => 
              array (
                'key' => 'Vanuatu',
                'value' => 'VU',
              ),
              236 => 
              array (
                'key' => 'Venezuela',
                'value' => 'VE',
              ),
              237 => 
              array (
                'key' => 'Vietnam',
                'value' => 'VN',
              ),
              238 => 
              array (
                'key' => 'Wallis and Futuna',
                'value' => 'WF',
              ),
              239 => 
              array (
                'key' => 'Western Sahara',
                'value' => 'EH',
              ),
              240 => 
              array (
                'key' => 'Yemen',
                'value' => 'YE',
              ),
              241 => 
              array (
                'key' => 'Zambia',
                'value' => 'ZM',
              ),
              242 => 
              array (
                'key' => 'Zimbabwe',
                'value' => 'ZW',
              ),
              243 => 
              array (
                'key' => 'Åland Islands',
                'value' => 'AX',
              ),
            ),
             'width' => '',
             'defaultValue' => NULL,
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'name' => 'acountry',
             'title' => 'country',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          13 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Language::__set_state(array(
             'fieldtype' => 'language',
             'onlySystemLanguages' => false,
             'options' => 
            array (
              0 => 
              array (
                'key' => 'Afrikaans',
                'value' => 'af',
              ),
              1 => 
              array (
                'key' => 'Afrikaans (Namibia)',
                'value' => 'af_NA',
              ),
              2 => 
              array (
                'key' => 'Afrikaans (South Africa)',
                'value' => 'af_ZA',
              ),
              3 => 
              array (
                'key' => 'Aghem',
                'value' => 'agq',
              ),
              4 => 
              array (
                'key' => 'Aghem (Cameroon)',
                'value' => 'agq_CM',
              ),
              5 => 
              array (
                'key' => 'Akan',
                'value' => 'ak',
              ),
              6 => 
              array (
                'key' => 'Akan (Ghana)',
                'value' => 'ak_GH',
              ),
              7 => 
              array (
                'key' => 'Albanian',
                'value' => 'sq',
              ),
              8 => 
              array (
                'key' => 'Albanian (Albania)',
                'value' => 'sq_AL',
              ),
              9 => 
              array (
                'key' => 'Albanian (Kosovo)',
                'value' => 'sq_XK',
              ),
              10 => 
              array (
                'key' => 'Albanian (Macedonia)',
                'value' => 'sq_MK',
              ),
              11 => 
              array (
                'key' => 'Amharic',
                'value' => 'am',
              ),
              12 => 
              array (
                'key' => 'Amharic (Ethiopia)',
                'value' => 'am_ET',
              ),
              13 => 
              array (
                'key' => 'Arabic',
                'value' => 'ar',
              ),
              14 => 
              array (
                'key' => 'Arabic (Algeria)',
                'value' => 'ar_DZ',
              ),
              15 => 
              array (
                'key' => 'Arabic (Bahrain)',
                'value' => 'ar_BH',
              ),
              16 => 
              array (
                'key' => 'Arabic (Chad)',
                'value' => 'ar_TD',
              ),
              17 => 
              array (
                'key' => 'Arabic (Comoros)',
                'value' => 'ar_KM',
              ),
              18 => 
              array (
                'key' => 'Arabic (Djibouti)',
                'value' => 'ar_DJ',
              ),
              19 => 
              array (
                'key' => 'Arabic (Egypt)',
                'value' => 'ar_EG',
              ),
              20 => 
              array (
                'key' => 'Arabic (Eritrea)',
                'value' => 'ar_ER',
              ),
              21 => 
              array (
                'key' => 'Arabic (Iraq)',
                'value' => 'ar_IQ',
              ),
              22 => 
              array (
                'key' => 'Arabic (Israel)',
                'value' => 'ar_IL',
              ),
              23 => 
              array (
                'key' => 'Arabic (Jordan)',
                'value' => 'ar_JO',
              ),
              24 => 
              array (
                'key' => 'Arabic (Kuwait)',
                'value' => 'ar_KW',
              ),
              25 => 
              array (
                'key' => 'Arabic (Lebanon)',
                'value' => 'ar_LB',
              ),
              26 => 
              array (
                'key' => 'Arabic (Libya)',
                'value' => 'ar_LY',
              ),
              27 => 
              array (
                'key' => 'Arabic (Mauritania)',
                'value' => 'ar_MR',
              ),
              28 => 
              array (
                'key' => 'Arabic (Morocco)',
                'value' => 'ar_MA',
              ),
              29 => 
              array (
                'key' => 'Arabic (Oman)',
                'value' => 'ar_OM',
              ),
              30 => 
              array (
                'key' => 'Arabic (Palestinian Territories)',
                'value' => 'ar_PS',
              ),
              31 => 
              array (
                'key' => 'Arabic (Qatar)',
                'value' => 'ar_QA',
              ),
              32 => 
              array (
                'key' => 'Arabic (Saudi Arabia)',
                'value' => 'ar_SA',
              ),
              33 => 
              array (
                'key' => 'Arabic (Somalia)',
                'value' => 'ar_SO',
              ),
              34 => 
              array (
                'key' => 'Arabic (South Sudan)',
                'value' => 'ar_SS',
              ),
              35 => 
              array (
                'key' => 'Arabic (Sudan)',
                'value' => 'ar_SD',
              ),
              36 => 
              array (
                'key' => 'Arabic (Syria)',
                'value' => 'ar_SY',
              ),
              37 => 
              array (
                'key' => 'Arabic (Tunisia)',
                'value' => 'ar_TN',
              ),
              38 => 
              array (
                'key' => 'Arabic (United Arab Emirates)',
                'value' => 'ar_AE',
              ),
              39 => 
              array (
                'key' => 'Arabic (Western Sahara)',
                'value' => 'ar_EH',
              ),
              40 => 
              array (
                'key' => 'Arabic (World)',
                'value' => 'ar_001',
              ),
              41 => 
              array (
                'key' => 'Arabic (Yemen)',
                'value' => 'ar_YE',
              ),
              42 => 
              array (
                'key' => 'Armenian',
                'value' => 'hy',
              ),
              43 => 
              array (
                'key' => 'Armenian (Armenia)',
                'value' => 'hy_AM',
              ),
              44 => 
              array (
                'key' => 'Assamese',
                'value' => 'as',
              ),
              45 => 
              array (
                'key' => 'Assamese (India)',
                'value' => 'as_IN',
              ),
              46 => 
              array (
                'key' => 'Asu',
                'value' => 'asa',
              ),
              47 => 
              array (
                'key' => 'Asu (Tanzania)',
                'value' => 'asa_TZ',
              ),
              48 => 
              array (
                'key' => 'Azerbaijani',
                'value' => 'az_Cyrl',
              ),
              49 => 
              array (
                'key' => 'Azerbaijani',
                'value' => 'az',
              ),
              50 => 
              array (
                'key' => 'Azerbaijani',
                'value' => 'az_Latn',
              ),
              51 => 
              array (
                'key' => 'Azerbaijani (Azerbaijan)',
                'value' => 'az_Latn_AZ',
              ),
              52 => 
              array (
                'key' => 'Azerbaijani (Azerbaijan)',
                'value' => 'az_Cyrl_AZ',
              ),
              53 => 
              array (
                'key' => 'Bafia',
                'value' => 'ksf',
              ),
              54 => 
              array (
                'key' => 'Bafia (Cameroon)',
                'value' => 'ksf_CM',
              ),
              55 => 
              array (
                'key' => 'Bambara',
                'value' => 'bm',
              ),
              56 => 
              array (
                'key' => 'Bambara (Mali)',
                'value' => 'bm_ML',
              ),
              57 => 
              array (
                'key' => 'Basaa',
                'value' => 'bas',
              ),
              58 => 
              array (
                'key' => 'Basaa (Cameroon)',
                'value' => 'bas_CM',
              ),
              59 => 
              array (
                'key' => 'Basque',
                'value' => 'eu',
              ),
              60 => 
              array (
                'key' => 'Basque (Spain)',
                'value' => 'eu_ES',
              ),
              61 => 
              array (
                'key' => 'Belarusian',
                'value' => 'be',
              ),
              62 => 
              array (
                'key' => 'Belarusian (Belarus)',
                'value' => 'be_BY',
              ),
              63 => 
              array (
                'key' => 'Bemba',
                'value' => 'bem',
              ),
              64 => 
              array (
                'key' => 'Bemba (Zambia)',
                'value' => 'bem_ZM',
              ),
              65 => 
              array (
                'key' => 'Bena',
                'value' => 'bez',
              ),
              66 => 
              array (
                'key' => 'Bena (Tanzania)',
                'value' => 'bez_TZ',
              ),
              67 => 
              array (
                'key' => 'Bengali',
                'value' => 'bn',
              ),
              68 => 
              array (
                'key' => 'Bengali (Bangladesh)',
                'value' => 'bn_BD',
              ),
              69 => 
              array (
                'key' => 'Bengali (India)',
                'value' => 'bn_IN',
              ),
              70 => 
              array (
                'key' => 'Bodo',
                'value' => 'brx',
              ),
              71 => 
              array (
                'key' => 'Bodo (India)',
                'value' => 'brx_IN',
              ),
              72 => 
              array (
                'key' => 'Bosnian',
                'value' => 'bs',
              ),
              73 => 
              array (
                'key' => 'Bosnian',
                'value' => 'bs_Cyrl',
              ),
              74 => 
              array (
                'key' => 'Bosnian',
                'value' => 'bs_Latn',
              ),
              75 => 
              array (
                'key' => 'Bosnian (Bosnia and Herzegovina)',
                'value' => 'bs_Latn_BA',
              ),
              76 => 
              array (
                'key' => 'Bosnian (Bosnia and Herzegovina)',
                'value' => 'bs_Cyrl_BA',
              ),
              77 => 
              array (
                'key' => 'Breton',
                'value' => 'br',
              ),
              78 => 
              array (
                'key' => 'Breton (France)',
                'value' => 'br_FR',
              ),
              79 => 
              array (
                'key' => 'Bulgarian',
                'value' => 'bg',
              ),
              80 => 
              array (
                'key' => 'Bulgarian (Bulgaria)',
                'value' => 'bg_BG',
              ),
              81 => 
              array (
                'key' => 'Burmese',
                'value' => 'my',
              ),
              82 => 
              array (
                'key' => 'Burmese (Myanmar (Burma))',
                'value' => 'my_MM',
              ),
              83 => 
              array (
                'key' => 'Catalan',
                'value' => 'ca',
              ),
              84 => 
              array (
                'key' => 'Catalan (Andorra)',
                'value' => 'ca_AD',
              ),
              85 => 
              array (
                'key' => 'Catalan (France)',
                'value' => 'ca_FR',
              ),
              86 => 
              array (
                'key' => 'Catalan (Italy)',
                'value' => 'ca_IT',
              ),
              87 => 
              array (
                'key' => 'Catalan (Spain)',
                'value' => 'ca_ES',
              ),
              88 => 
              array (
                'key' => 'Central Atlas Tamazight',
                'value' => 'tzm_Latn',
              ),
              89 => 
              array (
                'key' => 'Central Atlas Tamazight',
                'value' => 'tzm',
              ),
              90 => 
              array (
                'key' => 'Central Atlas Tamazight (Morocco)',
                'value' => 'tzm_Latn_MA',
              ),
              91 => 
              array (
                'key' => 'Cherokee',
                'value' => 'chr',
              ),
              92 => 
              array (
                'key' => 'Cherokee (United States)',
                'value' => 'chr_US',
              ),
              93 => 
              array (
                'key' => 'Chiga',
                'value' => 'cgg',
              ),
              94 => 
              array (
                'key' => 'Chiga (Uganda)',
                'value' => 'cgg_UG',
              ),
              95 => 
              array (
                'key' => 'Chinese',
                'value' => 'zh_Hant',
              ),
              96 => 
              array (
                'key' => 'Chinese',
                'value' => 'zh',
              ),
              97 => 
              array (
                'key' => 'Chinese',
                'value' => 'zh_Hans',
              ),
              98 => 
              array (
                'key' => 'Chinese (China)',
                'value' => 'zh_Hans_CN',
              ),
              99 => 
              array (
                'key' => 'Chinese (Hong Kong SAR China)',
                'value' => 'zh_Hant_HK',
              ),
              100 => 
              array (
                'key' => 'Chinese (Hong Kong SAR China)',
                'value' => 'zh_Hans_HK',
              ),
              101 => 
              array (
                'key' => 'Chinese (Macau SAR China)',
                'value' => 'zh_Hans_MO',
              ),
              102 => 
              array (
                'key' => 'Chinese (Macau SAR China)',
                'value' => 'zh_Hant_MO',
              ),
              103 => 
              array (
                'key' => 'Chinese (Singapore)',
                'value' => 'zh_Hans_SG',
              ),
              104 => 
              array (
                'key' => 'Chinese (Taiwan)',
                'value' => 'zh_Hant_TW',
              ),
              105 => 
              array (
                'key' => 'Congo Swahili',
                'value' => 'swc',
              ),
              106 => 
              array (
                'key' => 'Congo Swahili (Congo - Kinshasa)',
                'value' => 'swc_CD',
              ),
              107 => 
              array (
                'key' => 'Cornish',
                'value' => 'kw',
              ),
              108 => 
              array (
                'key' => 'Cornish (United Kingdom)',
                'value' => 'kw_GB',
              ),
              109 => 
              array (
                'key' => 'Croatian',
                'value' => 'hr',
              ),
              110 => 
              array (
                'key' => 'Croatian (Bosnia and Herzegovina)',
                'value' => 'hr_BA',
              ),
              111 => 
              array (
                'key' => 'Croatian (Croatia)',
                'value' => 'hr_HR',
              ),
              112 => 
              array (
                'key' => 'Czech',
                'value' => 'cs',
              ),
              113 => 
              array (
                'key' => 'Czech (Czech Republic)',
                'value' => 'cs_CZ',
              ),
              114 => 
              array (
                'key' => 'Danish',
                'value' => 'da',
              ),
              115 => 
              array (
                'key' => 'Danish (Denmark)',
                'value' => 'da_DK',
              ),
              116 => 
              array (
                'key' => 'Danish (Greenland)',
                'value' => 'da_GL',
              ),
              117 => 
              array (
                'key' => 'Duala',
                'value' => 'dua',
              ),
              118 => 
              array (
                'key' => 'Duala (Cameroon)',
                'value' => 'dua_CM',
              ),
              119 => 
              array (
                'key' => 'Dutch',
                'value' => 'nl',
              ),
              120 => 
              array (
                'key' => 'Dutch (Aruba)',
                'value' => 'nl_AW',
              ),
              121 => 
              array (
                'key' => 'Dutch (Belgium)',
                'value' => 'nl_BE',
              ),
              122 => 
              array (
                'key' => 'Dutch (Caribbean Netherlands)',
                'value' => 'nl_BQ',
              ),
              123 => 
              array (
                'key' => 'Dutch (Curaçao)',
                'value' => 'nl_CW',
              ),
              124 => 
              array (
                'key' => 'Dutch (Netherlands)',
                'value' => 'nl_NL',
              ),
              125 => 
              array (
                'key' => 'Dutch (Sint Maarten)',
                'value' => 'nl_SX',
              ),
              126 => 
              array (
                'key' => 'Dutch (Suriname)',
                'value' => 'nl_SR',
              ),
              127 => 
              array (
                'key' => 'Dzongkha',
                'value' => 'dz',
              ),
              128 => 
              array (
                'key' => 'Dzongkha (Bhutan)',
                'value' => 'dz_BT',
              ),
              129 => 
              array (
                'key' => 'Embu',
                'value' => 'ebu',
              ),
              130 => 
              array (
                'key' => 'Embu (Kenya)',
                'value' => 'ebu_KE',
              ),
              131 => 
              array (
                'key' => 'English',
                'value' => 'en',
              ),
              132 => 
              array (
                'key' => 'English (American Samoa)',
                'value' => 'en_AS',
              ),
              133 => 
              array (
                'key' => 'English (Anguilla)',
                'value' => 'en_AI',
              ),
              134 => 
              array (
                'key' => 'English (Antigua and Barbuda)',
                'value' => 'en_AG',
              ),
              135 => 
              array (
                'key' => 'English (Australia)',
                'value' => 'en_AU',
              ),
              136 => 
              array (
                'key' => 'English (Bahamas)',
                'value' => 'en_BS',
              ),
              137 => 
              array (
                'key' => 'English (Barbados)',
                'value' => 'en_BB',
              ),
              138 => 
              array (
                'key' => 'English (Belgium)',
                'value' => 'en_BE',
              ),
              139 => 
              array (
                'key' => 'English (Belize)',
                'value' => 'en_BZ',
              ),
              140 => 
              array (
                'key' => 'English (Bermuda)',
                'value' => 'en_BM',
              ),
              141 => 
              array (
                'key' => 'English (Botswana)',
                'value' => 'en_BW',
              ),
              142 => 
              array (
                'key' => 'English (British Indian Ocean Territory)',
                'value' => 'en_IO',
              ),
              143 => 
              array (
                'key' => 'English (British Virgin Islands)',
                'value' => 'en_VG',
              ),
              144 => 
              array (
                'key' => 'English (Cameroon)',
                'value' => 'en_CM',
              ),
              145 => 
              array (
                'key' => 'English (Canada)',
                'value' => 'en_CA',
              ),
              146 => 
              array (
                'key' => 'English (Cayman Islands)',
                'value' => 'en_KY',
              ),
              147 => 
              array (
                'key' => 'English (Christmas Island)',
                'value' => 'en_CX',
              ),
              148 => 
              array (
                'key' => 'English (Cocos (Keeling) Islands)',
                'value' => 'en_CC',
              ),
              149 => 
              array (
                'key' => 'English (Cook Islands)',
                'value' => 'en_CK',
              ),
              150 => 
              array (
                'key' => 'English (Diego Garcia)',
                'value' => 'en_DG',
              ),
              151 => 
              array (
                'key' => 'English (Dominica)',
                'value' => 'en_DM',
              ),
              152 => 
              array (
                'key' => 'English (Eritrea)',
                'value' => 'en_ER',
              ),
              153 => 
              array (
                'key' => 'English (Europe)',
                'value' => 'en_150',
              ),
              154 => 
              array (
                'key' => 'English (Falkland Islands)',
                'value' => 'en_FK',
              ),
              155 => 
              array (
                'key' => 'English (Fiji)',
                'value' => 'en_FJ',
              ),
              156 => 
              array (
                'key' => 'English (Gambia)',
                'value' => 'en_GM',
              ),
              157 => 
              array (
                'key' => 'English (Ghana)',
                'value' => 'en_GH',
              ),
              158 => 
              array (
                'key' => 'English (Gibraltar)',
                'value' => 'en_GI',
              ),
              159 => 
              array (
                'key' => 'English (Grenada)',
                'value' => 'en_GD',
              ),
              160 => 
              array (
                'key' => 'English (Guam)',
                'value' => 'en_GU',
              ),
              161 => 
              array (
                'key' => 'English (Guernsey)',
                'value' => 'en_GG',
              ),
              162 => 
              array (
                'key' => 'English (Guyana)',
                'value' => 'en_GY',
              ),
              163 => 
              array (
                'key' => 'English (Hong Kong SAR China)',
                'value' => 'en_HK',
              ),
              164 => 
              array (
                'key' => 'English (India)',
                'value' => 'en_IN',
              ),
              165 => 
              array (
                'key' => 'English (Ireland)',
                'value' => 'en_IE',
              ),
              166 => 
              array (
                'key' => 'English (Isle of Man)',
                'value' => 'en_IM',
              ),
              167 => 
              array (
                'key' => 'English (Jamaica)',
                'value' => 'en_JM',
              ),
              168 => 
              array (
                'key' => 'English (Jersey)',
                'value' => 'en_JE',
              ),
              169 => 
              array (
                'key' => 'English (Kenya)',
                'value' => 'en_KE',
              ),
              170 => 
              array (
                'key' => 'English (Kiribati)',
                'value' => 'en_KI',
              ),
              171 => 
              array (
                'key' => 'English (Lesotho)',
                'value' => 'en_LS',
              ),
              172 => 
              array (
                'key' => 'English (Liberia)',
                'value' => 'en_LR',
              ),
              173 => 
              array (
                'key' => 'English (Macau SAR China)',
                'value' => 'en_MO',
              ),
              174 => 
              array (
                'key' => 'English (Madagascar)',
                'value' => 'en_MG',
              ),
              175 => 
              array (
                'key' => 'English (Malawi)',
                'value' => 'en_MW',
              ),
              176 => 
              array (
                'key' => 'English (Malta)',
                'value' => 'en_MT',
              ),
              177 => 
              array (
                'key' => 'English (Marshall Islands)',
                'value' => 'en_MH',
              ),
              178 => 
              array (
                'key' => 'English (Mauritius)',
                'value' => 'en_MU',
              ),
              179 => 
              array (
                'key' => 'English (Micronesia)',
                'value' => 'en_FM',
              ),
              180 => 
              array (
                'key' => 'English (Montserrat)',
                'value' => 'en_MS',
              ),
              181 => 
              array (
                'key' => 'English (Namibia)',
                'value' => 'en_NA',
              ),
              182 => 
              array (
                'key' => 'English (Nauru)',
                'value' => 'en_NR',
              ),
              183 => 
              array (
                'key' => 'English (New Zealand)',
                'value' => 'en_NZ',
              ),
              184 => 
              array (
                'key' => 'English (Nigeria)',
                'value' => 'en_NG',
              ),
              185 => 
              array (
                'key' => 'English (Niue)',
                'value' => 'en_NU',
              ),
              186 => 
              array (
                'key' => 'English (Norfolk Island)',
                'value' => 'en_NF',
              ),
              187 => 
              array (
                'key' => 'English (Northern Mariana Islands)',
                'value' => 'en_MP',
              ),
              188 => 
              array (
                'key' => 'English (Pakistan)',
                'value' => 'en_PK',
              ),
              189 => 
              array (
                'key' => 'English (Palau)',
                'value' => 'en_PW',
              ),
              190 => 
              array (
                'key' => 'English (Papua New Guinea)',
                'value' => 'en_PG',
              ),
              191 => 
              array (
                'key' => 'English (Philippines)',
                'value' => 'en_PH',
              ),
              192 => 
              array (
                'key' => 'English (Pitcairn Islands)',
                'value' => 'en_PN',
              ),
              193 => 
              array (
                'key' => 'English (Puerto Rico)',
                'value' => 'en_PR',
              ),
              194 => 
              array (
                'key' => 'English (Rwanda)',
                'value' => 'en_RW',
              ),
              195 => 
              array (
                'key' => 'English (Saint Helena)',
                'value' => 'en_SH',
              ),
              196 => 
              array (
                'key' => 'English (Saint Kitts and Nevis)',
                'value' => 'en_KN',
              ),
              197 => 
              array (
                'key' => 'English (Saint Lucia)',
                'value' => 'en_LC',
              ),
              198 => 
              array (
                'key' => 'English (Samoa)',
                'value' => 'en_WS',
              ),
              199 => 
              array (
                'key' => 'English (Seychelles)',
                'value' => 'en_SC',
              ),
              200 => 
              array (
                'key' => 'English (Sierra Leone)',
                'value' => 'en_SL',
              ),
              201 => 
              array (
                'key' => 'English (Singapore)',
                'value' => 'en_SG',
              ),
              202 => 
              array (
                'key' => 'English (Sint Maarten)',
                'value' => 'en_SX',
              ),
              203 => 
              array (
                'key' => 'English (Solomon Islands)',
                'value' => 'en_SB',
              ),
              204 => 
              array (
                'key' => 'English (South Africa)',
                'value' => 'en_ZA',
              ),
              205 => 
              array (
                'key' => 'English (South Sudan)',
                'value' => 'en_SS',
              ),
              206 => 
              array (
                'key' => 'English (St. Vincent & Grenadines)',
                'value' => 'en_VC',
              ),
              207 => 
              array (
                'key' => 'English (Sudan)',
                'value' => 'en_SD',
              ),
              208 => 
              array (
                'key' => 'English (Swaziland)',
                'value' => 'en_SZ',
              ),
              209 => 
              array (
                'key' => 'English (Tanzania)',
                'value' => 'en_TZ',
              ),
              210 => 
              array (
                'key' => 'English (Tokelau)',
                'value' => 'en_TK',
              ),
              211 => 
              array (
                'key' => 'English (Tonga)',
                'value' => 'en_TO',
              ),
              212 => 
              array (
                'key' => 'English (Trinidad and Tobago)',
                'value' => 'en_TT',
              ),
              213 => 
              array (
                'key' => 'English (Turks and Caicos Islands)',
                'value' => 'en_TC',
              ),
              214 => 
              array (
                'key' => 'English (Tuvalu)',
                'value' => 'en_TV',
              ),
              215 => 
              array (
                'key' => 'English (U.S. Outlying Islands)',
                'value' => 'en_UM',
              ),
              216 => 
              array (
                'key' => 'English (U.S. Virgin Islands)',
                'value' => 'en_VI',
              ),
              217 => 
              array (
                'key' => 'English (Uganda)',
                'value' => 'en_UG',
              ),
              218 => 
              array (
                'key' => 'English (United Kingdom)',
                'value' => 'en_GB',
              ),
              219 => 
              array (
                'key' => 'English (United States)',
                'value' => 'en_US_POSIX',
              ),
              220 => 
              array (
                'key' => 'English (United States)',
                'value' => 'en_US',
              ),
              221 => 
              array (
                'key' => 'English (Vanuatu)',
                'value' => 'en_VU',
              ),
              222 => 
              array (
                'key' => 'English (World)',
                'value' => 'en_001',
              ),
              223 => 
              array (
                'key' => 'English (Zambia)',
                'value' => 'en_ZM',
              ),
              224 => 
              array (
                'key' => 'English (Zimbabwe)',
                'value' => 'en_ZW',
              ),
              225 => 
              array (
                'key' => 'Esperanto',
                'value' => 'eo',
              ),
              226 => 
              array (
                'key' => 'Estonian',
                'value' => 'et',
              ),
              227 => 
              array (
                'key' => 'Estonian (Estonia)',
                'value' => 'et_EE',
              ),
              228 => 
              array (
                'key' => 'Ewe',
                'value' => 'ee',
              ),
              229 => 
              array (
                'key' => 'Ewe (Ghana)',
                'value' => 'ee_GH',
              ),
              230 => 
              array (
                'key' => 'Ewe (Togo)',
                'value' => 'ee_TG',
              ),
              231 => 
              array (
                'key' => 'Ewondo',
                'value' => 'ewo',
              ),
              232 => 
              array (
                'key' => 'Ewondo (Cameroon)',
                'value' => 'ewo_CM',
              ),
              233 => 
              array (
                'key' => 'Faroese',
                'value' => 'fo',
              ),
              234 => 
              array (
                'key' => 'Faroese (Faroe Islands)',
                'value' => 'fo_FO',
              ),
              235 => 
              array (
                'key' => 'Filipino',
                'value' => 'fil',
              ),
              236 => 
              array (
                'key' => 'Filipino (Philippines)',
                'value' => 'fil_PH',
              ),
              237 => 
              array (
                'key' => 'Finnish',
                'value' => 'fi',
              ),
              238 => 
              array (
                'key' => 'Finnish (Finland)',
                'value' => 'fi_FI',
              ),
              239 => 
              array (
                'key' => 'French',
                'value' => 'fr',
              ),
              240 => 
              array (
                'key' => 'French (Algeria)',
                'value' => 'fr_DZ',
              ),
              241 => 
              array (
                'key' => 'French (Belgium)',
                'value' => 'fr_BE',
              ),
              242 => 
              array (
                'key' => 'French (Benin)',
                'value' => 'fr_BJ',
              ),
              243 => 
              array (
                'key' => 'French (Burkina Faso)',
                'value' => 'fr_BF',
              ),
              244 => 
              array (
                'key' => 'French (Burundi)',
                'value' => 'fr_BI',
              ),
              245 => 
              array (
                'key' => 'French (Cameroon)',
                'value' => 'fr_CM',
              ),
              246 => 
              array (
                'key' => 'French (Canada)',
                'value' => 'fr_CA',
              ),
              247 => 
              array (
                'key' => 'French (Central African Republic)',
                'value' => 'fr_CF',
              ),
              248 => 
              array (
                'key' => 'French (Chad)',
                'value' => 'fr_TD',
              ),
              249 => 
              array (
                'key' => 'French (Comoros)',
                'value' => 'fr_KM',
              ),
              250 => 
              array (
                'key' => 'French (Congo - Brazzaville)',
                'value' => 'fr_CG',
              ),
              251 => 
              array (
                'key' => 'French (Congo - Kinshasa)',
                'value' => 'fr_CD',
              ),
              252 => 
              array (
                'key' => 'French (Côte d’Ivoire)',
                'value' => 'fr_CI',
              ),
              253 => 
              array (
                'key' => 'French (Djibouti)',
                'value' => 'fr_DJ',
              ),
              254 => 
              array (
                'key' => 'French (Equatorial Guinea)',
                'value' => 'fr_GQ',
              ),
              255 => 
              array (
                'key' => 'French (France)',
                'value' => 'fr_FR',
              ),
              256 => 
              array (
                'key' => 'French (French Guiana)',
                'value' => 'fr_GF',
              ),
              257 => 
              array (
                'key' => 'French (French Polynesia)',
                'value' => 'fr_PF',
              ),
              258 => 
              array (
                'key' => 'French (Gabon)',
                'value' => 'fr_GA',
              ),
              259 => 
              array (
                'key' => 'French (Guadeloupe)',
                'value' => 'fr_GP',
              ),
              260 => 
              array (
                'key' => 'French (Guinea)',
                'value' => 'fr_GN',
              ),
              261 => 
              array (
                'key' => 'French (Haiti)',
                'value' => 'fr_HT',
              ),
              262 => 
              array (
                'key' => 'French (Luxembourg)',
                'value' => 'fr_LU',
              ),
              263 => 
              array (
                'key' => 'French (Madagascar)',
                'value' => 'fr_MG',
              ),
              264 => 
              array (
                'key' => 'French (Mali)',
                'value' => 'fr_ML',
              ),
              265 => 
              array (
                'key' => 'French (Martinique)',
                'value' => 'fr_MQ',
              ),
              266 => 
              array (
                'key' => 'French (Mauritania)',
                'value' => 'fr_MR',
              ),
              267 => 
              array (
                'key' => 'French (Mauritius)',
                'value' => 'fr_MU',
              ),
              268 => 
              array (
                'key' => 'French (Mayotte)',
                'value' => 'fr_YT',
              ),
              269 => 
              array (
                'key' => 'French (Monaco)',
                'value' => 'fr_MC',
              ),
              270 => 
              array (
                'key' => 'French (Morocco)',
                'value' => 'fr_MA',
              ),
              271 => 
              array (
                'key' => 'French (New Caledonia)',
                'value' => 'fr_NC',
              ),
              272 => 
              array (
                'key' => 'French (Niger)',
                'value' => 'fr_NE',
              ),
              273 => 
              array (
                'key' => 'French (Rwanda)',
                'value' => 'fr_RW',
              ),
              274 => 
              array (
                'key' => 'French (Réunion)',
                'value' => 'fr_RE',
              ),
              275 => 
              array (
                'key' => 'French (Saint Barthélemy)',
                'value' => 'fr_BL',
              ),
              276 => 
              array (
                'key' => 'French (Saint Martin)',
                'value' => 'fr_MF',
              ),
              277 => 
              array (
                'key' => 'French (Saint Pierre and Miquelon)',
                'value' => 'fr_PM',
              ),
              278 => 
              array (
                'key' => 'French (Senegal)',
                'value' => 'fr_SN',
              ),
              279 => 
              array (
                'key' => 'French (Seychelles)',
                'value' => 'fr_SC',
              ),
              280 => 
              array (
                'key' => 'French (Switzerland)',
                'value' => 'fr_CH',
              ),
              281 => 
              array (
                'key' => 'French (Syria)',
                'value' => 'fr_SY',
              ),
              282 => 
              array (
                'key' => 'French (Togo)',
                'value' => 'fr_TG',
              ),
              283 => 
              array (
                'key' => 'French (Tunisia)',
                'value' => 'fr_TN',
              ),
              284 => 
              array (
                'key' => 'French (Vanuatu)',
                'value' => 'fr_VU',
              ),
              285 => 
              array (
                'key' => 'French (Wallis and Futuna)',
                'value' => 'fr_WF',
              ),
              286 => 
              array (
                'key' => 'Fulah',
                'value' => 'ff',
              ),
              287 => 
              array (
                'key' => 'Fulah (Senegal)',
                'value' => 'ff_SN',
              ),
              288 => 
              array (
                'key' => 'Galician',
                'value' => 'gl',
              ),
              289 => 
              array (
                'key' => 'Galician (Spain)',
                'value' => 'gl_ES',
              ),
              290 => 
              array (
                'key' => 'Ganda',
                'value' => 'lg',
              ),
              291 => 
              array (
                'key' => 'Ganda (Uganda)',
                'value' => 'lg_UG',
              ),
              292 => 
              array (
                'key' => 'Georgian',
                'value' => 'ka',
              ),
              293 => 
              array (
                'key' => 'Georgian (Georgia)',
                'value' => 'ka_GE',
              ),
              294 => 
              array (
                'key' => 'German',
                'value' => 'de',
              ),
              295 => 
              array (
                'key' => 'German (Austria)',
                'value' => 'de_AT',
              ),
              296 => 
              array (
                'key' => 'German (Belgium)',
                'value' => 'de_BE',
              ),
              297 => 
              array (
                'key' => 'German (Germany)',
                'value' => 'de_DE',
              ),
              298 => 
              array (
                'key' => 'German (Liechtenstein)',
                'value' => 'de_LI',
              ),
              299 => 
              array (
                'key' => 'German (Luxembourg)',
                'value' => 'de_LU',
              ),
              300 => 
              array (
                'key' => 'German (Switzerland)',
                'value' => 'de_CH',
              ),
              301 => 
              array (
                'key' => 'Greek',
                'value' => 'el',
              ),
              302 => 
              array (
                'key' => 'Greek (Cyprus)',
                'value' => 'el_CY',
              ),
              303 => 
              array (
                'key' => 'Greek (Greece)',
                'value' => 'el_GR',
              ),
              304 => 
              array (
                'key' => 'Gujarati',
                'value' => 'gu',
              ),
              305 => 
              array (
                'key' => 'Gujarati (India)',
                'value' => 'gu_IN',
              ),
              306 => 
              array (
                'key' => 'Gusii',
                'value' => 'guz',
              ),
              307 => 
              array (
                'key' => 'Gusii (Kenya)',
                'value' => 'guz_KE',
              ),
              308 => 
              array (
                'key' => 'Hausa',
                'value' => 'ha_Latn',
              ),
              309 => 
              array (
                'key' => 'Hausa',
                'value' => 'ha',
              ),
              310 => 
              array (
                'key' => 'Hausa (Ghana)',
                'value' => 'ha_Latn_GH',
              ),
              311 => 
              array (
                'key' => 'Hausa (Niger)',
                'value' => 'ha_Latn_NE',
              ),
              312 => 
              array (
                'key' => 'Hausa (Nigeria)',
                'value' => 'ha_Latn_NG',
              ),
              313 => 
              array (
                'key' => 'Hawaiian',
                'value' => 'haw',
              ),
              314 => 
              array (
                'key' => 'Hawaiian (United States)',
                'value' => 'haw_US',
              ),
              315 => 
              array (
                'key' => 'Hebrew',
                'value' => 'he',
              ),
              316 => 
              array (
                'key' => 'Hebrew (Israel)',
                'value' => 'he_IL',
              ),
              317 => 
              array (
                'key' => 'Hindi',
                'value' => 'hi',
              ),
              318 => 
              array (
                'key' => 'Hindi (India)',
                'value' => 'hi_IN',
              ),
              319 => 
              array (
                'key' => 'Hungarian',
                'value' => 'hu',
              ),
              320 => 
              array (
                'key' => 'Hungarian (Hungary)',
                'value' => 'hu_HU',
              ),
              321 => 
              array (
                'key' => 'Icelandic',
                'value' => 'is',
              ),
              322 => 
              array (
                'key' => 'Icelandic (Iceland)',
                'value' => 'is_IS',
              ),
              323 => 
              array (
                'key' => 'Igbo',
                'value' => 'ig',
              ),
              324 => 
              array (
                'key' => 'Igbo (Nigeria)',
                'value' => 'ig_NG',
              ),
              325 => 
              array (
                'key' => 'Indonesian',
                'value' => 'id',
              ),
              326 => 
              array (
                'key' => 'Indonesian (Indonesia)',
                'value' => 'id_ID',
              ),
              327 => 
              array (
                'key' => 'Irish',
                'value' => 'ga',
              ),
              328 => 
              array (
                'key' => 'Irish (Ireland)',
                'value' => 'ga_IE',
              ),
              329 => 
              array (
                'key' => 'Italian',
                'value' => 'it',
              ),
              330 => 
              array (
                'key' => 'Italian (Italy)',
                'value' => 'it_IT',
              ),
              331 => 
              array (
                'key' => 'Italian (San Marino)',
                'value' => 'it_SM',
              ),
              332 => 
              array (
                'key' => 'Italian (Switzerland)',
                'value' => 'it_CH',
              ),
              333 => 
              array (
                'key' => 'Japanese',
                'value' => 'ja',
              ),
              334 => 
              array (
                'key' => 'Japanese (Japan)',
                'value' => 'ja_JP',
              ),
              335 => 
              array (
                'key' => 'Jola-Fonyi',
                'value' => 'dyo',
              ),
              336 => 
              array (
                'key' => 'Jola-Fonyi (Senegal)',
                'value' => 'dyo_SN',
              ),
              337 => 
              array (
                'key' => 'Kabuverdianu',
                'value' => 'kea',
              ),
              338 => 
              array (
                'key' => 'Kabuverdianu (Cape Verde)',
                'value' => 'kea_CV',
              ),
              339 => 
              array (
                'key' => 'Kabyle',
                'value' => 'kab',
              ),
              340 => 
              array (
                'key' => 'Kabyle (Algeria)',
                'value' => 'kab_DZ',
              ),
              341 => 
              array (
                'key' => 'Kako',
                'value' => 'kkj',
              ),
              342 => 
              array (
                'key' => 'Kako (Cameroon)',
                'value' => 'kkj_CM',
              ),
              343 => 
              array (
                'key' => 'Kalaallisut',
                'value' => 'kl',
              ),
              344 => 
              array (
                'key' => 'Kalaallisut (Greenland)',
                'value' => 'kl_GL',
              ),
              345 => 
              array (
                'key' => 'Kalenjin',
                'value' => 'kln',
              ),
              346 => 
              array (
                'key' => 'Kalenjin (Kenya)',
                'value' => 'kln_KE',
              ),
              347 => 
              array (
                'key' => 'Kamba',
                'value' => 'kam',
              ),
              348 => 
              array (
                'key' => 'Kamba (Kenya)',
                'value' => 'kam_KE',
              ),
              349 => 
              array (
                'key' => 'Kannada',
                'value' => 'kn',
              ),
              350 => 
              array (
                'key' => 'Kannada (India)',
                'value' => 'kn_IN',
              ),
              351 => 
              array (
                'key' => 'Kashmiri',
                'value' => 'ks_Arab',
              ),
              352 => 
              array (
                'key' => 'Kashmiri',
                'value' => 'ks',
              ),
              353 => 
              array (
                'key' => 'Kashmiri (India)',
                'value' => 'ks_Arab_IN',
              ),
              354 => 
              array (
                'key' => 'Kazakh',
                'value' => 'kk',
              ),
              355 => 
              array (
                'key' => 'Kazakh',
                'value' => 'kk_Cyrl',
              ),
              356 => 
              array (
                'key' => 'Kazakh (Kazakhstan)',
                'value' => 'kk_Cyrl_KZ',
              ),
              357 => 
              array (
                'key' => 'Khmer',
                'value' => 'km',
              ),
              358 => 
              array (
                'key' => 'Khmer (Cambodia)',
                'value' => 'km_KH',
              ),
              359 => 
              array (
                'key' => 'Kikuyu',
                'value' => 'ki',
              ),
              360 => 
              array (
                'key' => 'Kikuyu (Kenya)',
                'value' => 'ki_KE',
              ),
              361 => 
              array (
                'key' => 'Kinyarwanda',
                'value' => 'rw',
              ),
              362 => 
              array (
                'key' => 'Kinyarwanda (Rwanda)',
                'value' => 'rw_RW',
              ),
              363 => 
              array (
                'key' => 'Konkani',
                'value' => 'kok',
              ),
              364 => 
              array (
                'key' => 'Konkani (India)',
                'value' => 'kok_IN',
              ),
              365 => 
              array (
                'key' => 'Korean',
                'value' => 'ko',
              ),
              366 => 
              array (
                'key' => 'Korean (North Korea)',
                'value' => 'ko_KP',
              ),
              367 => 
              array (
                'key' => 'Korean (South Korea)',
                'value' => 'ko_KR',
              ),
              368 => 
              array (
                'key' => 'Koyra Chiini',
                'value' => 'khq',
              ),
              369 => 
              array (
                'key' => 'Koyra Chiini (Mali)',
                'value' => 'khq_ML',
              ),
              370 => 
              array (
                'key' => 'Koyraboro Senni',
                'value' => 'ses',
              ),
              371 => 
              array (
                'key' => 'Koyraboro Senni (Mali)',
                'value' => 'ses_ML',
              ),
              372 => 
              array (
                'key' => 'Kwasio',
                'value' => 'nmg',
              ),
              373 => 
              array (
                'key' => 'Kwasio (Cameroon)',
                'value' => 'nmg_CM',
              ),
              374 => 
              array (
                'key' => 'Kyrgyz',
                'value' => 'ky',
              ),
              375 => 
              array (
                'key' => 'Kyrgyz',
                'value' => 'ky_Cyrl',
              ),
              376 => 
              array (
                'key' => 'Kyrgyz (Kyrgyzstan)',
                'value' => 'ky_Cyrl_KG',
              ),
              377 => 
              array (
                'key' => 'Lakota',
                'value' => 'lkt',
              ),
              378 => 
              array (
                'key' => 'Lakota (United States)',
                'value' => 'lkt_US',
              ),
              379 => 
              array (
                'key' => 'Langi',
                'value' => 'lag',
              ),
              380 => 
              array (
                'key' => 'Langi (Tanzania)',
                'value' => 'lag_TZ',
              ),
              381 => 
              array (
                'key' => 'Lao',
                'value' => 'lo',
              ),
              382 => 
              array (
                'key' => 'Lao (Laos)',
                'value' => 'lo_LA',
              ),
              383 => 
              array (
                'key' => 'Latvian',
                'value' => 'lv',
              ),
              384 => 
              array (
                'key' => 'Latvian (Latvia)',
                'value' => 'lv_LV',
              ),
              385 => 
              array (
                'key' => 'Lingala',
                'value' => 'ln',
              ),
              386 => 
              array (
                'key' => 'Lingala (Angola)',
                'value' => 'ln_AO',
              ),
              387 => 
              array (
                'key' => 'Lingala (Central African Republic)',
                'value' => 'ln_CF',
              ),
              388 => 
              array (
                'key' => 'Lingala (Congo - Brazzaville)',
                'value' => 'ln_CG',
              ),
              389 => 
              array (
                'key' => 'Lingala (Congo - Kinshasa)',
                'value' => 'ln_CD',
              ),
              390 => 
              array (
                'key' => 'Lithuanian',
                'value' => 'lt',
              ),
              391 => 
              array (
                'key' => 'Lithuanian (Lithuania)',
                'value' => 'lt_LT',
              ),
              392 => 
              array (
                'key' => 'Luba-Katanga',
                'value' => 'lu',
              ),
              393 => 
              array (
                'key' => 'Luba-Katanga (Congo - Kinshasa)',
                'value' => 'lu_CD',
              ),
              394 => 
              array (
                'key' => 'Luo',
                'value' => 'luo',
              ),
              395 => 
              array (
                'key' => 'Luo (Kenya)',
                'value' => 'luo_KE',
              ),
              396 => 
              array (
                'key' => 'Luyia',
                'value' => 'luy',
              ),
              397 => 
              array (
                'key' => 'Luyia (Kenya)',
                'value' => 'luy_KE',
              ),
              398 => 
              array (
                'key' => 'Macedonian',
                'value' => 'mk',
              ),
              399 => 
              array (
                'key' => 'Macedonian (Macedonia)',
                'value' => 'mk_MK',
              ),
              400 => 
              array (
                'key' => 'Machame',
                'value' => 'jmc',
              ),
              401 => 
              array (
                'key' => 'Machame (Tanzania)',
                'value' => 'jmc_TZ',
              ),
              402 => 
              array (
                'key' => 'Makhuwa-Meetto',
                'value' => 'mgh',
              ),
              403 => 
              array (
                'key' => 'Makhuwa-Meetto (Mozambique)',
                'value' => 'mgh_MZ',
              ),
              404 => 
              array (
                'key' => 'Makonde',
                'value' => 'kde',
              ),
              405 => 
              array (
                'key' => 'Makonde (Tanzania)',
                'value' => 'kde_TZ',
              ),
              406 => 
              array (
                'key' => 'Malagasy',
                'value' => 'mg',
              ),
              407 => 
              array (
                'key' => 'Malagasy (Madagascar)',
                'value' => 'mg_MG',
              ),
              408 => 
              array (
                'key' => 'Malay',
                'value' => 'ms',
              ),
              409 => 
              array (
                'key' => 'Malay',
                'value' => 'ms_Latn',
              ),
              410 => 
              array (
                'key' => 'Malay (Brunei)',
                'value' => 'ms_Latn_BN',
              ),
              411 => 
              array (
                'key' => 'Malay (Malaysia)',
                'value' => 'ms_Latn_MY',
              ),
              412 => 
              array (
                'key' => 'Malay (Singapore)',
                'value' => 'ms_Latn_SG',
              ),
              413 => 
              array (
                'key' => 'Malayalam',
                'value' => 'ml',
              ),
              414 => 
              array (
                'key' => 'Malayalam (India)',
                'value' => 'ml_IN',
              ),
              415 => 
              array (
                'key' => 'Maltese',
                'value' => 'mt',
              ),
              416 => 
              array (
                'key' => 'Maltese (Malta)',
                'value' => 'mt_MT',
              ),
              417 => 
              array (
                'key' => 'Manx',
                'value' => 'gv',
              ),
              418 => 
              array (
                'key' => 'Manx (Isle of Man)',
                'value' => 'gv_IM',
              ),
              419 => 
              array (
                'key' => 'Marathi',
                'value' => 'mr',
              ),
              420 => 
              array (
                'key' => 'Marathi (India)',
                'value' => 'mr_IN',
              ),
              421 => 
              array (
                'key' => 'Masai',
                'value' => 'mas',
              ),
              422 => 
              array (
                'key' => 'Masai (Kenya)',
                'value' => 'mas_KE',
              ),
              423 => 
              array (
                'key' => 'Masai (Tanzania)',
                'value' => 'mas_TZ',
              ),
              424 => 
              array (
                'key' => 'Meru',
                'value' => 'mer',
              ),
              425 => 
              array (
                'key' => 'Meru (Kenya)',
                'value' => 'mer_KE',
              ),
              426 => 
              array (
                'key' => 'Meta\'',
                'value' => 'mgo',
              ),
              427 => 
              array (
                'key' => 'Meta\' (Cameroon)',
                'value' => 'mgo_CM',
              ),
              428 => 
              array (
                'key' => 'Mongolian',
                'value' => 'mn',
              ),
              429 => 
              array (
                'key' => 'Mongolian',
                'value' => 'mn_Cyrl',
              ),
              430 => 
              array (
                'key' => 'Mongolian (Mongolia)',
                'value' => 'mn_Cyrl_MN',
              ),
              431 => 
              array (
                'key' => 'Morisyen',
                'value' => 'mfe',
              ),
              432 => 
              array (
                'key' => 'Morisyen (Mauritius)',
                'value' => 'mfe_MU',
              ),
              433 => 
              array (
                'key' => 'Mundang',
                'value' => 'mua',
              ),
              434 => 
              array (
                'key' => 'Mundang (Cameroon)',
                'value' => 'mua_CM',
              ),
              435 => 
              array (
                'key' => 'Nama',
                'value' => 'naq',
              ),
              436 => 
              array (
                'key' => 'Nama (Namibia)',
                'value' => 'naq_NA',
              ),
              437 => 
              array (
                'key' => 'Nepali',
                'value' => 'ne',
              ),
              438 => 
              array (
                'key' => 'Nepali (India)',
                'value' => 'ne_IN',
              ),
              439 => 
              array (
                'key' => 'Nepali (Nepal)',
                'value' => 'ne_NP',
              ),
              440 => 
              array (
                'key' => 'Ngiemboon',
                'value' => 'nnh',
              ),
              441 => 
              array (
                'key' => 'Ngiemboon (Cameroon)',
                'value' => 'nnh_CM',
              ),
              442 => 
              array (
                'key' => 'Ngomba',
                'value' => 'jgo',
              ),
              443 => 
              array (
                'key' => 'Ngomba (Cameroon)',
                'value' => 'jgo_CM',
              ),
              444 => 
              array (
                'key' => 'North Ndebele',
                'value' => 'nd',
              ),
              445 => 
              array (
                'key' => 'North Ndebele (Zimbabwe)',
                'value' => 'nd_ZW',
              ),
              446 => 
              array (
                'key' => 'Norwegian Bokmål',
                'value' => 'nb',
              ),
              447 => 
              array (
                'key' => 'Norwegian Bokmål (Norway)',
                'value' => 'nb_NO',
              ),
              448 => 
              array (
                'key' => 'Norwegian Bokmål (Svalbard and Jan Mayen)',
                'value' => 'nb_SJ',
              ),
              449 => 
              array (
                'key' => 'Norwegian Nynorsk',
                'value' => 'nn',
              ),
              450 => 
              array (
                'key' => 'Norwegian Nynorsk (Norway)',
                'value' => 'nn_NO',
              ),
              451 => 
              array (
                'key' => 'Nuer',
                'value' => 'nus',
              ),
              452 => 
              array (
                'key' => 'Nuer (Sudan)',
                'value' => 'nus_SD',
              ),
              453 => 
              array (
                'key' => 'Nyankole',
                'value' => 'nyn',
              ),
              454 => 
              array (
                'key' => 'Nyankole (Uganda)',
                'value' => 'nyn_UG',
              ),
              455 => 
              array (
                'key' => 'Oriya',
                'value' => 'or',
              ),
              456 => 
              array (
                'key' => 'Oriya (India)',
                'value' => 'or_IN',
              ),
              457 => 
              array (
                'key' => 'Oromo',
                'value' => 'om',
              ),
              458 => 
              array (
                'key' => 'Oromo (Ethiopia)',
                'value' => 'om_ET',
              ),
              459 => 
              array (
                'key' => 'Oromo (Kenya)',
                'value' => 'om_KE',
              ),
              460 => 
              array (
                'key' => 'Pashto',
                'value' => 'ps',
              ),
              461 => 
              array (
                'key' => 'Pashto (Afghanistan)',
                'value' => 'ps_AF',
              ),
              462 => 
              array (
                'key' => 'Persian',
                'value' => 'fa',
              ),
              463 => 
              array (
                'key' => 'Persian (Afghanistan)',
                'value' => 'fa_AF',
              ),
              464 => 
              array (
                'key' => 'Persian (Iran)',
                'value' => 'fa_IR',
              ),
              465 => 
              array (
                'key' => 'Polish',
                'value' => 'pl',
              ),
              466 => 
              array (
                'key' => 'Polish (Poland)',
                'value' => 'pl_PL',
              ),
              467 => 
              array (
                'key' => 'Portuguese',
                'value' => 'pt',
              ),
              468 => 
              array (
                'key' => 'Portuguese (Angola)',
                'value' => 'pt_AO',
              ),
              469 => 
              array (
                'key' => 'Portuguese (Brazil)',
                'value' => 'pt_BR',
              ),
              470 => 
              array (
                'key' => 'Portuguese (Cape Verde)',
                'value' => 'pt_CV',
              ),
              471 => 
              array (
                'key' => 'Portuguese (Guinea-Bissau)',
                'value' => 'pt_GW',
              ),
              472 => 
              array (
                'key' => 'Portuguese (Macau SAR China)',
                'value' => 'pt_MO',
              ),
              473 => 
              array (
                'key' => 'Portuguese (Mozambique)',
                'value' => 'pt_MZ',
              ),
              474 => 
              array (
                'key' => 'Portuguese (Portugal)',
                'value' => 'pt_PT',
              ),
              475 => 
              array (
                'key' => 'Portuguese (São Tomé and Príncipe)',
                'value' => 'pt_ST',
              ),
              476 => 
              array (
                'key' => 'Portuguese (Timor-Leste)',
                'value' => 'pt_TL',
              ),
              477 => 
              array (
                'key' => 'Punjabi',
                'value' => 'pa_Guru',
              ),
              478 => 
              array (
                'key' => 'Punjabi',
                'value' => 'pa',
              ),
              479 => 
              array (
                'key' => 'Punjabi',
                'value' => 'pa_Arab',
              ),
              480 => 
              array (
                'key' => 'Punjabi (India)',
                'value' => 'pa_Guru_IN',
              ),
              481 => 
              array (
                'key' => 'Punjabi (Pakistan)',
                'value' => 'pa_Arab_PK',
              ),
              482 => 
              array (
                'key' => 'Romanian',
                'value' => 'ro',
              ),
              483 => 
              array (
                'key' => 'Romanian (Moldova)',
                'value' => 'ro_MD',
              ),
              484 => 
              array (
                'key' => 'Romanian (Romania)',
                'value' => 'ro_RO',
              ),
              485 => 
              array (
                'key' => 'Romansh',
                'value' => 'rm',
              ),
              486 => 
              array (
                'key' => 'Romansh (Switzerland)',
                'value' => 'rm_CH',
              ),
              487 => 
              array (
                'key' => 'Rombo',
                'value' => 'rof',
              ),
              488 => 
              array (
                'key' => 'Rombo (Tanzania)',
                'value' => 'rof_TZ',
              ),
              489 => 
              array (
                'key' => 'Rundi',
                'value' => 'rn',
              ),
              490 => 
              array (
                'key' => 'Rundi (Burundi)',
                'value' => 'rn_BI',
              ),
              491 => 
              array (
                'key' => 'Russian',
                'value' => 'ru',
              ),
              492 => 
              array (
                'key' => 'Russian (Belarus)',
                'value' => 'ru_BY',
              ),
              493 => 
              array (
                'key' => 'Russian (Kazakhstan)',
                'value' => 'ru_KZ',
              ),
              494 => 
              array (
                'key' => 'Russian (Kyrgyzstan)',
                'value' => 'ru_KG',
              ),
              495 => 
              array (
                'key' => 'Russian (Moldova)',
                'value' => 'ru_MD',
              ),
              496 => 
              array (
                'key' => 'Russian (Russia)',
                'value' => 'ru_RU',
              ),
              497 => 
              array (
                'key' => 'Russian (Ukraine)',
                'value' => 'ru_UA',
              ),
              498 => 
              array (
                'key' => 'Rwa',
                'value' => 'rwk',
              ),
              499 => 
              array (
                'key' => 'Rwa (Tanzania)',
                'value' => 'rwk_TZ',
              ),
              500 => 
              array (
                'key' => 'Samburu',
                'value' => 'saq',
              ),
              501 => 
              array (
                'key' => 'Samburu (Kenya)',
                'value' => 'saq_KE',
              ),
              502 => 
              array (
                'key' => 'Sango',
                'value' => 'sg',
              ),
              503 => 
              array (
                'key' => 'Sango (Central African Republic)',
                'value' => 'sg_CF',
              ),
              504 => 
              array (
                'key' => 'Sangu',
                'value' => 'sbp',
              ),
              505 => 
              array (
                'key' => 'Sangu (Tanzania)',
                'value' => 'sbp_TZ',
              ),
              506 => 
              array (
                'key' => 'Sena',
                'value' => 'seh',
              ),
              507 => 
              array (
                'key' => 'Sena (Mozambique)',
                'value' => 'seh_MZ',
              ),
              508 => 
              array (
                'key' => 'Serbian',
                'value' => 'sr_Latn',
              ),
              509 => 
              array (
                'key' => 'Serbian',
                'value' => 'sr',
              ),
              510 => 
              array (
                'key' => 'Serbian',
                'value' => 'sr_Cyrl',
              ),
              511 => 
              array (
                'key' => 'Serbian (Bosnia and Herzegovina)',
                'value' => 'sr_Cyrl_BA',
              ),
              512 => 
              array (
                'key' => 'Serbian (Bosnia and Herzegovina)',
                'value' => 'sr_Latn_BA',
              ),
              513 => 
              array (
                'key' => 'Serbian (Kosovo)',
                'value' => 'sr_Latn_XK',
              ),
              514 => 
              array (
                'key' => 'Serbian (Kosovo)',
                'value' => 'sr_Cyrl_XK',
              ),
              515 => 
              array (
                'key' => 'Serbian (Montenegro)',
                'value' => 'sr_Latn_ME',
              ),
              516 => 
              array (
                'key' => 'Serbian (Montenegro)',
                'value' => 'sr_Cyrl_ME',
              ),
              517 => 
              array (
                'key' => 'Serbian (Serbia)',
                'value' => 'sr_Latn_RS',
              ),
              518 => 
              array (
                'key' => 'Serbian (Serbia)',
                'value' => 'sr_Cyrl_RS',
              ),
              519 => 
              array (
                'key' => 'Shambala',
                'value' => 'ksb',
              ),
              520 => 
              array (
                'key' => 'Shambala (Tanzania)',
                'value' => 'ksb_TZ',
              ),
              521 => 
              array (
                'key' => 'Shona',
                'value' => 'sn',
              ),
              522 => 
              array (
                'key' => 'Shona (Zimbabwe)',
                'value' => 'sn_ZW',
              ),
              523 => 
              array (
                'key' => 'Sichuan Yi',
                'value' => 'ii',
              ),
              524 => 
              array (
                'key' => 'Sichuan Yi (China)',
                'value' => 'ii_CN',
              ),
              525 => 
              array (
                'key' => 'Sinhala',
                'value' => 'si',
              ),
              526 => 
              array (
                'key' => 'Sinhala (Sri Lanka)',
                'value' => 'si_LK',
              ),
              527 => 
              array (
                'key' => 'Slovak',
                'value' => 'sk',
              ),
              528 => 
              array (
                'key' => 'Slovak (Slovakia)',
                'value' => 'sk_SK',
              ),
              529 => 
              array (
                'key' => 'Slovenian',
                'value' => 'sl',
              ),
              530 => 
              array (
                'key' => 'Slovenian (Slovenia)',
                'value' => 'sl_SI',
              ),
              531 => 
              array (
                'key' => 'Soga',
                'value' => 'xog',
              ),
              532 => 
              array (
                'key' => 'Soga (Uganda)',
                'value' => 'xog_UG',
              ),
              533 => 
              array (
                'key' => 'Somali',
                'value' => 'so',
              ),
              534 => 
              array (
                'key' => 'Somali (Djibouti)',
                'value' => 'so_DJ',
              ),
              535 => 
              array (
                'key' => 'Somali (Ethiopia)',
                'value' => 'so_ET',
              ),
              536 => 
              array (
                'key' => 'Somali (Kenya)',
                'value' => 'so_KE',
              ),
              537 => 
              array (
                'key' => 'Somali (Somalia)',
                'value' => 'so_SO',
              ),
              538 => 
              array (
                'key' => 'Spanish',
                'value' => 'es',
              ),
              539 => 
              array (
                'key' => 'Spanish (Argentina)',
                'value' => 'es_AR',
              ),
              540 => 
              array (
                'key' => 'Spanish (Bolivia)',
                'value' => 'es_BO',
              ),
              541 => 
              array (
                'key' => 'Spanish (Canary Islands)',
                'value' => 'es_IC',
              ),
              542 => 
              array (
                'key' => 'Spanish (Ceuta and Melilla)',
                'value' => 'es_EA',
              ),
              543 => 
              array (
                'key' => 'Spanish (Chile)',
                'value' => 'es_CL',
              ),
              544 => 
              array (
                'key' => 'Spanish (Colombia)',
                'value' => 'es_CO',
              ),
              545 => 
              array (
                'key' => 'Spanish (Costa Rica)',
                'value' => 'es_CR',
              ),
              546 => 
              array (
                'key' => 'Spanish (Cuba)',
                'value' => 'es_CU',
              ),
              547 => 
              array (
                'key' => 'Spanish (Dominican Republic)',
                'value' => 'es_DO',
              ),
              548 => 
              array (
                'key' => 'Spanish (Ecuador)',
                'value' => 'es_EC',
              ),
              549 => 
              array (
                'key' => 'Spanish (El Salvador)',
                'value' => 'es_SV',
              ),
              550 => 
              array (
                'key' => 'Spanish (Equatorial Guinea)',
                'value' => 'es_GQ',
              ),
              551 => 
              array (
                'key' => 'Spanish (Guatemala)',
                'value' => 'es_GT',
              ),
              552 => 
              array (
                'key' => 'Spanish (Honduras)',
                'value' => 'es_HN',
              ),
              553 => 
              array (
                'key' => 'Spanish (Latin America)',
                'value' => 'es_419',
              ),
              554 => 
              array (
                'key' => 'Spanish (Mexico)',
                'value' => 'es_MX',
              ),
              555 => 
              array (
                'key' => 'Spanish (Nicaragua)',
                'value' => 'es_NI',
              ),
              556 => 
              array (
                'key' => 'Spanish (Panama)',
                'value' => 'es_PA',
              ),
              557 => 
              array (
                'key' => 'Spanish (Paraguay)',
                'value' => 'es_PY',
              ),
              558 => 
              array (
                'key' => 'Spanish (Peru)',
                'value' => 'es_PE',
              ),
              559 => 
              array (
                'key' => 'Spanish (Philippines)',
                'value' => 'es_PH',
              ),
              560 => 
              array (
                'key' => 'Spanish (Puerto Rico)',
                'value' => 'es_PR',
              ),
              561 => 
              array (
                'key' => 'Spanish (Spain)',
                'value' => 'es_ES',
              ),
              562 => 
              array (
                'key' => 'Spanish (United States)',
                'value' => 'es_US',
              ),
              563 => 
              array (
                'key' => 'Spanish (Uruguay)',
                'value' => 'es_UY',
              ),
              564 => 
              array (
                'key' => 'Spanish (Venezuela)',
                'value' => 'es_VE',
              ),
              565 => 
              array (
                'key' => 'Standard Moroccan Tamazight',
                'value' => 'zgh',
              ),
              566 => 
              array (
                'key' => 'Standard Moroccan Tamazight (Morocco)',
                'value' => 'zgh_MA',
              ),
              567 => 
              array (
                'key' => 'Swahili',
                'value' => 'sw',
              ),
              568 => 
              array (
                'key' => 'Swahili (Kenya)',
                'value' => 'sw_KE',
              ),
              569 => 
              array (
                'key' => 'Swahili (Tanzania)',
                'value' => 'sw_TZ',
              ),
              570 => 
              array (
                'key' => 'Swahili (Uganda)',
                'value' => 'sw_UG',
              ),
              571 => 
              array (
                'key' => 'Swedish',
                'value' => 'sv',
              ),
              572 => 
              array (
                'key' => 'Swedish (Finland)',
                'value' => 'sv_FI',
              ),
              573 => 
              array (
                'key' => 'Swedish (Sweden)',
                'value' => 'sv_SE',
              ),
              574 => 
              array (
                'key' => 'Swedish (Åland Islands)',
                'value' => 'sv_AX',
              ),
              575 => 
              array (
                'key' => 'Swiss German',
                'value' => 'gsw',
              ),
              576 => 
              array (
                'key' => 'Swiss German (Liechtenstein)',
                'value' => 'gsw_LI',
              ),
              577 => 
              array (
                'key' => 'Swiss German (Switzerland)',
                'value' => 'gsw_CH',
              ),
              578 => 
              array (
                'key' => 'Tachelhit',
                'value' => 'shi',
              ),
              579 => 
              array (
                'key' => 'Tachelhit',
                'value' => 'shi_Latn',
              ),
              580 => 
              array (
                'key' => 'Tachelhit',
                'value' => 'shi_Tfng',
              ),
              581 => 
              array (
                'key' => 'Tachelhit (Morocco)',
                'value' => 'shi_Tfng_MA',
              ),
              582 => 
              array (
                'key' => 'Tachelhit (Morocco)',
                'value' => 'shi_Latn_MA',
              ),
              583 => 
              array (
                'key' => 'Taita',
                'value' => 'dav',
              ),
              584 => 
              array (
                'key' => 'Taita (Kenya)',
                'value' => 'dav_KE',
              ),
              585 => 
              array (
                'key' => 'Tamil',
                'value' => 'ta',
              ),
              586 => 
              array (
                'key' => 'Tamil (India)',
                'value' => 'ta_IN',
              ),
              587 => 
              array (
                'key' => 'Tamil (Malaysia)',
                'value' => 'ta_MY',
              ),
              588 => 
              array (
                'key' => 'Tamil (Singapore)',
                'value' => 'ta_SG',
              ),
              589 => 
              array (
                'key' => 'Tamil (Sri Lanka)',
                'value' => 'ta_LK',
              ),
              590 => 
              array (
                'key' => 'Tasawaq',
                'value' => 'twq',
              ),
              591 => 
              array (
                'key' => 'Tasawaq (Niger)',
                'value' => 'twq_NE',
              ),
              592 => 
              array (
                'key' => 'Telugu',
                'value' => 'te',
              ),
              593 => 
              array (
                'key' => 'Telugu (India)',
                'value' => 'te_IN',
              ),
              594 => 
              array (
                'key' => 'Teso',
                'value' => 'teo',
              ),
              595 => 
              array (
                'key' => 'Teso (Kenya)',
                'value' => 'teo_KE',
              ),
              596 => 
              array (
                'key' => 'Teso (Uganda)',
                'value' => 'teo_UG',
              ),
              597 => 
              array (
                'key' => 'Thai',
                'value' => 'th',
              ),
              598 => 
              array (
                'key' => 'Thai (Thailand)',
                'value' => 'th_TH',
              ),
              599 => 
              array (
                'key' => 'Tibetan',
                'value' => 'bo',
              ),
              600 => 
              array (
                'key' => 'Tibetan (China)',
                'value' => 'bo_CN',
              ),
              601 => 
              array (
                'key' => 'Tibetan (India)',
                'value' => 'bo_IN',
              ),
              602 => 
              array (
                'key' => 'Tigrinya',
                'value' => 'ti',
              ),
              603 => 
              array (
                'key' => 'Tigrinya (Eritrea)',
                'value' => 'ti_ER',
              ),
              604 => 
              array (
                'key' => 'Tigrinya (Ethiopia)',
                'value' => 'ti_ET',
              ),
              605 => 
              array (
                'key' => 'Tongan',
                'value' => 'to',
              ),
              606 => 
              array (
                'key' => 'Tongan (Tonga)',
                'value' => 'to_TO',
              ),
              607 => 
              array (
                'key' => 'Turkish',
                'value' => 'tr',
              ),
              608 => 
              array (
                'key' => 'Turkish (Cyprus)',
                'value' => 'tr_CY',
              ),
              609 => 
              array (
                'key' => 'Turkish (Turkey)',
                'value' => 'tr_TR',
              ),
              610 => 
              array (
                'key' => 'Ukrainian',
                'value' => 'uk',
              ),
              611 => 
              array (
                'key' => 'Ukrainian (Ukraine)',
                'value' => 'uk_UA',
              ),
              612 => 
              array (
                'key' => 'Urdu',
                'value' => 'ur',
              ),
              613 => 
              array (
                'key' => 'Urdu (India)',
                'value' => 'ur_IN',
              ),
              614 => 
              array (
                'key' => 'Urdu (Pakistan)',
                'value' => 'ur_PK',
              ),
              615 => 
              array (
                'key' => 'Uzbek',
                'value' => 'uz_Latn',
              ),
              616 => 
              array (
                'key' => 'Uzbek',
                'value' => 'uz_Arab',
              ),
              617 => 
              array (
                'key' => 'Uzbek',
                'value' => 'uz',
              ),
              618 => 
              array (
                'key' => 'Uzbek',
                'value' => 'uz_Cyrl',
              ),
              619 => 
              array (
                'key' => 'Uzbek (Afghanistan)',
                'value' => 'uz_Arab_AF',
              ),
              620 => 
              array (
                'key' => 'Uzbek (Uzbekistan)',
                'value' => 'uz_Latn_UZ',
              ),
              621 => 
              array (
                'key' => 'Uzbek (Uzbekistan)',
                'value' => 'uz_Cyrl_UZ',
              ),
              622 => 
              array (
                'key' => 'Vai',
                'value' => 'vai',
              ),
              623 => 
              array (
                'key' => 'Vai',
                'value' => 'vai_Vaii',
              ),
              624 => 
              array (
                'key' => 'Vai',
                'value' => 'vai_Latn',
              ),
              625 => 
              array (
                'key' => 'Vai (Liberia)',
                'value' => 'vai_Latn_LR',
              ),
              626 => 
              array (
                'key' => 'Vai (Liberia)',
                'value' => 'vai_Vaii_LR',
              ),
              627 => 
              array (
                'key' => 'Vietnamese',
                'value' => 'vi',
              ),
              628 => 
              array (
                'key' => 'Vietnamese (Vietnam)',
                'value' => 'vi_VN',
              ),
              629 => 
              array (
                'key' => 'Vunjo',
                'value' => 'vun',
              ),
              630 => 
              array (
                'key' => 'Vunjo (Tanzania)',
                'value' => 'vun_TZ',
              ),
              631 => 
              array (
                'key' => 'Welsh',
                'value' => 'cy',
              ),
              632 => 
              array (
                'key' => 'Welsh (United Kingdom)',
                'value' => 'cy_GB',
              ),
              633 => 
              array (
                'key' => 'Yangben',
                'value' => 'yav',
              ),
              634 => 
              array (
                'key' => 'Yangben (Cameroon)',
                'value' => 'yav_CM',
              ),
              635 => 
              array (
                'key' => 'Yoruba',
                'value' => 'yo',
              ),
              636 => 
              array (
                'key' => 'Yoruba (Benin)',
                'value' => 'yo_BJ',
              ),
              637 => 
              array (
                'key' => 'Yoruba (Nigeria)',
                'value' => 'yo_NG',
              ),
              638 => 
              array (
                'key' => 'Zarma',
                'value' => 'dje',
              ),
              639 => 
              array (
                'key' => 'Zarma (Niger)',
                'value' => 'dje_NE',
              ),
              640 => 
              array (
                'key' => 'Zulu',
                'value' => 'zu',
              ),
              641 => 
              array (
                'key' => 'Zulu (South Africa)',
                'value' => 'zu_ZA',
              ),
            ),
             'width' => '',
             'defaultValue' => NULL,
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'name' => 'alan',
             'title' => 'lan',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          14 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
             'fieldtype' => 'multiselect',
             'options' => 
            array (
            ),
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'queryColumnType' => 'text',
             'columnType' => 'text',
             'phpdocType' => 'array',
             'name' => 'amultiselection',
             'title' => 'multiselection',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          15 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Countrymultiselect::__set_state(array(
             'fieldtype' => 'countrymultiselect',
             'restrictTo' => '',
             'options' => 
            array (
              0 => 
              array (
                'key' => 'Afghanistan',
                'value' => 'AF',
              ),
              1 => 
              array (
                'key' => 'Albania',
                'value' => 'AL',
              ),
              2 => 
              array (
                'key' => 'Algeria',
                'value' => 'DZ',
              ),
              3 => 
              array (
                'key' => 'American Samoa',
                'value' => 'AS',
              ),
              4 => 
              array (
                'key' => 'Andorra',
                'value' => 'AD',
              ),
              5 => 
              array (
                'key' => 'Angola',
                'value' => 'AO',
              ),
              6 => 
              array (
                'key' => 'Anguilla',
                'value' => 'AI',
              ),
              7 => 
              array (
                'key' => 'Antigua and Barbuda',
                'value' => 'AG',
              ),
              8 => 
              array (
                'key' => 'Argentina',
                'value' => 'AR',
              ),
              9 => 
              array (
                'key' => 'Armenia',
                'value' => 'AM',
              ),
              10 => 
              array (
                'key' => 'Aruba',
                'value' => 'AW',
              ),
              11 => 
              array (
                'key' => 'Australia',
                'value' => 'AU',
              ),
              12 => 
              array (
                'key' => 'Austria',
                'value' => 'AT',
              ),
              13 => 
              array (
                'key' => 'Azerbaijan',
                'value' => 'AZ',
              ),
              14 => 
              array (
                'key' => 'Bahamas',
                'value' => 'BS',
              ),
              15 => 
              array (
                'key' => 'Bahrain',
                'value' => 'BH',
              ),
              16 => 
              array (
                'key' => 'Bangladesh',
                'value' => 'BD',
              ),
              17 => 
              array (
                'key' => 'Barbados',
                'value' => 'BB',
              ),
              18 => 
              array (
                'key' => 'Belarus',
                'value' => 'BY',
              ),
              19 => 
              array (
                'key' => 'Belgium',
                'value' => 'BE',
              ),
              20 => 
              array (
                'key' => 'Belize',
                'value' => 'BZ',
              ),
              21 => 
              array (
                'key' => 'Benin',
                'value' => 'BJ',
              ),
              22 => 
              array (
                'key' => 'Bermuda',
                'value' => 'BM',
              ),
              23 => 
              array (
                'key' => 'Bhutan',
                'value' => 'BT',
              ),
              24 => 
              array (
                'key' => 'Bolivia',
                'value' => 'BO',
              ),
              25 => 
              array (
                'key' => 'Bosnia and Herzegovina',
                'value' => 'BA',
              ),
              26 => 
              array (
                'key' => 'Botswana',
                'value' => 'BW',
              ),
              27 => 
              array (
                'key' => 'Brazil',
                'value' => 'BR',
              ),
              28 => 
              array (
                'key' => 'British Indian Ocean Territory',
                'value' => 'IO',
              ),
              29 => 
              array (
                'key' => 'British Virgin Islands',
                'value' => 'VG',
              ),
              30 => 
              array (
                'key' => 'Brunei',
                'value' => 'BN',
              ),
              31 => 
              array (
                'key' => 'Bulgaria',
                'value' => 'BG',
              ),
              32 => 
              array (
                'key' => 'Burkina Faso',
                'value' => 'BF',
              ),
              33 => 
              array (
                'key' => 'Burundi',
                'value' => 'BI',
              ),
              34 => 
              array (
                'key' => 'Cambodia',
                'value' => 'KH',
              ),
              35 => 
              array (
                'key' => 'Cameroon',
                'value' => 'CM',
              ),
              36 => 
              array (
                'key' => 'Canada',
                'value' => 'CA',
              ),
              37 => 
              array (
                'key' => 'Canary Islands',
                'value' => 'IC',
              ),
              38 => 
              array (
                'key' => 'Cape Verde',
                'value' => 'CV',
              ),
              39 => 
              array (
                'key' => 'Caribbean Netherlands',
                'value' => 'BQ',
              ),
              40 => 
              array (
                'key' => 'Cayman Islands',
                'value' => 'KY',
              ),
              41 => 
              array (
                'key' => 'Central African Republic',
                'value' => 'CF',
              ),
              42 => 
              array (
                'key' => 'Ceuta and Melilla',
                'value' => 'EA',
              ),
              43 => 
              array (
                'key' => 'Chad',
                'value' => 'TD',
              ),
              44 => 
              array (
                'key' => 'Chile',
                'value' => 'CL',
              ),
              45 => 
              array (
                'key' => 'China',
                'value' => 'CN',
              ),
              46 => 
              array (
                'key' => 'Christmas Island',
                'value' => 'CX',
              ),
              47 => 
              array (
                'key' => 'Cocos (Keeling) Islands',
                'value' => 'CC',
              ),
              48 => 
              array (
                'key' => 'Colombia',
                'value' => 'CO',
              ),
              49 => 
              array (
                'key' => 'Comoros',
                'value' => 'KM',
              ),
              50 => 
              array (
                'key' => 'Congo - Brazzaville',
                'value' => 'CG',
              ),
              51 => 
              array (
                'key' => 'Congo - Kinshasa',
                'value' => 'CD',
              ),
              52 => 
              array (
                'key' => 'Cook Islands',
                'value' => 'CK',
              ),
              53 => 
              array (
                'key' => 'Costa Rica',
                'value' => 'CR',
              ),
              54 => 
              array (
                'key' => 'Croatia',
                'value' => 'HR',
              ),
              55 => 
              array (
                'key' => 'Cuba',
                'value' => 'CU',
              ),
              56 => 
              array (
                'key' => 'Curaçao',
                'value' => 'CW',
              ),
              57 => 
              array (
                'key' => 'Cyprus',
                'value' => 'CY',
              ),
              58 => 
              array (
                'key' => 'Czech Republic',
                'value' => 'CZ',
              ),
              59 => 
              array (
                'key' => 'Côte d’Ivoire',
                'value' => 'CI',
              ),
              60 => 
              array (
                'key' => 'Denmark',
                'value' => 'DK',
              ),
              61 => 
              array (
                'key' => 'Diego Garcia',
                'value' => 'DG',
              ),
              62 => 
              array (
                'key' => 'Djibouti',
                'value' => 'DJ',
              ),
              63 => 
              array (
                'key' => 'Dominica',
                'value' => 'DM',
              ),
              64 => 
              array (
                'key' => 'Dominican Republic',
                'value' => 'DO',
              ),
              65 => 
              array (
                'key' => 'Ecuador',
                'value' => 'EC',
              ),
              66 => 
              array (
                'key' => 'Egypt',
                'value' => 'EG',
              ),
              67 => 
              array (
                'key' => 'El Salvador',
                'value' => 'SV',
              ),
              68 => 
              array (
                'key' => 'Equatorial Guinea',
                'value' => 'GQ',
              ),
              69 => 
              array (
                'key' => 'Eritrea',
                'value' => 'ER',
              ),
              70 => 
              array (
                'key' => 'Estonia',
                'value' => 'EE',
              ),
              71 => 
              array (
                'key' => 'Ethiopia',
                'value' => 'ET',
              ),
              72 => 
              array (
                'key' => 'Falkland Islands',
                'value' => 'FK',
              ),
              73 => 
              array (
                'key' => 'Faroe Islands',
                'value' => 'FO',
              ),
              74 => 
              array (
                'key' => 'Fiji',
                'value' => 'FJ',
              ),
              75 => 
              array (
                'key' => 'Finland',
                'value' => 'FI',
              ),
              76 => 
              array (
                'key' => 'France',
                'value' => 'FR',
              ),
              77 => 
              array (
                'key' => 'French Guiana',
                'value' => 'GF',
              ),
              78 => 
              array (
                'key' => 'French Polynesia',
                'value' => 'PF',
              ),
              79 => 
              array (
                'key' => 'Gabon',
                'value' => 'GA',
              ),
              80 => 
              array (
                'key' => 'Gambia',
                'value' => 'GM',
              ),
              81 => 
              array (
                'key' => 'Georgia',
                'value' => 'GE',
              ),
              82 => 
              array (
                'key' => 'Germany',
                'value' => 'DE',
              ),
              83 => 
              array (
                'key' => 'Ghana',
                'value' => 'GH',
              ),
              84 => 
              array (
                'key' => 'Gibraltar',
                'value' => 'GI',
              ),
              85 => 
              array (
                'key' => 'Greece',
                'value' => 'GR',
              ),
              86 => 
              array (
                'key' => 'Greenland',
                'value' => 'GL',
              ),
              87 => 
              array (
                'key' => 'Grenada',
                'value' => 'GD',
              ),
              88 => 
              array (
                'key' => 'Guadeloupe',
                'value' => 'GP',
              ),
              89 => 
              array (
                'key' => 'Guam',
                'value' => 'GU',
              ),
              90 => 
              array (
                'key' => 'Guatemala',
                'value' => 'GT',
              ),
              91 => 
              array (
                'key' => 'Guernsey',
                'value' => 'GG',
              ),
              92 => 
              array (
                'key' => 'Guinea',
                'value' => 'GN',
              ),
              93 => 
              array (
                'key' => 'Guinea-Bissau',
                'value' => 'GW',
              ),
              94 => 
              array (
                'key' => 'Guyana',
                'value' => 'GY',
              ),
              95 => 
              array (
                'key' => 'Haiti',
                'value' => 'HT',
              ),
              96 => 
              array (
                'key' => 'Honduras',
                'value' => 'HN',
              ),
              97 => 
              array (
                'key' => 'Hong Kong SAR China',
                'value' => 'HK',
              ),
              98 => 
              array (
                'key' => 'Hungary',
                'value' => 'HU',
              ),
              99 => 
              array (
                'key' => 'Iceland',
                'value' => 'IS',
              ),
              100 => 
              array (
                'key' => 'India',
                'value' => 'IN',
              ),
              101 => 
              array (
                'key' => 'Indonesia',
                'value' => 'ID',
              ),
              102 => 
              array (
                'key' => 'Iran',
                'value' => 'IR',
              ),
              103 => 
              array (
                'key' => 'Iraq',
                'value' => 'IQ',
              ),
              104 => 
              array (
                'key' => 'Ireland',
                'value' => 'IE',
              ),
              105 => 
              array (
                'key' => 'Isle of Man',
                'value' => 'IM',
              ),
              106 => 
              array (
                'key' => 'Israel',
                'value' => 'IL',
              ),
              107 => 
              array (
                'key' => 'Italy',
                'value' => 'IT',
              ),
              108 => 
              array (
                'key' => 'Jamaica',
                'value' => 'JM',
              ),
              109 => 
              array (
                'key' => 'Japan',
                'value' => 'JP',
              ),
              110 => 
              array (
                'key' => 'Jersey',
                'value' => 'JE',
              ),
              111 => 
              array (
                'key' => 'Jordan',
                'value' => 'JO',
              ),
              112 => 
              array (
                'key' => 'Kazakhstan',
                'value' => 'KZ',
              ),
              113 => 
              array (
                'key' => 'Kenya',
                'value' => 'KE',
              ),
              114 => 
              array (
                'key' => 'Kiribati',
                'value' => 'KI',
              ),
              115 => 
              array (
                'key' => 'Kosovo',
                'value' => 'XK',
              ),
              116 => 
              array (
                'key' => 'Kuwait',
                'value' => 'KW',
              ),
              117 => 
              array (
                'key' => 'Kyrgyzstan',
                'value' => 'KG',
              ),
              118 => 
              array (
                'key' => 'Laos',
                'value' => 'LA',
              ),
              119 => 
              array (
                'key' => 'Latvia',
                'value' => 'LV',
              ),
              120 => 
              array (
                'key' => 'Lebanon',
                'value' => 'LB',
              ),
              121 => 
              array (
                'key' => 'Lesotho',
                'value' => 'LS',
              ),
              122 => 
              array (
                'key' => 'Liberia',
                'value' => 'LR',
              ),
              123 => 
              array (
                'key' => 'Libya',
                'value' => 'LY',
              ),
              124 => 
              array (
                'key' => 'Liechtenstein',
                'value' => 'LI',
              ),
              125 => 
              array (
                'key' => 'Lithuania',
                'value' => 'LT',
              ),
              126 => 
              array (
                'key' => 'Luxembourg',
                'value' => 'LU',
              ),
              127 => 
              array (
                'key' => 'Macau SAR China',
                'value' => 'MO',
              ),
              128 => 
              array (
                'key' => 'Macedonia',
                'value' => 'MK',
              ),
              129 => 
              array (
                'key' => 'Madagascar',
                'value' => 'MG',
              ),
              130 => 
              array (
                'key' => 'Malawi',
                'value' => 'MW',
              ),
              131 => 
              array (
                'key' => 'Malaysia',
                'value' => 'MY',
              ),
              132 => 
              array (
                'key' => 'Mali',
                'value' => 'ML',
              ),
              133 => 
              array (
                'key' => 'Malta',
                'value' => 'MT',
              ),
              134 => 
              array (
                'key' => 'Marshall Islands',
                'value' => 'MH',
              ),
              135 => 
              array (
                'key' => 'Martinique',
                'value' => 'MQ',
              ),
              136 => 
              array (
                'key' => 'Mauritania',
                'value' => 'MR',
              ),
              137 => 
              array (
                'key' => 'Mauritius',
                'value' => 'MU',
              ),
              138 => 
              array (
                'key' => 'Mayotte',
                'value' => 'YT',
              ),
              139 => 
              array (
                'key' => 'Mexico',
                'value' => 'MX',
              ),
              140 => 
              array (
                'key' => 'Micronesia',
                'value' => 'FM',
              ),
              141 => 
              array (
                'key' => 'Moldova',
                'value' => 'MD',
              ),
              142 => 
              array (
                'key' => 'Monaco',
                'value' => 'MC',
              ),
              143 => 
              array (
                'key' => 'Mongolia',
                'value' => 'MN',
              ),
              144 => 
              array (
                'key' => 'Montenegro',
                'value' => 'ME',
              ),
              145 => 
              array (
                'key' => 'Montserrat',
                'value' => 'MS',
              ),
              146 => 
              array (
                'key' => 'Morocco',
                'value' => 'MA',
              ),
              147 => 
              array (
                'key' => 'Mozambique',
                'value' => 'MZ',
              ),
              148 => 
              array (
                'key' => 'Myanmar (Burma)',
                'value' => 'MM',
              ),
              149 => 
              array (
                'key' => 'Namibia',
                'value' => 'NA',
              ),
              150 => 
              array (
                'key' => 'Nauru',
                'value' => 'NR',
              ),
              151 => 
              array (
                'key' => 'Nepal',
                'value' => 'NP',
              ),
              152 => 
              array (
                'key' => 'Netherlands',
                'value' => 'NL',
              ),
              153 => 
              array (
                'key' => 'New Caledonia',
                'value' => 'NC',
              ),
              154 => 
              array (
                'key' => 'New Zealand',
                'value' => 'NZ',
              ),
              155 => 
              array (
                'key' => 'Nicaragua',
                'value' => 'NI',
              ),
              156 => 
              array (
                'key' => 'Niger',
                'value' => 'NE',
              ),
              157 => 
              array (
                'key' => 'Nigeria',
                'value' => 'NG',
              ),
              158 => 
              array (
                'key' => 'Niue',
                'value' => 'NU',
              ),
              159 => 
              array (
                'key' => 'Norfolk Island',
                'value' => 'NF',
              ),
              160 => 
              array (
                'key' => 'North Korea',
                'value' => 'KP',
              ),
              161 => 
              array (
                'key' => 'Northern Mariana Islands',
                'value' => 'MP',
              ),
              162 => 
              array (
                'key' => 'Norway',
                'value' => 'NO',
              ),
              163 => 
              array (
                'key' => 'Oman',
                'value' => 'OM',
              ),
              164 => 
              array (
                'key' => 'Pakistan',
                'value' => 'PK',
              ),
              165 => 
              array (
                'key' => 'Palau',
                'value' => 'PW',
              ),
              166 => 
              array (
                'key' => 'Palestinian Territories',
                'value' => 'PS',
              ),
              167 => 
              array (
                'key' => 'Panama',
                'value' => 'PA',
              ),
              168 => 
              array (
                'key' => 'Papua New Guinea',
                'value' => 'PG',
              ),
              169 => 
              array (
                'key' => 'Paraguay',
                'value' => 'PY',
              ),
              170 => 
              array (
                'key' => 'Peru',
                'value' => 'PE',
              ),
              171 => 
              array (
                'key' => 'Philippines',
                'value' => 'PH',
              ),
              172 => 
              array (
                'key' => 'Pitcairn Islands',
                'value' => 'PN',
              ),
              173 => 
              array (
                'key' => 'Poland',
                'value' => 'PL',
              ),
              174 => 
              array (
                'key' => 'Portugal',
                'value' => 'PT',
              ),
              175 => 
              array (
                'key' => 'Puerto Rico',
                'value' => 'PR',
              ),
              176 => 
              array (
                'key' => 'Qatar',
                'value' => 'QA',
              ),
              177 => 
              array (
                'key' => 'Romania',
                'value' => 'RO',
              ),
              178 => 
              array (
                'key' => 'Russia',
                'value' => 'RU',
              ),
              179 => 
              array (
                'key' => 'Rwanda',
                'value' => 'RW',
              ),
              180 => 
              array (
                'key' => 'Réunion',
                'value' => 'RE',
              ),
              181 => 
              array (
                'key' => 'Saint Barthélemy',
                'value' => 'BL',
              ),
              182 => 
              array (
                'key' => 'Saint Helena',
                'value' => 'SH',
              ),
              183 => 
              array (
                'key' => 'Saint Kitts and Nevis',
                'value' => 'KN',
              ),
              184 => 
              array (
                'key' => 'Saint Lucia',
                'value' => 'LC',
              ),
              185 => 
              array (
                'key' => 'Saint Martin',
                'value' => 'MF',
              ),
              186 => 
              array (
                'key' => 'Saint Pierre and Miquelon',
                'value' => 'PM',
              ),
              187 => 
              array (
                'key' => 'Samoa',
                'value' => 'WS',
              ),
              188 => 
              array (
                'key' => 'San Marino',
                'value' => 'SM',
              ),
              189 => 
              array (
                'key' => 'Saudi Arabia',
                'value' => 'SA',
              ),
              190 => 
              array (
                'key' => 'Senegal',
                'value' => 'SN',
              ),
              191 => 
              array (
                'key' => 'Serbia',
                'value' => 'RS',
              ),
              192 => 
              array (
                'key' => 'Seychelles',
                'value' => 'SC',
              ),
              193 => 
              array (
                'key' => 'Sierra Leone',
                'value' => 'SL',
              ),
              194 => 
              array (
                'key' => 'Singapore',
                'value' => 'SG',
              ),
              195 => 
              array (
                'key' => 'Sint Maarten',
                'value' => 'SX',
              ),
              196 => 
              array (
                'key' => 'Slovakia',
                'value' => 'SK',
              ),
              197 => 
              array (
                'key' => 'Slovenia',
                'value' => 'SI',
              ),
              198 => 
              array (
                'key' => 'Solomon Islands',
                'value' => 'SB',
              ),
              199 => 
              array (
                'key' => 'Somalia',
                'value' => 'SO',
              ),
              200 => 
              array (
                'key' => 'South Africa',
                'value' => 'ZA',
              ),
              201 => 
              array (
                'key' => 'South Korea',
                'value' => 'KR',
              ),
              202 => 
              array (
                'key' => 'South Sudan',
                'value' => 'SS',
              ),
              203 => 
              array (
                'key' => 'Spain',
                'value' => 'ES',
              ),
              204 => 
              array (
                'key' => 'Sri Lanka',
                'value' => 'LK',
              ),
              205 => 
              array (
                'key' => 'St. Vincent & Grenadines',
                'value' => 'VC',
              ),
              206 => 
              array (
                'key' => 'Sudan',
                'value' => 'SD',
              ),
              207 => 
              array (
                'key' => 'Suriname',
                'value' => 'SR',
              ),
              208 => 
              array (
                'key' => 'Svalbard and Jan Mayen',
                'value' => 'SJ',
              ),
              209 => 
              array (
                'key' => 'Swaziland',
                'value' => 'SZ',
              ),
              210 => 
              array (
                'key' => 'Sweden',
                'value' => 'SE',
              ),
              211 => 
              array (
                'key' => 'Switzerland',
                'value' => 'CH',
              ),
              212 => 
              array (
                'key' => 'Syria',
                'value' => 'SY',
              ),
              213 => 
              array (
                'key' => 'São Tomé and Príncipe',
                'value' => 'ST',
              ),
              214 => 
              array (
                'key' => 'Taiwan',
                'value' => 'TW',
              ),
              215 => 
              array (
                'key' => 'Tanzania',
                'value' => 'TZ',
              ),
              216 => 
              array (
                'key' => 'Thailand',
                'value' => 'TH',
              ),
              217 => 
              array (
                'key' => 'Timor-Leste',
                'value' => 'TL',
              ),
              218 => 
              array (
                'key' => 'Togo',
                'value' => 'TG',
              ),
              219 => 
              array (
                'key' => 'Tokelau',
                'value' => 'TK',
              ),
              220 => 
              array (
                'key' => 'Tonga',
                'value' => 'TO',
              ),
              221 => 
              array (
                'key' => 'Trinidad and Tobago',
                'value' => 'TT',
              ),
              222 => 
              array (
                'key' => 'Tunisia',
                'value' => 'TN',
              ),
              223 => 
              array (
                'key' => 'Turkey',
                'value' => 'TR',
              ),
              224 => 
              array (
                'key' => 'Turks and Caicos Islands',
                'value' => 'TC',
              ),
              225 => 
              array (
                'key' => 'Tuvalu',
                'value' => 'TV',
              ),
              226 => 
              array (
                'key' => 'U.S. Outlying Islands',
                'value' => 'UM',
              ),
              227 => 
              array (
                'key' => 'U.S. Virgin Islands',
                'value' => 'VI',
              ),
              228 => 
              array (
                'key' => 'Uganda',
                'value' => 'UG',
              ),
              229 => 
              array (
                'key' => 'Ukraine',
                'value' => 'UA',
              ),
              230 => 
              array (
                'key' => 'United Arab Emirates',
                'value' => 'AE',
              ),
              231 => 
              array (
                'key' => 'United Kingdom',
                'value' => 'GB',
              ),
              232 => 
              array (
                'key' => 'United States',
                'value' => 'US',
              ),
              233 => 
              array (
                'key' => 'Uruguay',
                'value' => 'UY',
              ),
              234 => 
              array (
                'key' => 'Uzbekistan',
                'value' => 'UZ',
              ),
              235 => 
              array (
                'key' => 'Vanuatu',
                'value' => 'VU',
              ),
              236 => 
              array (
                'key' => 'Venezuela',
                'value' => 'VE',
              ),
              237 => 
              array (
                'key' => 'Vietnam',
                'value' => 'VN',
              ),
              238 => 
              array (
                'key' => 'Wallis and Futuna',
                'value' => 'WF',
              ),
              239 => 
              array (
                'key' => 'Western Sahara',
                'value' => 'EH',
              ),
              240 => 
              array (
                'key' => 'Yemen',
                'value' => 'YE',
              ),
              241 => 
              array (
                'key' => 'Zambia',
                'value' => 'ZM',
              ),
              242 => 
              array (
                'key' => 'Zimbabwe',
                'value' => 'ZW',
              ),
              243 => 
              array (
                'key' => 'Åland Islands',
                'value' => 'AX',
              ),
            ),
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'queryColumnType' => 'text',
             'columnType' => 'text',
             'phpdocType' => 'array',
             'name' => 'acountries_multi',
             'title' => 'countries_multi',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          16 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Languagemultiselect::__set_state(array(
             'fieldtype' => 'languagemultiselect',
             'onlySystemLanguages' => false,
             'options' => 
            array (
              0 => 
              array (
                'key' => 'Afrikaans',
                'value' => 'af',
              ),
              1 => 
              array (
                'key' => 'Afrikaans (Namibia)',
                'value' => 'af_NA',
              ),
              2 => 
              array (
                'key' => 'Afrikaans (South Africa)',
                'value' => 'af_ZA',
              ),
              3 => 
              array (
                'key' => 'Aghem',
                'value' => 'agq',
              ),
              4 => 
              array (
                'key' => 'Aghem (Cameroon)',
                'value' => 'agq_CM',
              ),
              5 => 
              array (
                'key' => 'Akan',
                'value' => 'ak',
              ),
              6 => 
              array (
                'key' => 'Akan (Ghana)',
                'value' => 'ak_GH',
              ),
              7 => 
              array (
                'key' => 'Albanian',
                'value' => 'sq',
              ),
              8 => 
              array (
                'key' => 'Albanian (Albania)',
                'value' => 'sq_AL',
              ),
              9 => 
              array (
                'key' => 'Albanian (Kosovo)',
                'value' => 'sq_XK',
              ),
              10 => 
              array (
                'key' => 'Albanian (Macedonia)',
                'value' => 'sq_MK',
              ),
              11 => 
              array (
                'key' => 'Amharic',
                'value' => 'am',
              ),
              12 => 
              array (
                'key' => 'Amharic (Ethiopia)',
                'value' => 'am_ET',
              ),
              13 => 
              array (
                'key' => 'Arabic',
                'value' => 'ar',
              ),
              14 => 
              array (
                'key' => 'Arabic (Algeria)',
                'value' => 'ar_DZ',
              ),
              15 => 
              array (
                'key' => 'Arabic (Bahrain)',
                'value' => 'ar_BH',
              ),
              16 => 
              array (
                'key' => 'Arabic (Chad)',
                'value' => 'ar_TD',
              ),
              17 => 
              array (
                'key' => 'Arabic (Comoros)',
                'value' => 'ar_KM',
              ),
              18 => 
              array (
                'key' => 'Arabic (Djibouti)',
                'value' => 'ar_DJ',
              ),
              19 => 
              array (
                'key' => 'Arabic (Egypt)',
                'value' => 'ar_EG',
              ),
              20 => 
              array (
                'key' => 'Arabic (Eritrea)',
                'value' => 'ar_ER',
              ),
              21 => 
              array (
                'key' => 'Arabic (Iraq)',
                'value' => 'ar_IQ',
              ),
              22 => 
              array (
                'key' => 'Arabic (Israel)',
                'value' => 'ar_IL',
              ),
              23 => 
              array (
                'key' => 'Arabic (Jordan)',
                'value' => 'ar_JO',
              ),
              24 => 
              array (
                'key' => 'Arabic (Kuwait)',
                'value' => 'ar_KW',
              ),
              25 => 
              array (
                'key' => 'Arabic (Lebanon)',
                'value' => 'ar_LB',
              ),
              26 => 
              array (
                'key' => 'Arabic (Libya)',
                'value' => 'ar_LY',
              ),
              27 => 
              array (
                'key' => 'Arabic (Mauritania)',
                'value' => 'ar_MR',
              ),
              28 => 
              array (
                'key' => 'Arabic (Morocco)',
                'value' => 'ar_MA',
              ),
              29 => 
              array (
                'key' => 'Arabic (Oman)',
                'value' => 'ar_OM',
              ),
              30 => 
              array (
                'key' => 'Arabic (Palestinian Territories)',
                'value' => 'ar_PS',
              ),
              31 => 
              array (
                'key' => 'Arabic (Qatar)',
                'value' => 'ar_QA',
              ),
              32 => 
              array (
                'key' => 'Arabic (Saudi Arabia)',
                'value' => 'ar_SA',
              ),
              33 => 
              array (
                'key' => 'Arabic (Somalia)',
                'value' => 'ar_SO',
              ),
              34 => 
              array (
                'key' => 'Arabic (South Sudan)',
                'value' => 'ar_SS',
              ),
              35 => 
              array (
                'key' => 'Arabic (Sudan)',
                'value' => 'ar_SD',
              ),
              36 => 
              array (
                'key' => 'Arabic (Syria)',
                'value' => 'ar_SY',
              ),
              37 => 
              array (
                'key' => 'Arabic (Tunisia)',
                'value' => 'ar_TN',
              ),
              38 => 
              array (
                'key' => 'Arabic (United Arab Emirates)',
                'value' => 'ar_AE',
              ),
              39 => 
              array (
                'key' => 'Arabic (Western Sahara)',
                'value' => 'ar_EH',
              ),
              40 => 
              array (
                'key' => 'Arabic (World)',
                'value' => 'ar_001',
              ),
              41 => 
              array (
                'key' => 'Arabic (Yemen)',
                'value' => 'ar_YE',
              ),
              42 => 
              array (
                'key' => 'Armenian',
                'value' => 'hy',
              ),
              43 => 
              array (
                'key' => 'Armenian (Armenia)',
                'value' => 'hy_AM',
              ),
              44 => 
              array (
                'key' => 'Assamese',
                'value' => 'as',
              ),
              45 => 
              array (
                'key' => 'Assamese (India)',
                'value' => 'as_IN',
              ),
              46 => 
              array (
                'key' => 'Asu',
                'value' => 'asa',
              ),
              47 => 
              array (
                'key' => 'Asu (Tanzania)',
                'value' => 'asa_TZ',
              ),
              48 => 
              array (
                'key' => 'Azerbaijani',
                'value' => 'az_Cyrl',
              ),
              49 => 
              array (
                'key' => 'Azerbaijani',
                'value' => 'az',
              ),
              50 => 
              array (
                'key' => 'Azerbaijani',
                'value' => 'az_Latn',
              ),
              51 => 
              array (
                'key' => 'Azerbaijani (Azerbaijan)',
                'value' => 'az_Latn_AZ',
              ),
              52 => 
              array (
                'key' => 'Azerbaijani (Azerbaijan)',
                'value' => 'az_Cyrl_AZ',
              ),
              53 => 
              array (
                'key' => 'Bafia',
                'value' => 'ksf',
              ),
              54 => 
              array (
                'key' => 'Bafia (Cameroon)',
                'value' => 'ksf_CM',
              ),
              55 => 
              array (
                'key' => 'Bambara',
                'value' => 'bm',
              ),
              56 => 
              array (
                'key' => 'Bambara (Mali)',
                'value' => 'bm_ML',
              ),
              57 => 
              array (
                'key' => 'Basaa',
                'value' => 'bas',
              ),
              58 => 
              array (
                'key' => 'Basaa (Cameroon)',
                'value' => 'bas_CM',
              ),
              59 => 
              array (
                'key' => 'Basque',
                'value' => 'eu',
              ),
              60 => 
              array (
                'key' => 'Basque (Spain)',
                'value' => 'eu_ES',
              ),
              61 => 
              array (
                'key' => 'Belarusian',
                'value' => 'be',
              ),
              62 => 
              array (
                'key' => 'Belarusian (Belarus)',
                'value' => 'be_BY',
              ),
              63 => 
              array (
                'key' => 'Bemba',
                'value' => 'bem',
              ),
              64 => 
              array (
                'key' => 'Bemba (Zambia)',
                'value' => 'bem_ZM',
              ),
              65 => 
              array (
                'key' => 'Bena',
                'value' => 'bez',
              ),
              66 => 
              array (
                'key' => 'Bena (Tanzania)',
                'value' => 'bez_TZ',
              ),
              67 => 
              array (
                'key' => 'Bengali',
                'value' => 'bn',
              ),
              68 => 
              array (
                'key' => 'Bengali (Bangladesh)',
                'value' => 'bn_BD',
              ),
              69 => 
              array (
                'key' => 'Bengali (India)',
                'value' => 'bn_IN',
              ),
              70 => 
              array (
                'key' => 'Bodo',
                'value' => 'brx',
              ),
              71 => 
              array (
                'key' => 'Bodo (India)',
                'value' => 'brx_IN',
              ),
              72 => 
              array (
                'key' => 'Bosnian',
                'value' => 'bs',
              ),
              73 => 
              array (
                'key' => 'Bosnian',
                'value' => 'bs_Cyrl',
              ),
              74 => 
              array (
                'key' => 'Bosnian',
                'value' => 'bs_Latn',
              ),
              75 => 
              array (
                'key' => 'Bosnian (Bosnia and Herzegovina)',
                'value' => 'bs_Latn_BA',
              ),
              76 => 
              array (
                'key' => 'Bosnian (Bosnia and Herzegovina)',
                'value' => 'bs_Cyrl_BA',
              ),
              77 => 
              array (
                'key' => 'Breton',
                'value' => 'br',
              ),
              78 => 
              array (
                'key' => 'Breton (France)',
                'value' => 'br_FR',
              ),
              79 => 
              array (
                'key' => 'Bulgarian',
                'value' => 'bg',
              ),
              80 => 
              array (
                'key' => 'Bulgarian (Bulgaria)',
                'value' => 'bg_BG',
              ),
              81 => 
              array (
                'key' => 'Burmese',
                'value' => 'my',
              ),
              82 => 
              array (
                'key' => 'Burmese (Myanmar (Burma))',
                'value' => 'my_MM',
              ),
              83 => 
              array (
                'key' => 'Catalan',
                'value' => 'ca',
              ),
              84 => 
              array (
                'key' => 'Catalan (Andorra)',
                'value' => 'ca_AD',
              ),
              85 => 
              array (
                'key' => 'Catalan (France)',
                'value' => 'ca_FR',
              ),
              86 => 
              array (
                'key' => 'Catalan (Italy)',
                'value' => 'ca_IT',
              ),
              87 => 
              array (
                'key' => 'Catalan (Spain)',
                'value' => 'ca_ES',
              ),
              88 => 
              array (
                'key' => 'Central Atlas Tamazight',
                'value' => 'tzm_Latn',
              ),
              89 => 
              array (
                'key' => 'Central Atlas Tamazight',
                'value' => 'tzm',
              ),
              90 => 
              array (
                'key' => 'Central Atlas Tamazight (Morocco)',
                'value' => 'tzm_Latn_MA',
              ),
              91 => 
              array (
                'key' => 'Cherokee',
                'value' => 'chr',
              ),
              92 => 
              array (
                'key' => 'Cherokee (United States)',
                'value' => 'chr_US',
              ),
              93 => 
              array (
                'key' => 'Chiga',
                'value' => 'cgg',
              ),
              94 => 
              array (
                'key' => 'Chiga (Uganda)',
                'value' => 'cgg_UG',
              ),
              95 => 
              array (
                'key' => 'Chinese',
                'value' => 'zh_Hant',
              ),
              96 => 
              array (
                'key' => 'Chinese',
                'value' => 'zh',
              ),
              97 => 
              array (
                'key' => 'Chinese',
                'value' => 'zh_Hans',
              ),
              98 => 
              array (
                'key' => 'Chinese (China)',
                'value' => 'zh_Hans_CN',
              ),
              99 => 
              array (
                'key' => 'Chinese (Hong Kong SAR China)',
                'value' => 'zh_Hant_HK',
              ),
              100 => 
              array (
                'key' => 'Chinese (Hong Kong SAR China)',
                'value' => 'zh_Hans_HK',
              ),
              101 => 
              array (
                'key' => 'Chinese (Macau SAR China)',
                'value' => 'zh_Hans_MO',
              ),
              102 => 
              array (
                'key' => 'Chinese (Macau SAR China)',
                'value' => 'zh_Hant_MO',
              ),
              103 => 
              array (
                'key' => 'Chinese (Singapore)',
                'value' => 'zh_Hans_SG',
              ),
              104 => 
              array (
                'key' => 'Chinese (Taiwan)',
                'value' => 'zh_Hant_TW',
              ),
              105 => 
              array (
                'key' => 'Congo Swahili',
                'value' => 'swc',
              ),
              106 => 
              array (
                'key' => 'Congo Swahili (Congo - Kinshasa)',
                'value' => 'swc_CD',
              ),
              107 => 
              array (
                'key' => 'Cornish',
                'value' => 'kw',
              ),
              108 => 
              array (
                'key' => 'Cornish (United Kingdom)',
                'value' => 'kw_GB',
              ),
              109 => 
              array (
                'key' => 'Croatian',
                'value' => 'hr',
              ),
              110 => 
              array (
                'key' => 'Croatian (Bosnia and Herzegovina)',
                'value' => 'hr_BA',
              ),
              111 => 
              array (
                'key' => 'Croatian (Croatia)',
                'value' => 'hr_HR',
              ),
              112 => 
              array (
                'key' => 'Czech',
                'value' => 'cs',
              ),
              113 => 
              array (
                'key' => 'Czech (Czech Republic)',
                'value' => 'cs_CZ',
              ),
              114 => 
              array (
                'key' => 'Danish',
                'value' => 'da',
              ),
              115 => 
              array (
                'key' => 'Danish (Denmark)',
                'value' => 'da_DK',
              ),
              116 => 
              array (
                'key' => 'Danish (Greenland)',
                'value' => 'da_GL',
              ),
              117 => 
              array (
                'key' => 'Duala',
                'value' => 'dua',
              ),
              118 => 
              array (
                'key' => 'Duala (Cameroon)',
                'value' => 'dua_CM',
              ),
              119 => 
              array (
                'key' => 'Dutch',
                'value' => 'nl',
              ),
              120 => 
              array (
                'key' => 'Dutch (Aruba)',
                'value' => 'nl_AW',
              ),
              121 => 
              array (
                'key' => 'Dutch (Belgium)',
                'value' => 'nl_BE',
              ),
              122 => 
              array (
                'key' => 'Dutch (Caribbean Netherlands)',
                'value' => 'nl_BQ',
              ),
              123 => 
              array (
                'key' => 'Dutch (Curaçao)',
                'value' => 'nl_CW',
              ),
              124 => 
              array (
                'key' => 'Dutch (Netherlands)',
                'value' => 'nl_NL',
              ),
              125 => 
              array (
                'key' => 'Dutch (Sint Maarten)',
                'value' => 'nl_SX',
              ),
              126 => 
              array (
                'key' => 'Dutch (Suriname)',
                'value' => 'nl_SR',
              ),
              127 => 
              array (
                'key' => 'Dzongkha',
                'value' => 'dz',
              ),
              128 => 
              array (
                'key' => 'Dzongkha (Bhutan)',
                'value' => 'dz_BT',
              ),
              129 => 
              array (
                'key' => 'Embu',
                'value' => 'ebu',
              ),
              130 => 
              array (
                'key' => 'Embu (Kenya)',
                'value' => 'ebu_KE',
              ),
              131 => 
              array (
                'key' => 'English',
                'value' => 'en',
              ),
              132 => 
              array (
                'key' => 'English (American Samoa)',
                'value' => 'en_AS',
              ),
              133 => 
              array (
                'key' => 'English (Anguilla)',
                'value' => 'en_AI',
              ),
              134 => 
              array (
                'key' => 'English (Antigua and Barbuda)',
                'value' => 'en_AG',
              ),
              135 => 
              array (
                'key' => 'English (Australia)',
                'value' => 'en_AU',
              ),
              136 => 
              array (
                'key' => 'English (Bahamas)',
                'value' => 'en_BS',
              ),
              137 => 
              array (
                'key' => 'English (Barbados)',
                'value' => 'en_BB',
              ),
              138 => 
              array (
                'key' => 'English (Belgium)',
                'value' => 'en_BE',
              ),
              139 => 
              array (
                'key' => 'English (Belize)',
                'value' => 'en_BZ',
              ),
              140 => 
              array (
                'key' => 'English (Bermuda)',
                'value' => 'en_BM',
              ),
              141 => 
              array (
                'key' => 'English (Botswana)',
                'value' => 'en_BW',
              ),
              142 => 
              array (
                'key' => 'English (British Indian Ocean Territory)',
                'value' => 'en_IO',
              ),
              143 => 
              array (
                'key' => 'English (British Virgin Islands)',
                'value' => 'en_VG',
              ),
              144 => 
              array (
                'key' => 'English (Cameroon)',
                'value' => 'en_CM',
              ),
              145 => 
              array (
                'key' => 'English (Canada)',
                'value' => 'en_CA',
              ),
              146 => 
              array (
                'key' => 'English (Cayman Islands)',
                'value' => 'en_KY',
              ),
              147 => 
              array (
                'key' => 'English (Christmas Island)',
                'value' => 'en_CX',
              ),
              148 => 
              array (
                'key' => 'English (Cocos (Keeling) Islands)',
                'value' => 'en_CC',
              ),
              149 => 
              array (
                'key' => 'English (Cook Islands)',
                'value' => 'en_CK',
              ),
              150 => 
              array (
                'key' => 'English (Diego Garcia)',
                'value' => 'en_DG',
              ),
              151 => 
              array (
                'key' => 'English (Dominica)',
                'value' => 'en_DM',
              ),
              152 => 
              array (
                'key' => 'English (Eritrea)',
                'value' => 'en_ER',
              ),
              153 => 
              array (
                'key' => 'English (Europe)',
                'value' => 'en_150',
              ),
              154 => 
              array (
                'key' => 'English (Falkland Islands)',
                'value' => 'en_FK',
              ),
              155 => 
              array (
                'key' => 'English (Fiji)',
                'value' => 'en_FJ',
              ),
              156 => 
              array (
                'key' => 'English (Gambia)',
                'value' => 'en_GM',
              ),
              157 => 
              array (
                'key' => 'English (Ghana)',
                'value' => 'en_GH',
              ),
              158 => 
              array (
                'key' => 'English (Gibraltar)',
                'value' => 'en_GI',
              ),
              159 => 
              array (
                'key' => 'English (Grenada)',
                'value' => 'en_GD',
              ),
              160 => 
              array (
                'key' => 'English (Guam)',
                'value' => 'en_GU',
              ),
              161 => 
              array (
                'key' => 'English (Guernsey)',
                'value' => 'en_GG',
              ),
              162 => 
              array (
                'key' => 'English (Guyana)',
                'value' => 'en_GY',
              ),
              163 => 
              array (
                'key' => 'English (Hong Kong SAR China)',
                'value' => 'en_HK',
              ),
              164 => 
              array (
                'key' => 'English (India)',
                'value' => 'en_IN',
              ),
              165 => 
              array (
                'key' => 'English (Ireland)',
                'value' => 'en_IE',
              ),
              166 => 
              array (
                'key' => 'English (Isle of Man)',
                'value' => 'en_IM',
              ),
              167 => 
              array (
                'key' => 'English (Jamaica)',
                'value' => 'en_JM',
              ),
              168 => 
              array (
                'key' => 'English (Jersey)',
                'value' => 'en_JE',
              ),
              169 => 
              array (
                'key' => 'English (Kenya)',
                'value' => 'en_KE',
              ),
              170 => 
              array (
                'key' => 'English (Kiribati)',
                'value' => 'en_KI',
              ),
              171 => 
              array (
                'key' => 'English (Lesotho)',
                'value' => 'en_LS',
              ),
              172 => 
              array (
                'key' => 'English (Liberia)',
                'value' => 'en_LR',
              ),
              173 => 
              array (
                'key' => 'English (Macau SAR China)',
                'value' => 'en_MO',
              ),
              174 => 
              array (
                'key' => 'English (Madagascar)',
                'value' => 'en_MG',
              ),
              175 => 
              array (
                'key' => 'English (Malawi)',
                'value' => 'en_MW',
              ),
              176 => 
              array (
                'key' => 'English (Malta)',
                'value' => 'en_MT',
              ),
              177 => 
              array (
                'key' => 'English (Marshall Islands)',
                'value' => 'en_MH',
              ),
              178 => 
              array (
                'key' => 'English (Mauritius)',
                'value' => 'en_MU',
              ),
              179 => 
              array (
                'key' => 'English (Micronesia)',
                'value' => 'en_FM',
              ),
              180 => 
              array (
                'key' => 'English (Montserrat)',
                'value' => 'en_MS',
              ),
              181 => 
              array (
                'key' => 'English (Namibia)',
                'value' => 'en_NA',
              ),
              182 => 
              array (
                'key' => 'English (Nauru)',
                'value' => 'en_NR',
              ),
              183 => 
              array (
                'key' => 'English (New Zealand)',
                'value' => 'en_NZ',
              ),
              184 => 
              array (
                'key' => 'English (Nigeria)',
                'value' => 'en_NG',
              ),
              185 => 
              array (
                'key' => 'English (Niue)',
                'value' => 'en_NU',
              ),
              186 => 
              array (
                'key' => 'English (Norfolk Island)',
                'value' => 'en_NF',
              ),
              187 => 
              array (
                'key' => 'English (Northern Mariana Islands)',
                'value' => 'en_MP',
              ),
              188 => 
              array (
                'key' => 'English (Pakistan)',
                'value' => 'en_PK',
              ),
              189 => 
              array (
                'key' => 'English (Palau)',
                'value' => 'en_PW',
              ),
              190 => 
              array (
                'key' => 'English (Papua New Guinea)',
                'value' => 'en_PG',
              ),
              191 => 
              array (
                'key' => 'English (Philippines)',
                'value' => 'en_PH',
              ),
              192 => 
              array (
                'key' => 'English (Pitcairn Islands)',
                'value' => 'en_PN',
              ),
              193 => 
              array (
                'key' => 'English (Puerto Rico)',
                'value' => 'en_PR',
              ),
              194 => 
              array (
                'key' => 'English (Rwanda)',
                'value' => 'en_RW',
              ),
              195 => 
              array (
                'key' => 'English (Saint Helena)',
                'value' => 'en_SH',
              ),
              196 => 
              array (
                'key' => 'English (Saint Kitts and Nevis)',
                'value' => 'en_KN',
              ),
              197 => 
              array (
                'key' => 'English (Saint Lucia)',
                'value' => 'en_LC',
              ),
              198 => 
              array (
                'key' => 'English (Samoa)',
                'value' => 'en_WS',
              ),
              199 => 
              array (
                'key' => 'English (Seychelles)',
                'value' => 'en_SC',
              ),
              200 => 
              array (
                'key' => 'English (Sierra Leone)',
                'value' => 'en_SL',
              ),
              201 => 
              array (
                'key' => 'English (Singapore)',
                'value' => 'en_SG',
              ),
              202 => 
              array (
                'key' => 'English (Sint Maarten)',
                'value' => 'en_SX',
              ),
              203 => 
              array (
                'key' => 'English (Solomon Islands)',
                'value' => 'en_SB',
              ),
              204 => 
              array (
                'key' => 'English (South Africa)',
                'value' => 'en_ZA',
              ),
              205 => 
              array (
                'key' => 'English (South Sudan)',
                'value' => 'en_SS',
              ),
              206 => 
              array (
                'key' => 'English (St. Vincent & Grenadines)',
                'value' => 'en_VC',
              ),
              207 => 
              array (
                'key' => 'English (Sudan)',
                'value' => 'en_SD',
              ),
              208 => 
              array (
                'key' => 'English (Swaziland)',
                'value' => 'en_SZ',
              ),
              209 => 
              array (
                'key' => 'English (Tanzania)',
                'value' => 'en_TZ',
              ),
              210 => 
              array (
                'key' => 'English (Tokelau)',
                'value' => 'en_TK',
              ),
              211 => 
              array (
                'key' => 'English (Tonga)',
                'value' => 'en_TO',
              ),
              212 => 
              array (
                'key' => 'English (Trinidad and Tobago)',
                'value' => 'en_TT',
              ),
              213 => 
              array (
                'key' => 'English (Turks and Caicos Islands)',
                'value' => 'en_TC',
              ),
              214 => 
              array (
                'key' => 'English (Tuvalu)',
                'value' => 'en_TV',
              ),
              215 => 
              array (
                'key' => 'English (U.S. Outlying Islands)',
                'value' => 'en_UM',
              ),
              216 => 
              array (
                'key' => 'English (U.S. Virgin Islands)',
                'value' => 'en_VI',
              ),
              217 => 
              array (
                'key' => 'English (Uganda)',
                'value' => 'en_UG',
              ),
              218 => 
              array (
                'key' => 'English (United Kingdom)',
                'value' => 'en_GB',
              ),
              219 => 
              array (
                'key' => 'English (United States)',
                'value' => 'en_US_POSIX',
              ),
              220 => 
              array (
                'key' => 'English (United States)',
                'value' => 'en_US',
              ),
              221 => 
              array (
                'key' => 'English (Vanuatu)',
                'value' => 'en_VU',
              ),
              222 => 
              array (
                'key' => 'English (World)',
                'value' => 'en_001',
              ),
              223 => 
              array (
                'key' => 'English (Zambia)',
                'value' => 'en_ZM',
              ),
              224 => 
              array (
                'key' => 'English (Zimbabwe)',
                'value' => 'en_ZW',
              ),
              225 => 
              array (
                'key' => 'Esperanto',
                'value' => 'eo',
              ),
              226 => 
              array (
                'key' => 'Estonian',
                'value' => 'et',
              ),
              227 => 
              array (
                'key' => 'Estonian (Estonia)',
                'value' => 'et_EE',
              ),
              228 => 
              array (
                'key' => 'Ewe',
                'value' => 'ee',
              ),
              229 => 
              array (
                'key' => 'Ewe (Ghana)',
                'value' => 'ee_GH',
              ),
              230 => 
              array (
                'key' => 'Ewe (Togo)',
                'value' => 'ee_TG',
              ),
              231 => 
              array (
                'key' => 'Ewondo',
                'value' => 'ewo',
              ),
              232 => 
              array (
                'key' => 'Ewondo (Cameroon)',
                'value' => 'ewo_CM',
              ),
              233 => 
              array (
                'key' => 'Faroese',
                'value' => 'fo',
              ),
              234 => 
              array (
                'key' => 'Faroese (Faroe Islands)',
                'value' => 'fo_FO',
              ),
              235 => 
              array (
                'key' => 'Filipino',
                'value' => 'fil',
              ),
              236 => 
              array (
                'key' => 'Filipino (Philippines)',
                'value' => 'fil_PH',
              ),
              237 => 
              array (
                'key' => 'Finnish',
                'value' => 'fi',
              ),
              238 => 
              array (
                'key' => 'Finnish (Finland)',
                'value' => 'fi_FI',
              ),
              239 => 
              array (
                'key' => 'French',
                'value' => 'fr',
              ),
              240 => 
              array (
                'key' => 'French (Algeria)',
                'value' => 'fr_DZ',
              ),
              241 => 
              array (
                'key' => 'French (Belgium)',
                'value' => 'fr_BE',
              ),
              242 => 
              array (
                'key' => 'French (Benin)',
                'value' => 'fr_BJ',
              ),
              243 => 
              array (
                'key' => 'French (Burkina Faso)',
                'value' => 'fr_BF',
              ),
              244 => 
              array (
                'key' => 'French (Burundi)',
                'value' => 'fr_BI',
              ),
              245 => 
              array (
                'key' => 'French (Cameroon)',
                'value' => 'fr_CM',
              ),
              246 => 
              array (
                'key' => 'French (Canada)',
                'value' => 'fr_CA',
              ),
              247 => 
              array (
                'key' => 'French (Central African Republic)',
                'value' => 'fr_CF',
              ),
              248 => 
              array (
                'key' => 'French (Chad)',
                'value' => 'fr_TD',
              ),
              249 => 
              array (
                'key' => 'French (Comoros)',
                'value' => 'fr_KM',
              ),
              250 => 
              array (
                'key' => 'French (Congo - Brazzaville)',
                'value' => 'fr_CG',
              ),
              251 => 
              array (
                'key' => 'French (Congo - Kinshasa)',
                'value' => 'fr_CD',
              ),
              252 => 
              array (
                'key' => 'French (Côte d’Ivoire)',
                'value' => 'fr_CI',
              ),
              253 => 
              array (
                'key' => 'French (Djibouti)',
                'value' => 'fr_DJ',
              ),
              254 => 
              array (
                'key' => 'French (Equatorial Guinea)',
                'value' => 'fr_GQ',
              ),
              255 => 
              array (
                'key' => 'French (France)',
                'value' => 'fr_FR',
              ),
              256 => 
              array (
                'key' => 'French (French Guiana)',
                'value' => 'fr_GF',
              ),
              257 => 
              array (
                'key' => 'French (French Polynesia)',
                'value' => 'fr_PF',
              ),
              258 => 
              array (
                'key' => 'French (Gabon)',
                'value' => 'fr_GA',
              ),
              259 => 
              array (
                'key' => 'French (Guadeloupe)',
                'value' => 'fr_GP',
              ),
              260 => 
              array (
                'key' => 'French (Guinea)',
                'value' => 'fr_GN',
              ),
              261 => 
              array (
                'key' => 'French (Haiti)',
                'value' => 'fr_HT',
              ),
              262 => 
              array (
                'key' => 'French (Luxembourg)',
                'value' => 'fr_LU',
              ),
              263 => 
              array (
                'key' => 'French (Madagascar)',
                'value' => 'fr_MG',
              ),
              264 => 
              array (
                'key' => 'French (Mali)',
                'value' => 'fr_ML',
              ),
              265 => 
              array (
                'key' => 'French (Martinique)',
                'value' => 'fr_MQ',
              ),
              266 => 
              array (
                'key' => 'French (Mauritania)',
                'value' => 'fr_MR',
              ),
              267 => 
              array (
                'key' => 'French (Mauritius)',
                'value' => 'fr_MU',
              ),
              268 => 
              array (
                'key' => 'French (Mayotte)',
                'value' => 'fr_YT',
              ),
              269 => 
              array (
                'key' => 'French (Monaco)',
                'value' => 'fr_MC',
              ),
              270 => 
              array (
                'key' => 'French (Morocco)',
                'value' => 'fr_MA',
              ),
              271 => 
              array (
                'key' => 'French (New Caledonia)',
                'value' => 'fr_NC',
              ),
              272 => 
              array (
                'key' => 'French (Niger)',
                'value' => 'fr_NE',
              ),
              273 => 
              array (
                'key' => 'French (Rwanda)',
                'value' => 'fr_RW',
              ),
              274 => 
              array (
                'key' => 'French (Réunion)',
                'value' => 'fr_RE',
              ),
              275 => 
              array (
                'key' => 'French (Saint Barthélemy)',
                'value' => 'fr_BL',
              ),
              276 => 
              array (
                'key' => 'French (Saint Martin)',
                'value' => 'fr_MF',
              ),
              277 => 
              array (
                'key' => 'French (Saint Pierre and Miquelon)',
                'value' => 'fr_PM',
              ),
              278 => 
              array (
                'key' => 'French (Senegal)',
                'value' => 'fr_SN',
              ),
              279 => 
              array (
                'key' => 'French (Seychelles)',
                'value' => 'fr_SC',
              ),
              280 => 
              array (
                'key' => 'French (Switzerland)',
                'value' => 'fr_CH',
              ),
              281 => 
              array (
                'key' => 'French (Syria)',
                'value' => 'fr_SY',
              ),
              282 => 
              array (
                'key' => 'French (Togo)',
                'value' => 'fr_TG',
              ),
              283 => 
              array (
                'key' => 'French (Tunisia)',
                'value' => 'fr_TN',
              ),
              284 => 
              array (
                'key' => 'French (Vanuatu)',
                'value' => 'fr_VU',
              ),
              285 => 
              array (
                'key' => 'French (Wallis and Futuna)',
                'value' => 'fr_WF',
              ),
              286 => 
              array (
                'key' => 'Fulah',
                'value' => 'ff',
              ),
              287 => 
              array (
                'key' => 'Fulah (Senegal)',
                'value' => 'ff_SN',
              ),
              288 => 
              array (
                'key' => 'Galician',
                'value' => 'gl',
              ),
              289 => 
              array (
                'key' => 'Galician (Spain)',
                'value' => 'gl_ES',
              ),
              290 => 
              array (
                'key' => 'Ganda',
                'value' => 'lg',
              ),
              291 => 
              array (
                'key' => 'Ganda (Uganda)',
                'value' => 'lg_UG',
              ),
              292 => 
              array (
                'key' => 'Georgian',
                'value' => 'ka',
              ),
              293 => 
              array (
                'key' => 'Georgian (Georgia)',
                'value' => 'ka_GE',
              ),
              294 => 
              array (
                'key' => 'German',
                'value' => 'de',
              ),
              295 => 
              array (
                'key' => 'German (Austria)',
                'value' => 'de_AT',
              ),
              296 => 
              array (
                'key' => 'German (Belgium)',
                'value' => 'de_BE',
              ),
              297 => 
              array (
                'key' => 'German (Germany)',
                'value' => 'de_DE',
              ),
              298 => 
              array (
                'key' => 'German (Liechtenstein)',
                'value' => 'de_LI',
              ),
              299 => 
              array (
                'key' => 'German (Luxembourg)',
                'value' => 'de_LU',
              ),
              300 => 
              array (
                'key' => 'German (Switzerland)',
                'value' => 'de_CH',
              ),
              301 => 
              array (
                'key' => 'Greek',
                'value' => 'el',
              ),
              302 => 
              array (
                'key' => 'Greek (Cyprus)',
                'value' => 'el_CY',
              ),
              303 => 
              array (
                'key' => 'Greek (Greece)',
                'value' => 'el_GR',
              ),
              304 => 
              array (
                'key' => 'Gujarati',
                'value' => 'gu',
              ),
              305 => 
              array (
                'key' => 'Gujarati (India)',
                'value' => 'gu_IN',
              ),
              306 => 
              array (
                'key' => 'Gusii',
                'value' => 'guz',
              ),
              307 => 
              array (
                'key' => 'Gusii (Kenya)',
                'value' => 'guz_KE',
              ),
              308 => 
              array (
                'key' => 'Hausa',
                'value' => 'ha_Latn',
              ),
              309 => 
              array (
                'key' => 'Hausa',
                'value' => 'ha',
              ),
              310 => 
              array (
                'key' => 'Hausa (Ghana)',
                'value' => 'ha_Latn_GH',
              ),
              311 => 
              array (
                'key' => 'Hausa (Niger)',
                'value' => 'ha_Latn_NE',
              ),
              312 => 
              array (
                'key' => 'Hausa (Nigeria)',
                'value' => 'ha_Latn_NG',
              ),
              313 => 
              array (
                'key' => 'Hawaiian',
                'value' => 'haw',
              ),
              314 => 
              array (
                'key' => 'Hawaiian (United States)',
                'value' => 'haw_US',
              ),
              315 => 
              array (
                'key' => 'Hebrew',
                'value' => 'he',
              ),
              316 => 
              array (
                'key' => 'Hebrew (Israel)',
                'value' => 'he_IL',
              ),
              317 => 
              array (
                'key' => 'Hindi',
                'value' => 'hi',
              ),
              318 => 
              array (
                'key' => 'Hindi (India)',
                'value' => 'hi_IN',
              ),
              319 => 
              array (
                'key' => 'Hungarian',
                'value' => 'hu',
              ),
              320 => 
              array (
                'key' => 'Hungarian (Hungary)',
                'value' => 'hu_HU',
              ),
              321 => 
              array (
                'key' => 'Icelandic',
                'value' => 'is',
              ),
              322 => 
              array (
                'key' => 'Icelandic (Iceland)',
                'value' => 'is_IS',
              ),
              323 => 
              array (
                'key' => 'Igbo',
                'value' => 'ig',
              ),
              324 => 
              array (
                'key' => 'Igbo (Nigeria)',
                'value' => 'ig_NG',
              ),
              325 => 
              array (
                'key' => 'Indonesian',
                'value' => 'id',
              ),
              326 => 
              array (
                'key' => 'Indonesian (Indonesia)',
                'value' => 'id_ID',
              ),
              327 => 
              array (
                'key' => 'Irish',
                'value' => 'ga',
              ),
              328 => 
              array (
                'key' => 'Irish (Ireland)',
                'value' => 'ga_IE',
              ),
              329 => 
              array (
                'key' => 'Italian',
                'value' => 'it',
              ),
              330 => 
              array (
                'key' => 'Italian (Italy)',
                'value' => 'it_IT',
              ),
              331 => 
              array (
                'key' => 'Italian (San Marino)',
                'value' => 'it_SM',
              ),
              332 => 
              array (
                'key' => 'Italian (Switzerland)',
                'value' => 'it_CH',
              ),
              333 => 
              array (
                'key' => 'Japanese',
                'value' => 'ja',
              ),
              334 => 
              array (
                'key' => 'Japanese (Japan)',
                'value' => 'ja_JP',
              ),
              335 => 
              array (
                'key' => 'Jola-Fonyi',
                'value' => 'dyo',
              ),
              336 => 
              array (
                'key' => 'Jola-Fonyi (Senegal)',
                'value' => 'dyo_SN',
              ),
              337 => 
              array (
                'key' => 'Kabuverdianu',
                'value' => 'kea',
              ),
              338 => 
              array (
                'key' => 'Kabuverdianu (Cape Verde)',
                'value' => 'kea_CV',
              ),
              339 => 
              array (
                'key' => 'Kabyle',
                'value' => 'kab',
              ),
              340 => 
              array (
                'key' => 'Kabyle (Algeria)',
                'value' => 'kab_DZ',
              ),
              341 => 
              array (
                'key' => 'Kako',
                'value' => 'kkj',
              ),
              342 => 
              array (
                'key' => 'Kako (Cameroon)',
                'value' => 'kkj_CM',
              ),
              343 => 
              array (
                'key' => 'Kalaallisut',
                'value' => 'kl',
              ),
              344 => 
              array (
                'key' => 'Kalaallisut (Greenland)',
                'value' => 'kl_GL',
              ),
              345 => 
              array (
                'key' => 'Kalenjin',
                'value' => 'kln',
              ),
              346 => 
              array (
                'key' => 'Kalenjin (Kenya)',
                'value' => 'kln_KE',
              ),
              347 => 
              array (
                'key' => 'Kamba',
                'value' => 'kam',
              ),
              348 => 
              array (
                'key' => 'Kamba (Kenya)',
                'value' => 'kam_KE',
              ),
              349 => 
              array (
                'key' => 'Kannada',
                'value' => 'kn',
              ),
              350 => 
              array (
                'key' => 'Kannada (India)',
                'value' => 'kn_IN',
              ),
              351 => 
              array (
                'key' => 'Kashmiri',
                'value' => 'ks_Arab',
              ),
              352 => 
              array (
                'key' => 'Kashmiri',
                'value' => 'ks',
              ),
              353 => 
              array (
                'key' => 'Kashmiri (India)',
                'value' => 'ks_Arab_IN',
              ),
              354 => 
              array (
                'key' => 'Kazakh',
                'value' => 'kk',
              ),
              355 => 
              array (
                'key' => 'Kazakh',
                'value' => 'kk_Cyrl',
              ),
              356 => 
              array (
                'key' => 'Kazakh (Kazakhstan)',
                'value' => 'kk_Cyrl_KZ',
              ),
              357 => 
              array (
                'key' => 'Khmer',
                'value' => 'km',
              ),
              358 => 
              array (
                'key' => 'Khmer (Cambodia)',
                'value' => 'km_KH',
              ),
              359 => 
              array (
                'key' => 'Kikuyu',
                'value' => 'ki',
              ),
              360 => 
              array (
                'key' => 'Kikuyu (Kenya)',
                'value' => 'ki_KE',
              ),
              361 => 
              array (
                'key' => 'Kinyarwanda',
                'value' => 'rw',
              ),
              362 => 
              array (
                'key' => 'Kinyarwanda (Rwanda)',
                'value' => 'rw_RW',
              ),
              363 => 
              array (
                'key' => 'Konkani',
                'value' => 'kok',
              ),
              364 => 
              array (
                'key' => 'Konkani (India)',
                'value' => 'kok_IN',
              ),
              365 => 
              array (
                'key' => 'Korean',
                'value' => 'ko',
              ),
              366 => 
              array (
                'key' => 'Korean (North Korea)',
                'value' => 'ko_KP',
              ),
              367 => 
              array (
                'key' => 'Korean (South Korea)',
                'value' => 'ko_KR',
              ),
              368 => 
              array (
                'key' => 'Koyra Chiini',
                'value' => 'khq',
              ),
              369 => 
              array (
                'key' => 'Koyra Chiini (Mali)',
                'value' => 'khq_ML',
              ),
              370 => 
              array (
                'key' => 'Koyraboro Senni',
                'value' => 'ses',
              ),
              371 => 
              array (
                'key' => 'Koyraboro Senni (Mali)',
                'value' => 'ses_ML',
              ),
              372 => 
              array (
                'key' => 'Kwasio',
                'value' => 'nmg',
              ),
              373 => 
              array (
                'key' => 'Kwasio (Cameroon)',
                'value' => 'nmg_CM',
              ),
              374 => 
              array (
                'key' => 'Kyrgyz',
                'value' => 'ky',
              ),
              375 => 
              array (
                'key' => 'Kyrgyz',
                'value' => 'ky_Cyrl',
              ),
              376 => 
              array (
                'key' => 'Kyrgyz (Kyrgyzstan)',
                'value' => 'ky_Cyrl_KG',
              ),
              377 => 
              array (
                'key' => 'Lakota',
                'value' => 'lkt',
              ),
              378 => 
              array (
                'key' => 'Lakota (United States)',
                'value' => 'lkt_US',
              ),
              379 => 
              array (
                'key' => 'Langi',
                'value' => 'lag',
              ),
              380 => 
              array (
                'key' => 'Langi (Tanzania)',
                'value' => 'lag_TZ',
              ),
              381 => 
              array (
                'key' => 'Lao',
                'value' => 'lo',
              ),
              382 => 
              array (
                'key' => 'Lao (Laos)',
                'value' => 'lo_LA',
              ),
              383 => 
              array (
                'key' => 'Latvian',
                'value' => 'lv',
              ),
              384 => 
              array (
                'key' => 'Latvian (Latvia)',
                'value' => 'lv_LV',
              ),
              385 => 
              array (
                'key' => 'Lingala',
                'value' => 'ln',
              ),
              386 => 
              array (
                'key' => 'Lingala (Angola)',
                'value' => 'ln_AO',
              ),
              387 => 
              array (
                'key' => 'Lingala (Central African Republic)',
                'value' => 'ln_CF',
              ),
              388 => 
              array (
                'key' => 'Lingala (Congo - Brazzaville)',
                'value' => 'ln_CG',
              ),
              389 => 
              array (
                'key' => 'Lingala (Congo - Kinshasa)',
                'value' => 'ln_CD',
              ),
              390 => 
              array (
                'key' => 'Lithuanian',
                'value' => 'lt',
              ),
              391 => 
              array (
                'key' => 'Lithuanian (Lithuania)',
                'value' => 'lt_LT',
              ),
              392 => 
              array (
                'key' => 'Luba-Katanga',
                'value' => 'lu',
              ),
              393 => 
              array (
                'key' => 'Luba-Katanga (Congo - Kinshasa)',
                'value' => 'lu_CD',
              ),
              394 => 
              array (
                'key' => 'Luo',
                'value' => 'luo',
              ),
              395 => 
              array (
                'key' => 'Luo (Kenya)',
                'value' => 'luo_KE',
              ),
              396 => 
              array (
                'key' => 'Luyia',
                'value' => 'luy',
              ),
              397 => 
              array (
                'key' => 'Luyia (Kenya)',
                'value' => 'luy_KE',
              ),
              398 => 
              array (
                'key' => 'Macedonian',
                'value' => 'mk',
              ),
              399 => 
              array (
                'key' => 'Macedonian (Macedonia)',
                'value' => 'mk_MK',
              ),
              400 => 
              array (
                'key' => 'Machame',
                'value' => 'jmc',
              ),
              401 => 
              array (
                'key' => 'Machame (Tanzania)',
                'value' => 'jmc_TZ',
              ),
              402 => 
              array (
                'key' => 'Makhuwa-Meetto',
                'value' => 'mgh',
              ),
              403 => 
              array (
                'key' => 'Makhuwa-Meetto (Mozambique)',
                'value' => 'mgh_MZ',
              ),
              404 => 
              array (
                'key' => 'Makonde',
                'value' => 'kde',
              ),
              405 => 
              array (
                'key' => 'Makonde (Tanzania)',
                'value' => 'kde_TZ',
              ),
              406 => 
              array (
                'key' => 'Malagasy',
                'value' => 'mg',
              ),
              407 => 
              array (
                'key' => 'Malagasy (Madagascar)',
                'value' => 'mg_MG',
              ),
              408 => 
              array (
                'key' => 'Malay',
                'value' => 'ms',
              ),
              409 => 
              array (
                'key' => 'Malay',
                'value' => 'ms_Latn',
              ),
              410 => 
              array (
                'key' => 'Malay (Brunei)',
                'value' => 'ms_Latn_BN',
              ),
              411 => 
              array (
                'key' => 'Malay (Malaysia)',
                'value' => 'ms_Latn_MY',
              ),
              412 => 
              array (
                'key' => 'Malay (Singapore)',
                'value' => 'ms_Latn_SG',
              ),
              413 => 
              array (
                'key' => 'Malayalam',
                'value' => 'ml',
              ),
              414 => 
              array (
                'key' => 'Malayalam (India)',
                'value' => 'ml_IN',
              ),
              415 => 
              array (
                'key' => 'Maltese',
                'value' => 'mt',
              ),
              416 => 
              array (
                'key' => 'Maltese (Malta)',
                'value' => 'mt_MT',
              ),
              417 => 
              array (
                'key' => 'Manx',
                'value' => 'gv',
              ),
              418 => 
              array (
                'key' => 'Manx (Isle of Man)',
                'value' => 'gv_IM',
              ),
              419 => 
              array (
                'key' => 'Marathi',
                'value' => 'mr',
              ),
              420 => 
              array (
                'key' => 'Marathi (India)',
                'value' => 'mr_IN',
              ),
              421 => 
              array (
                'key' => 'Masai',
                'value' => 'mas',
              ),
              422 => 
              array (
                'key' => 'Masai (Kenya)',
                'value' => 'mas_KE',
              ),
              423 => 
              array (
                'key' => 'Masai (Tanzania)',
                'value' => 'mas_TZ',
              ),
              424 => 
              array (
                'key' => 'Meru',
                'value' => 'mer',
              ),
              425 => 
              array (
                'key' => 'Meru (Kenya)',
                'value' => 'mer_KE',
              ),
              426 => 
              array (
                'key' => 'Meta\'',
                'value' => 'mgo',
              ),
              427 => 
              array (
                'key' => 'Meta\' (Cameroon)',
                'value' => 'mgo_CM',
              ),
              428 => 
              array (
                'key' => 'Mongolian',
                'value' => 'mn',
              ),
              429 => 
              array (
                'key' => 'Mongolian',
                'value' => 'mn_Cyrl',
              ),
              430 => 
              array (
                'key' => 'Mongolian (Mongolia)',
                'value' => 'mn_Cyrl_MN',
              ),
              431 => 
              array (
                'key' => 'Morisyen',
                'value' => 'mfe',
              ),
              432 => 
              array (
                'key' => 'Morisyen (Mauritius)',
                'value' => 'mfe_MU',
              ),
              433 => 
              array (
                'key' => 'Mundang',
                'value' => 'mua',
              ),
              434 => 
              array (
                'key' => 'Mundang (Cameroon)',
                'value' => 'mua_CM',
              ),
              435 => 
              array (
                'key' => 'Nama',
                'value' => 'naq',
              ),
              436 => 
              array (
                'key' => 'Nama (Namibia)',
                'value' => 'naq_NA',
              ),
              437 => 
              array (
                'key' => 'Nepali',
                'value' => 'ne',
              ),
              438 => 
              array (
                'key' => 'Nepali (India)',
                'value' => 'ne_IN',
              ),
              439 => 
              array (
                'key' => 'Nepali (Nepal)',
                'value' => 'ne_NP',
              ),
              440 => 
              array (
                'key' => 'Ngiemboon',
                'value' => 'nnh',
              ),
              441 => 
              array (
                'key' => 'Ngiemboon (Cameroon)',
                'value' => 'nnh_CM',
              ),
              442 => 
              array (
                'key' => 'Ngomba',
                'value' => 'jgo',
              ),
              443 => 
              array (
                'key' => 'Ngomba (Cameroon)',
                'value' => 'jgo_CM',
              ),
              444 => 
              array (
                'key' => 'North Ndebele',
                'value' => 'nd',
              ),
              445 => 
              array (
                'key' => 'North Ndebele (Zimbabwe)',
                'value' => 'nd_ZW',
              ),
              446 => 
              array (
                'key' => 'Norwegian Bokmål',
                'value' => 'nb',
              ),
              447 => 
              array (
                'key' => 'Norwegian Bokmål (Norway)',
                'value' => 'nb_NO',
              ),
              448 => 
              array (
                'key' => 'Norwegian Bokmål (Svalbard and Jan Mayen)',
                'value' => 'nb_SJ',
              ),
              449 => 
              array (
                'key' => 'Norwegian Nynorsk',
                'value' => 'nn',
              ),
              450 => 
              array (
                'key' => 'Norwegian Nynorsk (Norway)',
                'value' => 'nn_NO',
              ),
              451 => 
              array (
                'key' => 'Nuer',
                'value' => 'nus',
              ),
              452 => 
              array (
                'key' => 'Nuer (Sudan)',
                'value' => 'nus_SD',
              ),
              453 => 
              array (
                'key' => 'Nyankole',
                'value' => 'nyn',
              ),
              454 => 
              array (
                'key' => 'Nyankole (Uganda)',
                'value' => 'nyn_UG',
              ),
              455 => 
              array (
                'key' => 'Oriya',
                'value' => 'or',
              ),
              456 => 
              array (
                'key' => 'Oriya (India)',
                'value' => 'or_IN',
              ),
              457 => 
              array (
                'key' => 'Oromo',
                'value' => 'om',
              ),
              458 => 
              array (
                'key' => 'Oromo (Ethiopia)',
                'value' => 'om_ET',
              ),
              459 => 
              array (
                'key' => 'Oromo (Kenya)',
                'value' => 'om_KE',
              ),
              460 => 
              array (
                'key' => 'Pashto',
                'value' => 'ps',
              ),
              461 => 
              array (
                'key' => 'Pashto (Afghanistan)',
                'value' => 'ps_AF',
              ),
              462 => 
              array (
                'key' => 'Persian',
                'value' => 'fa',
              ),
              463 => 
              array (
                'key' => 'Persian (Afghanistan)',
                'value' => 'fa_AF',
              ),
              464 => 
              array (
                'key' => 'Persian (Iran)',
                'value' => 'fa_IR',
              ),
              465 => 
              array (
                'key' => 'Polish',
                'value' => 'pl',
              ),
              466 => 
              array (
                'key' => 'Polish (Poland)',
                'value' => 'pl_PL',
              ),
              467 => 
              array (
                'key' => 'Portuguese',
                'value' => 'pt',
              ),
              468 => 
              array (
                'key' => 'Portuguese (Angola)',
                'value' => 'pt_AO',
              ),
              469 => 
              array (
                'key' => 'Portuguese (Brazil)',
                'value' => 'pt_BR',
              ),
              470 => 
              array (
                'key' => 'Portuguese (Cape Verde)',
                'value' => 'pt_CV',
              ),
              471 => 
              array (
                'key' => 'Portuguese (Guinea-Bissau)',
                'value' => 'pt_GW',
              ),
              472 => 
              array (
                'key' => 'Portuguese (Macau SAR China)',
                'value' => 'pt_MO',
              ),
              473 => 
              array (
                'key' => 'Portuguese (Mozambique)',
                'value' => 'pt_MZ',
              ),
              474 => 
              array (
                'key' => 'Portuguese (Portugal)',
                'value' => 'pt_PT',
              ),
              475 => 
              array (
                'key' => 'Portuguese (São Tomé and Príncipe)',
                'value' => 'pt_ST',
              ),
              476 => 
              array (
                'key' => 'Portuguese (Timor-Leste)',
                'value' => 'pt_TL',
              ),
              477 => 
              array (
                'key' => 'Punjabi',
                'value' => 'pa_Guru',
              ),
              478 => 
              array (
                'key' => 'Punjabi',
                'value' => 'pa',
              ),
              479 => 
              array (
                'key' => 'Punjabi',
                'value' => 'pa_Arab',
              ),
              480 => 
              array (
                'key' => 'Punjabi (India)',
                'value' => 'pa_Guru_IN',
              ),
              481 => 
              array (
                'key' => 'Punjabi (Pakistan)',
                'value' => 'pa_Arab_PK',
              ),
              482 => 
              array (
                'key' => 'Romanian',
                'value' => 'ro',
              ),
              483 => 
              array (
                'key' => 'Romanian (Moldova)',
                'value' => 'ro_MD',
              ),
              484 => 
              array (
                'key' => 'Romanian (Romania)',
                'value' => 'ro_RO',
              ),
              485 => 
              array (
                'key' => 'Romansh',
                'value' => 'rm',
              ),
              486 => 
              array (
                'key' => 'Romansh (Switzerland)',
                'value' => 'rm_CH',
              ),
              487 => 
              array (
                'key' => 'Rombo',
                'value' => 'rof',
              ),
              488 => 
              array (
                'key' => 'Rombo (Tanzania)',
                'value' => 'rof_TZ',
              ),
              489 => 
              array (
                'key' => 'Rundi',
                'value' => 'rn',
              ),
              490 => 
              array (
                'key' => 'Rundi (Burundi)',
                'value' => 'rn_BI',
              ),
              491 => 
              array (
                'key' => 'Russian',
                'value' => 'ru',
              ),
              492 => 
              array (
                'key' => 'Russian (Belarus)',
                'value' => 'ru_BY',
              ),
              493 => 
              array (
                'key' => 'Russian (Kazakhstan)',
                'value' => 'ru_KZ',
              ),
              494 => 
              array (
                'key' => 'Russian (Kyrgyzstan)',
                'value' => 'ru_KG',
              ),
              495 => 
              array (
                'key' => 'Russian (Moldova)',
                'value' => 'ru_MD',
              ),
              496 => 
              array (
                'key' => 'Russian (Russia)',
                'value' => 'ru_RU',
              ),
              497 => 
              array (
                'key' => 'Russian (Ukraine)',
                'value' => 'ru_UA',
              ),
              498 => 
              array (
                'key' => 'Rwa',
                'value' => 'rwk',
              ),
              499 => 
              array (
                'key' => 'Rwa (Tanzania)',
                'value' => 'rwk_TZ',
              ),
              500 => 
              array (
                'key' => 'Samburu',
                'value' => 'saq',
              ),
              501 => 
              array (
                'key' => 'Samburu (Kenya)',
                'value' => 'saq_KE',
              ),
              502 => 
              array (
                'key' => 'Sango',
                'value' => 'sg',
              ),
              503 => 
              array (
                'key' => 'Sango (Central African Republic)',
                'value' => 'sg_CF',
              ),
              504 => 
              array (
                'key' => 'Sangu',
                'value' => 'sbp',
              ),
              505 => 
              array (
                'key' => 'Sangu (Tanzania)',
                'value' => 'sbp_TZ',
              ),
              506 => 
              array (
                'key' => 'Sena',
                'value' => 'seh',
              ),
              507 => 
              array (
                'key' => 'Sena (Mozambique)',
                'value' => 'seh_MZ',
              ),
              508 => 
              array (
                'key' => 'Serbian',
                'value' => 'sr_Latn',
              ),
              509 => 
              array (
                'key' => 'Serbian',
                'value' => 'sr',
              ),
              510 => 
              array (
                'key' => 'Serbian',
                'value' => 'sr_Cyrl',
              ),
              511 => 
              array (
                'key' => 'Serbian (Bosnia and Herzegovina)',
                'value' => 'sr_Cyrl_BA',
              ),
              512 => 
              array (
                'key' => 'Serbian (Bosnia and Herzegovina)',
                'value' => 'sr_Latn_BA',
              ),
              513 => 
              array (
                'key' => 'Serbian (Kosovo)',
                'value' => 'sr_Latn_XK',
              ),
              514 => 
              array (
                'key' => 'Serbian (Kosovo)',
                'value' => 'sr_Cyrl_XK',
              ),
              515 => 
              array (
                'key' => 'Serbian (Montenegro)',
                'value' => 'sr_Latn_ME',
              ),
              516 => 
              array (
                'key' => 'Serbian (Montenegro)',
                'value' => 'sr_Cyrl_ME',
              ),
              517 => 
              array (
                'key' => 'Serbian (Serbia)',
                'value' => 'sr_Latn_RS',
              ),
              518 => 
              array (
                'key' => 'Serbian (Serbia)',
                'value' => 'sr_Cyrl_RS',
              ),
              519 => 
              array (
                'key' => 'Shambala',
                'value' => 'ksb',
              ),
              520 => 
              array (
                'key' => 'Shambala (Tanzania)',
                'value' => 'ksb_TZ',
              ),
              521 => 
              array (
                'key' => 'Shona',
                'value' => 'sn',
              ),
              522 => 
              array (
                'key' => 'Shona (Zimbabwe)',
                'value' => 'sn_ZW',
              ),
              523 => 
              array (
                'key' => 'Sichuan Yi',
                'value' => 'ii',
              ),
              524 => 
              array (
                'key' => 'Sichuan Yi (China)',
                'value' => 'ii_CN',
              ),
              525 => 
              array (
                'key' => 'Sinhala',
                'value' => 'si',
              ),
              526 => 
              array (
                'key' => 'Sinhala (Sri Lanka)',
                'value' => 'si_LK',
              ),
              527 => 
              array (
                'key' => 'Slovak',
                'value' => 'sk',
              ),
              528 => 
              array (
                'key' => 'Slovak (Slovakia)',
                'value' => 'sk_SK',
              ),
              529 => 
              array (
                'key' => 'Slovenian',
                'value' => 'sl',
              ),
              530 => 
              array (
                'key' => 'Slovenian (Slovenia)',
                'value' => 'sl_SI',
              ),
              531 => 
              array (
                'key' => 'Soga',
                'value' => 'xog',
              ),
              532 => 
              array (
                'key' => 'Soga (Uganda)',
                'value' => 'xog_UG',
              ),
              533 => 
              array (
                'key' => 'Somali',
                'value' => 'so',
              ),
              534 => 
              array (
                'key' => 'Somali (Djibouti)',
                'value' => 'so_DJ',
              ),
              535 => 
              array (
                'key' => 'Somali (Ethiopia)',
                'value' => 'so_ET',
              ),
              536 => 
              array (
                'key' => 'Somali (Kenya)',
                'value' => 'so_KE',
              ),
              537 => 
              array (
                'key' => 'Somali (Somalia)',
                'value' => 'so_SO',
              ),
              538 => 
              array (
                'key' => 'Spanish',
                'value' => 'es',
              ),
              539 => 
              array (
                'key' => 'Spanish (Argentina)',
                'value' => 'es_AR',
              ),
              540 => 
              array (
                'key' => 'Spanish (Bolivia)',
                'value' => 'es_BO',
              ),
              541 => 
              array (
                'key' => 'Spanish (Canary Islands)',
                'value' => 'es_IC',
              ),
              542 => 
              array (
                'key' => 'Spanish (Ceuta and Melilla)',
                'value' => 'es_EA',
              ),
              543 => 
              array (
                'key' => 'Spanish (Chile)',
                'value' => 'es_CL',
              ),
              544 => 
              array (
                'key' => 'Spanish (Colombia)',
                'value' => 'es_CO',
              ),
              545 => 
              array (
                'key' => 'Spanish (Costa Rica)',
                'value' => 'es_CR',
              ),
              546 => 
              array (
                'key' => 'Spanish (Cuba)',
                'value' => 'es_CU',
              ),
              547 => 
              array (
                'key' => 'Spanish (Dominican Republic)',
                'value' => 'es_DO',
              ),
              548 => 
              array (
                'key' => 'Spanish (Ecuador)',
                'value' => 'es_EC',
              ),
              549 => 
              array (
                'key' => 'Spanish (El Salvador)',
                'value' => 'es_SV',
              ),
              550 => 
              array (
                'key' => 'Spanish (Equatorial Guinea)',
                'value' => 'es_GQ',
              ),
              551 => 
              array (
                'key' => 'Spanish (Guatemala)',
                'value' => 'es_GT',
              ),
              552 => 
              array (
                'key' => 'Spanish (Honduras)',
                'value' => 'es_HN',
              ),
              553 => 
              array (
                'key' => 'Spanish (Latin America)',
                'value' => 'es_419',
              ),
              554 => 
              array (
                'key' => 'Spanish (Mexico)',
                'value' => 'es_MX',
              ),
              555 => 
              array (
                'key' => 'Spanish (Nicaragua)',
                'value' => 'es_NI',
              ),
              556 => 
              array (
                'key' => 'Spanish (Panama)',
                'value' => 'es_PA',
              ),
              557 => 
              array (
                'key' => 'Spanish (Paraguay)',
                'value' => 'es_PY',
              ),
              558 => 
              array (
                'key' => 'Spanish (Peru)',
                'value' => 'es_PE',
              ),
              559 => 
              array (
                'key' => 'Spanish (Philippines)',
                'value' => 'es_PH',
              ),
              560 => 
              array (
                'key' => 'Spanish (Puerto Rico)',
                'value' => 'es_PR',
              ),
              561 => 
              array (
                'key' => 'Spanish (Spain)',
                'value' => 'es_ES',
              ),
              562 => 
              array (
                'key' => 'Spanish (United States)',
                'value' => 'es_US',
              ),
              563 => 
              array (
                'key' => 'Spanish (Uruguay)',
                'value' => 'es_UY',
              ),
              564 => 
              array (
                'key' => 'Spanish (Venezuela)',
                'value' => 'es_VE',
              ),
              565 => 
              array (
                'key' => 'Standard Moroccan Tamazight',
                'value' => 'zgh',
              ),
              566 => 
              array (
                'key' => 'Standard Moroccan Tamazight (Morocco)',
                'value' => 'zgh_MA',
              ),
              567 => 
              array (
                'key' => 'Swahili',
                'value' => 'sw',
              ),
              568 => 
              array (
                'key' => 'Swahili (Kenya)',
                'value' => 'sw_KE',
              ),
              569 => 
              array (
                'key' => 'Swahili (Tanzania)',
                'value' => 'sw_TZ',
              ),
              570 => 
              array (
                'key' => 'Swahili (Uganda)',
                'value' => 'sw_UG',
              ),
              571 => 
              array (
                'key' => 'Swedish',
                'value' => 'sv',
              ),
              572 => 
              array (
                'key' => 'Swedish (Finland)',
                'value' => 'sv_FI',
              ),
              573 => 
              array (
                'key' => 'Swedish (Sweden)',
                'value' => 'sv_SE',
              ),
              574 => 
              array (
                'key' => 'Swedish (Åland Islands)',
                'value' => 'sv_AX',
              ),
              575 => 
              array (
                'key' => 'Swiss German',
                'value' => 'gsw',
              ),
              576 => 
              array (
                'key' => 'Swiss German (Liechtenstein)',
                'value' => 'gsw_LI',
              ),
              577 => 
              array (
                'key' => 'Swiss German (Switzerland)',
                'value' => 'gsw_CH',
              ),
              578 => 
              array (
                'key' => 'Tachelhit',
                'value' => 'shi',
              ),
              579 => 
              array (
                'key' => 'Tachelhit',
                'value' => 'shi_Latn',
              ),
              580 => 
              array (
                'key' => 'Tachelhit',
                'value' => 'shi_Tfng',
              ),
              581 => 
              array (
                'key' => 'Tachelhit (Morocco)',
                'value' => 'shi_Tfng_MA',
              ),
              582 => 
              array (
                'key' => 'Tachelhit (Morocco)',
                'value' => 'shi_Latn_MA',
              ),
              583 => 
              array (
                'key' => 'Taita',
                'value' => 'dav',
              ),
              584 => 
              array (
                'key' => 'Taita (Kenya)',
                'value' => 'dav_KE',
              ),
              585 => 
              array (
                'key' => 'Tamil',
                'value' => 'ta',
              ),
              586 => 
              array (
                'key' => 'Tamil (India)',
                'value' => 'ta_IN',
              ),
              587 => 
              array (
                'key' => 'Tamil (Malaysia)',
                'value' => 'ta_MY',
              ),
              588 => 
              array (
                'key' => 'Tamil (Singapore)',
                'value' => 'ta_SG',
              ),
              589 => 
              array (
                'key' => 'Tamil (Sri Lanka)',
                'value' => 'ta_LK',
              ),
              590 => 
              array (
                'key' => 'Tasawaq',
                'value' => 'twq',
              ),
              591 => 
              array (
                'key' => 'Tasawaq (Niger)',
                'value' => 'twq_NE',
              ),
              592 => 
              array (
                'key' => 'Telugu',
                'value' => 'te',
              ),
              593 => 
              array (
                'key' => 'Telugu (India)',
                'value' => 'te_IN',
              ),
              594 => 
              array (
                'key' => 'Teso',
                'value' => 'teo',
              ),
              595 => 
              array (
                'key' => 'Teso (Kenya)',
                'value' => 'teo_KE',
              ),
              596 => 
              array (
                'key' => 'Teso (Uganda)',
                'value' => 'teo_UG',
              ),
              597 => 
              array (
                'key' => 'Thai',
                'value' => 'th',
              ),
              598 => 
              array (
                'key' => 'Thai (Thailand)',
                'value' => 'th_TH',
              ),
              599 => 
              array (
                'key' => 'Tibetan',
                'value' => 'bo',
              ),
              600 => 
              array (
                'key' => 'Tibetan (China)',
                'value' => 'bo_CN',
              ),
              601 => 
              array (
                'key' => 'Tibetan (India)',
                'value' => 'bo_IN',
              ),
              602 => 
              array (
                'key' => 'Tigrinya',
                'value' => 'ti',
              ),
              603 => 
              array (
                'key' => 'Tigrinya (Eritrea)',
                'value' => 'ti_ER',
              ),
              604 => 
              array (
                'key' => 'Tigrinya (Ethiopia)',
                'value' => 'ti_ET',
              ),
              605 => 
              array (
                'key' => 'Tongan',
                'value' => 'to',
              ),
              606 => 
              array (
                'key' => 'Tongan (Tonga)',
                'value' => 'to_TO',
              ),
              607 => 
              array (
                'key' => 'Turkish',
                'value' => 'tr',
              ),
              608 => 
              array (
                'key' => 'Turkish (Cyprus)',
                'value' => 'tr_CY',
              ),
              609 => 
              array (
                'key' => 'Turkish (Turkey)',
                'value' => 'tr_TR',
              ),
              610 => 
              array (
                'key' => 'Ukrainian',
                'value' => 'uk',
              ),
              611 => 
              array (
                'key' => 'Ukrainian (Ukraine)',
                'value' => 'uk_UA',
              ),
              612 => 
              array (
                'key' => 'Urdu',
                'value' => 'ur',
              ),
              613 => 
              array (
                'key' => 'Urdu (India)',
                'value' => 'ur_IN',
              ),
              614 => 
              array (
                'key' => 'Urdu (Pakistan)',
                'value' => 'ur_PK',
              ),
              615 => 
              array (
                'key' => 'Uzbek',
                'value' => 'uz_Latn',
              ),
              616 => 
              array (
                'key' => 'Uzbek',
                'value' => 'uz_Arab',
              ),
              617 => 
              array (
                'key' => 'Uzbek',
                'value' => 'uz',
              ),
              618 => 
              array (
                'key' => 'Uzbek',
                'value' => 'uz_Cyrl',
              ),
              619 => 
              array (
                'key' => 'Uzbek (Afghanistan)',
                'value' => 'uz_Arab_AF',
              ),
              620 => 
              array (
                'key' => 'Uzbek (Uzbekistan)',
                'value' => 'uz_Latn_UZ',
              ),
              621 => 
              array (
                'key' => 'Uzbek (Uzbekistan)',
                'value' => 'uz_Cyrl_UZ',
              ),
              622 => 
              array (
                'key' => 'Vai',
                'value' => 'vai',
              ),
              623 => 
              array (
                'key' => 'Vai',
                'value' => 'vai_Vaii',
              ),
              624 => 
              array (
                'key' => 'Vai',
                'value' => 'vai_Latn',
              ),
              625 => 
              array (
                'key' => 'Vai (Liberia)',
                'value' => 'vai_Latn_LR',
              ),
              626 => 
              array (
                'key' => 'Vai (Liberia)',
                'value' => 'vai_Vaii_LR',
              ),
              627 => 
              array (
                'key' => 'Vietnamese',
                'value' => 'vi',
              ),
              628 => 
              array (
                'key' => 'Vietnamese (Vietnam)',
                'value' => 'vi_VN',
              ),
              629 => 
              array (
                'key' => 'Vunjo',
                'value' => 'vun',
              ),
              630 => 
              array (
                'key' => 'Vunjo (Tanzania)',
                'value' => 'vun_TZ',
              ),
              631 => 
              array (
                'key' => 'Welsh',
                'value' => 'cy',
              ),
              632 => 
              array (
                'key' => 'Welsh (United Kingdom)',
                'value' => 'cy_GB',
              ),
              633 => 
              array (
                'key' => 'Yangben',
                'value' => 'yav',
              ),
              634 => 
              array (
                'key' => 'Yangben (Cameroon)',
                'value' => 'yav_CM',
              ),
              635 => 
              array (
                'key' => 'Yoruba',
                'value' => 'yo',
              ),
              636 => 
              array (
                'key' => 'Yoruba (Benin)',
                'value' => 'yo_BJ',
              ),
              637 => 
              array (
                'key' => 'Yoruba (Nigeria)',
                'value' => 'yo_NG',
              ),
              638 => 
              array (
                'key' => 'Zarma',
                'value' => 'dje',
              ),
              639 => 
              array (
                'key' => 'Zarma (Niger)',
                'value' => 'dje_NE',
              ),
              640 => 
              array (
                'key' => 'Zulu',
                'value' => 'zu',
              ),
              641 => 
              array (
                'key' => 'Zulu (South Africa)',
                'value' => 'zu_ZA',
              ),
            ),
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'queryColumnType' => 'text',
             'columnType' => 'text',
             'phpdocType' => 'array',
             'name' => 'alan_multi',
             'title' => 'lan_multi',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          17 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Href::__set_state(array(
             'fieldtype' => 'href',
             'width' => '',
             'assetUploadPath' => '',
             'relationType' => true,
             'queryColumnType' => 
            array (
              'id' => 'int(11)',
              'type' => 'enum(\'document\',\'asset\',\'object\')',
            ),
             'phpdocType' => '\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject',
             'objectsAllowed' => false,
             'assetsAllowed' => false,
             'assetTypes' => 
            array (
            ),
             'documentsAllowed' => false,
             'documentTypes' => 
            array (
            ),
             'lazyLoading' => true,
             'classes' => 
            array (
            ),
             'pathFormatterClass' => '',
             'name' => 'ahref',
             'title' => 'href',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'columnType' => NULL,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          18 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Objects::__set_state(array(
             'fieldtype' => 'objects',
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'queryColumnType' => 'text',
             'phpdocType' => 'array',
             'relationType' => true,
             'lazyLoading' => true,
             'classes' => 
            array (
              0 => 
              array (
                'classes' => '',
              ),
            ),
             'pathFormatterClass' => '',
             'name' => 'aobjects',
             'title' => 'objects',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'columnType' => NULL,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          19 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\MultihrefMetadata::__set_state(array(
             'columns' => 
            array (
            ),
             'fieldtype' => 'multihrefMetadata',
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ElementMetadata[]',
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'assetUploadPath' => '',
             'queryColumnType' => 'text',
             'relationType' => true,
             'objectsAllowed' => false,
             'assetsAllowed' => false,
             'assetTypes' => 
            array (
              0 => 
              array (
                'assetTypes' => '',
              ),
            ),
             'documentsAllowed' => false,
             'documentTypes' => 
            array (
              0 => 
              array (
                'documentTypes' => '',
              ),
            ),
             'lazyLoading' => true,
             'classes' => 
            array (
              0 => 
              array (
                'classes' => '',
              ),
            ),
             'pathFormatterClass' => '',
             'name' => 'amultihrefadv',
             'title' => 'multihrefadv',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'columnType' => NULL,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'columnKeys' => 
            array (
            ),
          )),
          20 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Nonownerobjects::__set_state(array(
             'ownerClassName' => NULL,
             'ownerClassId' => NULL,
             'ownerFieldName' => NULL,
             'lazyLoading' => true,
             'fieldtype' => 'nonownerobjects',
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'queryColumnType' => 'text',
             'phpdocType' => 'array',
             'relationType' => true,
             'classes' => NULL,
             'pathFormatterClass' => '',
             'name' => 'aobjects_nonowner',
             'title' => 'objects_nonowner',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'columnType' => NULL,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          21 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Multihref::__set_state(array(
             'fieldtype' => 'multihref',
             'width' => '',
             'height' => '',
             'maxItems' => '',
             'assetUploadPath' => '',
             'queryColumnType' => 'text',
             'phpdocType' => 'array',
             'relationType' => true,
             'objectsAllowed' => false,
             'assetsAllowed' => false,
             'assetTypes' => 
            array (
              0 => 
              array (
                'assetTypes' => '',
              ),
            ),
             'documentsAllowed' => false,
             'documentTypes' => 
            array (
              0 => 
              array (
                'documentTypes' => '',
              ),
            ),
             'lazyLoading' => true,
             'classes' => 
            array (
              0 => 
              array (
                'classes' => '',
              ),
            ),
             'pathFormatterClass' => '',
             'name' => 'amul_href',
             'title' => 'mul_href',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'columnType' => NULL,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          22 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Block::__set_state(array(
             'fieldtype' => 'block',
             'disallowAddRemove' => NULL,
             'disallowReorder' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'queryColumnType' => 'longtext',
             'columnType' => 'longtext',
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\Block',
             'childs' => 
            array (
            ),
             'layout' => NULL,
             'referencedFields' => 
            array (
            ),
             'name' => 'ablock',
             'title' => 'block',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          23 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Classificationstore::__set_state(array(
             'fieldtype' => 'classificationstore',
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Classificationstore',
             'childs' => 
            array (
            ),
             'name' => 'aclassification_store',
             'region' => NULL,
             'layout' => NULL,
             'title' => 'classification_store',
             'width' => '',
             'height' => '',
             'maxTabs' => NULL,
             'labelWidth' => 0,
             'localized' => false,
             'storeId' => '1',
             'referencedFields' => 
            array (
            ),
             'fieldDefinitionsCache' => NULL,
             'allowedGroupIds' => 
            array (
            ),
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'columnType' => NULL,
             'queryColumnType' => NULL,
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          24 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Table::__set_state(array(
             'fieldtype' => 'table',
             'width' => '',
             'height' => '',
             'cols' => '',
             'colsFixed' => false,
             'rows' => '',
             'rowsFixed' => false,
             'data' => '',
             'queryColumnType' => 'longtext',
             'columnType' => 'longtext',
             'phpdocType' => 'array',
             'name' => 'atable',
             'title' => 'table',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          25 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\StructuredTable::__set_state(array(
             'fieldtype' => 'structuredTable',
             'width' => '',
             'height' => '',
             'labelWidth' => NULL,
             'labelFirstCell' => '',
             'cols' => 
            array (
              0 => 
              array (
                'position' => 1,
                'key' => '1',
                'label' => '1',
                'type' => 'number',
                'id' => 'extModel12283-1',
              ),
            ),
             'rows' => 
            array (
              0 => 
              array (
                'position' => 1,
                'key' => '1',
                'label' => '1',
                'id' => 'extModel12259-1',
              ),
            ),
             'queryColumnType' => NULL,
             'columnType' => NULL,
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\StructuredTable',
             'name' => 'astr_table',
             'title' => 'str_table',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          26 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
             'fieldtype' => 'fieldcollections',
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Fieldcollection',
             'allowedTypes' => 
            array (
            ),
             'lazyLoading' => true,
             'maxItems' => '',
             'disallowAddRemove' => false,
             'disallowReorder' => false,
             'collapsed' => false,
             'collapsible' => false,
             'name' => 'afc',
             'title' => 'fc',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'columnType' => NULL,
             'queryColumnType' => NULL,
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
        ),
         'locked' => false,
      )),
    ),
     'locked' => NULL,
  )),
   'icon' => '',
   'previewUrl' => '',
   'group' => '',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'dao' => NULL,
));
