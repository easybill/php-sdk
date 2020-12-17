current_dir = $(shell pwd)

make:
	composer install
	composer dump-autoload

cs-fix:
	./vendor/bin/php-cs-fixer fix ./src --config .php_cs.dist
	./vendor/bin/php-cs-fixer fix ./examples --config .php_cs.dist