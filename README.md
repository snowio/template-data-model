# Template Data Model
[![Build Status](https://app.travis-ci.com/snowio/template-data-model.svg?branch=main)](https://app.travis-ci.com/AmpersandHQ/template-data-model)
[![codecov](https://codecov.io/gh/snowio/template-data-model/graph/badge.svg?token=6bHVY2z2it)](https://codecov.io/gh/snowio/template-data-model)

###  Summary
This module is a template for snow.io connector’s data models, all linting and testing frameworks are configured. To configure your project:
1. Update composer.json name and namespace
2. Remove ModelExample
3. Remove ModelExampleTest

###  Installation
```
composer install
```
###  Testing

```
composer run test-static-analysis
composer run test-functional
```
