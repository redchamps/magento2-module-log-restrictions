# Log Restrictions - Magento 2 Extension 

[![Latest Stable Version](https://img.shields.io/packagist/v/redchamps/module-log-restrictions.svg?style=flat-square)](https://packagist.org/packages/redchamps/module-log-restrictions)  [![Packagist](https://img.shields.io/packagist/dt/redchamps/module-log-restrictions.svg?style=flat-square)](https://packagist.org/packages/redchamps/module-log-restrictions/stats) [![Packagist](https://img.shields.io/packagist/dm/redchamps/module-log-restrictions.svg?style=flat-square)](https://packagist.org/packages/redchamps/module-log-restrictions/stats)

This Magento 2 extension will disallow `INFO` & `DEBUG` type entries in Magento logs when the store is in PRODUCTION mode.

## Necessity

You may have seen `system.log` & `debug.log`  filled with entries like

> main.INFO: Add of item with id Magento_Backend::content was processed [] []

These entries are absolutely not required while store is in PRODUCTION mode. They create two main problems

1. Grows the size of log file.
2. Makes it very hard to look of real error messages.


## Installation

> composer require redchamps/module-log-restrictions

## Customization

You may disallow other log types or disallow these entries in other modes along with PRODUCTION by adding or altering values in di.xml

## Authors

- RedChamps [Maintainer] [![Twitter Follow](https://img.shields.io/twitter/follow/_redChamps.svg?style=social)](https://twitter.com/_redChamps)
- Ravinder [Maintainer] [![Twitter Follow](https://img.shields.io/twitter/follow/_iAmRav.svg?style=social)](https://twitter.com/_iAmRav)


## License

This project is licensed under the Open Source License 

## ADS

Please visit our [store](https://redchamps.com) for more free/paid extensions from us.
