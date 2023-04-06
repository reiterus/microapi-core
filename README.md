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

## Makefile commands

#### Local
- make phpunit: run `./vendor/phpunit/phpunit/phpunit`
- make phpfixer: run `./vendor/bin/php-cs-fixer fix`
- make phpstan: run `./vendor/bin/phpstan analyse`
- make server: run `cd public/ && php -S 127.0.0.1:8008`

#### Docker
- make docker-start: run `docker-compose up -d --build && docker-compose exec api composer install`
- make docker-build: run `docker-compose up -d --build`
- make docker-install: run `docker-compose exec api composer install`
- make docker-down: run `docker-compose down`
- make docker-rm: run `docker rm $(docker ps -aq) -f`
- make docker-rmi: run `docker rmi $(docker images -aq) -f`
- make docker-phpunit: run `docker-compose exec api ./vendor/phpunit/phpunit/phpunit`
- make docker-phpfixer: run `docker-compose exec api ./vendor/bin/php-cs-fixer fix`
- make docker-phpstan: run `docker-compose exec api ./vendor/bin/phpstan analyse`

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
