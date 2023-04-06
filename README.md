# MicroAPI Core
MicroApi Core is an ultra-lightweight, 
tiny engine based on Symfony packages. 
It is intended for building **small REST API** applications.
Since MicroApi is based on the Symfony architecture, 
it can be developed to **any level of complexity** if desired. 
Forming your application based on this engine, 
you will always be sure that there is 
**nothing superfluous** in your code.

Features of MicroApi Core out of the box:
- all endpoints are public
- loading all types of env files
- use of attributes
- only two configuration files
- use autoload_runtime.php
- minimum php version: 8.1
- JSON response to an exception
- Makefile
- quality tools
  - PHP CS Fixer
  - PHPStan

#### Join the development of MicroApi!

## Installation
You can install the project in two ways

From packagist.org
```shell
composer create-project reiterus/microapi-core
```

From GitHub repository
```json
{
 "repositories": [
  {
   "type": "vcs",
   "url": "https://github.com/reiterus/microapi-core.git"
  }
 ]
}
```

## License

This library is released under the [MIT license](LICENSE).
