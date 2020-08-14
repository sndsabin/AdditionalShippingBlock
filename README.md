# Mage2 Module SNDSABIN AdditionalShippingBlock

    ``sndsabin/module-additionalshippingblock``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
This module lets you add block below the shipping method in Checkout Page.

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/SNDSABIN`
 - Enable the module by running `php bin/magento module:enable SNDSABIN_AdditionalShippingBlock`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require sndsabin/module-additionalshippingblock`
 - enable the module by running `php bin/magento module:enable SNDSABIN_AdditionalShippingBlock`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Enabled (additionalshippingblock_view/view/enabled)

 - Block (additionalshippingblock_view/view/block)


## Specifications




## Attributes



