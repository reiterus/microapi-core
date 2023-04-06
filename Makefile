phpunit:
	./vendor/phpunit/phpunit/phpunit

phpfixer:
	~/tools/php-cs-fixer/vendor/bin/php-cs-fixer fix

phpstan:
	~/tools/phpstan/vendor/bin/phpstan

server:
	cd public/ && php -S 127.0.0.1:8008