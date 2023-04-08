phpunit:
	rm -rf var/ && ./vendor/phpunit/phpunit/phpunit && rm -f .phpunit.result.cache

phpfixer:
	rm -f .php-cs-fixer.cache && ./vendor/bin/php-cs-fixer fix --using-cache=no

phpstan:
	./vendor/bin/phpstan analyse

server:
	cd public/ && php -S 127.0.0.1:8008

remover:
	rm -rf var/ && rm -rf vendor/

docker-start:
	docker-compose up -d --build && docker-compose exec api composer install

docker-restart:
	rm -rf var/ && rm -rf vendor/ && docker-compose up -d --build && docker-compose exec api composer install

docker-build:
	docker-compose up -d --build

docker-install:
	docker-compose exec api composer install

docker-down:
	docker-compose down

docker-rm:
	docker rm $$(docker ps -aq) -f

docker-rmi:
	docker rmi $$(docker images -aq) -f