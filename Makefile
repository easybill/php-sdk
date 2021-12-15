current_dir = $(shell pwd)

make:
	composer install
	composer dump-autoload