docker-start:
	docker-compose up -d --build && docker-compose exec api composer install

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

docker-phpunit:
	docker-compose exec api ./vendor/phpunit/phpunit/phpunit

docker-phpfixer:
	docker-compose exec api ./vendor/bin/php-cs-fixer fix

docker-phpstan:
	docker-compose exec api ./vendor/bin/phpstan analyse

phpunit:
	./vendor/phpunit/phpunit/phpunit

phpfixer:
	./vendor/bin/php-cs-fixer fix

phpstan:
	./vendor/bin/phpstan analyse

server:
	cd public/ && php -S 127.0.0.1:8008