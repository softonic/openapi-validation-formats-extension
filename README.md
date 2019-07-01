OpenApi validation formats extension
=====

[![Latest Version](https://img.shields.io/github/release/softonic/openapi-validation-formats-extension.svg?style=flat-square)](https://github.com/softonic/openapi-validation-formats-extension/releases)
[![Software License](https://img.shields.io/badge/license-Apache%202.0-blue.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/softonic/openapi-validation-formats-extension/master.svg?style=flat-square)](https://travis-ci.org/softonic/openapi-validation-formats-extension)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/softonic/openapi-validation-formats-extension.svg?style=flat-square)](https://scrutinizer-ci.com/g/softonic/openapi-validation-formats-extension/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/softonic/openapi-validation-formats-extension.svg?style=flat-square)](https://scrutinizer-ci.com/g/softonic/openapi-validation-formats-extension)
[![Total Downloads](https://img.shields.io/packagist/dt/softonic/openapi-validation-formats-extension.svg?style=flat-square)](https://packagist.org/packages/softonic/openapi-validation-formats-extension)

This library adds some format validation for [OpenAPI validation middleware](https://github.com/hkarlstrom/openapi-validation-middleware) package.

Installation
-------

Via composer:
```
composer require softonic/openapi-validation-formats-extension
```

Documentation
-------

Once installed you will be able to register the formats that you want from this package.

In this example we can see how to register the UUID format.

```
$validator = new OpenApiValidation(base_path() . '/swagger.json');
$validator->addFormat('string', 'uuid', new Uuid());
```

For more information about format registration refer to the [OpenAPI validation middleware](https://github.com/hkarlstrom/openapi-validation-middleware) 
package [documentation](https://github.com/hkarlstrom/openapi-validation-middleware/blob/master/README.md).

Testing
-------

`softonic/openapi-validation-formats-extension` has a [PHPUnit](https://phpunit.de) test suite and a coding style compliance test suite using [PHP CS Fixer](http://cs.sensiolabs.org/).

To run the tests, run the following command from the project folder.

``` bash
$ docker-compose run test
```

To run interactively using [PsySH](http://psysh.org/):
``` bash
$ docker-compose run psysh
```

License
-------

The Apache 2.0 license. Please see [LICENSE](LICENSE) for more information.

[PSR-2]: http://www.php-fig.org/psr/psr-2/
[PSR-4]: http://www.php-fig.org/psr/psr-4/
