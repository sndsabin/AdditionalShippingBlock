# AdditionalShippingBlock - Magento 2 Module

 - [Main Functionality](#markdown-header-main-functionality)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)


## Main Functionality
This module lets you add block in the desired placement position within shipping method in checkout page.

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file or git clone(```git clone https://github.com/sndsabin/AdditionalShippingBlock.git```) this repo in `app/code/SNDSABIN/`.
 - Enable the module by running `php bin/magento module:enable SNDSABIN_AdditionalShippingBlock`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer (recommended)

 - Install the module composer by running `composer require sndsabin/module-additionalshippingblock`
 - enable the module by running `php bin/magento module:enable SNDSABIN_AdditionalShippingBlock`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

### Block

![Overall block group configuration](docs/images/block.png)

 1. Select Block to be rendered on checkout page
     - Stores > Configuration > Additional Shipping Block > View Settings > Block > Block
     - select the block to be added above/below the shipping methods in checkout page.
    
    ![Select block to be rendered](docs/images/select-block.png)
    
 2. Select the block placement
  - Stores > Configuration > Additional Shipping Block > View Settings > Block > Block Placement
     - select the position of the selected block to be placed in checkout page (above or below the shipping methods).
    
    **Default Option: After Shipping Methods**
    ![Block placement](docs/images/block-placement.png)
   
 3  Render Selected Block Even if it's not enabled (optional)
  - Stores > Configuration > Additional Shipping Block > View Settings > Block > Render Selected Block If Disabled
  - select the Yes / No Option (If selected Yes, the selected block will be rendered in checkout page even if the selected block is not enabled.)
  
    **Default Option: No**
    ![Render selected block if it's not enabled](docs/images/render-block-if-disabled.png)
  
### General

![Overall block group configuration](docs/images/general.png)

1. Make the selected block visible in the checkout page
  - Stores > Configuration > Additional Shipping Block > View Settings > General > Enabled
  - select the Yes / No Option (If enabled, the assigned block will be visible in the desired position within shipping method in checkout page.)

    **Default Option: Yes**
    ![Make the selected block visible in checkout page](docs/images/render-block-if-disabled.png)

## Frontend Checkout Page

#### Block Placement : After Shipping Methods
![Block placement after the shipping method selected](docs/images/after-the-shipping-method.png)

#### Block Placement : Before Shipping Methods
![Block placement before the shipping method selected](docs/images/before-the-shipping-method.png)

#### Template css class
There are two classes added to the div element in template ```additional-shipping-block-container``` and ```additional-shipping-block-content``` if incase you need to use it.

![Template css class](docs/images/template-css-classes.png)

## License
[GPL](LICENSE.txt)

##### Uppercase Vendor Name 😛 ?
Yes 😄

**Bootstrapped using [Mage2Gen](https://mage2gen.com). Inspired from [magento2-module-additional-shipping-block](https://github.com/sohelrana09/magento2-module-additional-shipping-block).**
