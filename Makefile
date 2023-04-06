phpunit:
	./vendor/phpunit/phpunit/phpunit

phpfixer:
	./vendor/bin/php-cs-fixer fix

phpstan:
	./vendor/bin/phpstan analyse

server:
	cd public/ && php -S 127.0.0.1:8008