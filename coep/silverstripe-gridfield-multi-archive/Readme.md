# GridField Multi Archive

## Introduction

GridField component that adds checkboxes to each row in a gridfield allowing you to select multiple rows and archive those selected items.

## Requirements
* Silverstripe 4.0 and above

## Install

```
composer require cityofelpaso/silverstripe-gridfield-multi-archive

```


## Configuration

### Add to gridfield config

```
$gridFieldConfig->addComponents(
    new GridFieldCheckboxSelectComponent(),
    new GridFieldMultiArchiveButton()
);
```

You can also add components to your modeladmin:
https://docs.silverstripe.org/en/4/developer_guides/customising_the_admin_interface/modeladmin/
