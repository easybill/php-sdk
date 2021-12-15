current_dir = $(shell pwd)

make:
	composer install
	composer dump-autoload

cs-fix:
	./vendor/bin/php-cs-fixer fix