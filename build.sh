#!/bin/bash

ENV="$1"

if [ "$ENV" == "prod" ]; then
	# below is temporarily unnecessary as we're deploying with dev until prod is ready
	sudo composer install
	sudo php artisan key:generate
	sudo chmod -R 777 storage
	sudo chmod -R 777 bootstrap/cache
fi
if [ "$ENV" == "dev" ]; then
	# must manually composer install in the fatbooty/ root dir
	cp .env.example .env
	php artisan key:generate
	chmod -R 777 storage
	chmod -R 777 bootstrap/cache
	php artisan serve
fi
