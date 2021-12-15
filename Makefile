current_dir = $(shell pwd)

make:
	composer install
	composer dump-autoload

cs-fix:
	./vendor/bin/php-cs-fixer fix ./src --config .php-cs-fixer.dist.php
	./vendor/bin/php-cs-fixer fix ./examples --config .php-cs-fixer.dist.php