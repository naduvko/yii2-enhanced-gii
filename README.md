# yii2-enhanced-gii
Yii2 Gii (generator) with Relation 

Fork of mootensai/yii2-enhanced-gii

Do not use it on production!

[![Total Downloads](https://poser.pugx.org/naduvko/yii2-enhanced-gii/downloads)](https://packagist.org/packages/naduvko/yii2-enhanced-gii)
[![Latest Stable Version](https://poser.pugx.org/naduvko/yii2-enhanced-gii/v/stable)](https://packagist.org/packages/naduvko/yii2-enhanced-gii)
[![License](https://poser.pugx.org/naduvko/yii2-enhanced-gii/license)](https://packagist.org/packages/naduvko/yii2-sortable-grid-view-widget)

[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

https://www.linkedin.com/in/yohanes-candrajaya-b68394102/

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require naduvko/yii2-enhanced-gii:dev-master
```

or add

```
"naduvko/yii2-enhanced-gii": "dev-master",
```
>add `"kartik-v/yii2-mpdf": "dev-master",` if you want to use pdf exporter 

>add `"kartik-v/yii2-tree-manager": "dev-master",` if you want to use tree/nested relation table

to the `require` section of your `composer.json` file.

> I separate the mpdf & tree-manager because the package is big & not everyone will use it.

Then you must add this code at your config\main.php.

```php
'modules' => [
... //your another module
      'gridview' => [
          'class' => '\kartik\grid\Module',
          // see settings on http://demos.krajee.com/grid#module
      ],
      'datecontrol' => [
          'class' => '\kartik\datecontrol\Module',
          // see settings on http://demos.krajee.com/datecontrol#module
      ],
      // If you use tree table
      'treemanager' =>  [
          'class' => '\kartik\tree\Module',
          // see settings on http://demos.krajee.com/tree-manager#module
      ]
... // your another module
    ],
```
See gridview settings on http://demos.krajee.com/grid#module

See datecontrol settings on http://demos.krajee.com/datecontrol#module

See treemanager settings on http://demos.krajee.com/tree-manager#module (If you use tree/nested relation table)

## Usage :
Go to your gii tools, and notice the new IO Generator for models & CRUD


# Features
## Model :
1. Generate optimistic lock
2. Generate Timestamp Behaviors
3. Generate Blameable Behavior
4. Generate UUID Behavior
5. Generate Soft Delete Behavior (NEW! Todo : Generate data filtering for relation data, e.g. not show deleted children of hasMany )

## CRUD :
1. Generate all CRUD with wildcard (*) of table
2. Generate related input output
3. Specify your name/label attribute for foreign keys
4. Set your column to hidden
5. Specify your skipped columns
6. Specify your skipped relations
7. Set pluralize or not
8. PDF Printable view
9. Expandable / collapsible row at index grid view for related data



# Thanks To
1. Jiwanndaru (jiwanndaru@gmail.com) for creating the tradition
2. kartik-v (https://github.com/kartik-v) for most of widgets
3. schmunk42 (https://github.com/schmunk42) for bootstrap & model base & extension
4. mdmunir (https://github.com/mdmunir) for JsBlock & Migration Generator (from https://github.com/deesoft/yii2-gii)
4. mootensai (https://github.com/mootensai) 
