# Mage2 Module OrviSoft MenuBlock

    `orvisoft/module-menublock`

 - [Main Functionalities](#main-functionalities)
 - [Installation](#installation)
 - [Specifications](#specifications)
 - [Attributes](#attributes)


## Main Functionalities
This module helps to create sub menu block under each parent category to avoid listing default behavior (can be used as Mega menu).

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/OrviSoft`
 - Enable the module by running `php bin/magento module:enable OrviSoft_MenuBlock`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require orvisoft/module-menublock`
 - enable the module by running `php bin/magento module:enable OrviSoft_MenuBlock`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Specifications

 - Helper
	- OrviSoft\MenuBlock\Helper\Attributes


## Attributes

 - Category - Menu Static Block (menu_static_block)

