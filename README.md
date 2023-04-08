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
- Docker
- JSON response to an exception
- Makefile
- quality tools
  - PHP CS Fixer
  - PHPStan

#### Join the development of MicroApi!

## Usage
It's very simple! Just run these two commands:
- `composer create-project reiterus/microapi-core folder && cd folder`
- `make docker-start`

That's all!  
Now your API app is available at http://localhost:8008

## Makefile commands
For the convenience of working with the project, there are several make-commands: local and for Docker.
<details>
  <summary>See more...</summary>

#### Local
- make phpunit: run `./vendor/phpunit/phpunit/phpunit`
- make phpfixer: run `./vendor/bin/php-cs-fixer fix`
- make phpstan: run `./vendor/bin/phpstan analyse`
- make server: run `cd public/ && php -S 127.0.0.1:8008`
- make remover: run `rm -rf var/ && rm -rf vendor/`

#### Docker
- make docker-start: run `docker-compose up -d --build && docker-compose exec api composer install`
- make docker-restart: run `rm -rf var/ && rm -rf vendor/ && docker-compose up -d --build && docker-compose exec api composer install`
- make docker-build: run `docker-compose up -d --build`
- make docker-install: run `docker-compose exec api composer install`
- make docker-down: run `docker-compose down`
- make docker-rm: run `docker rm $(docker ps -aq) -f`
- make docker-rmi: run `docker rmi $(docker images -aq) -f`
</details>

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
