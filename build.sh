#!/bin/bash

ENV="$1"

if [ "$ENV" == "prod" ]; then
	sudo cp .env.example .env
	sudo composer install
	sudo php artisan key:generate
	sudo chmod -R 777 storage
	sudo chmod -R 777 bootstrap/cache
fi
if [ "$ENV" == "dev" ]; then
	# must manually composer install in the fatbooty/ root dir
	sudo cp .env.example .env
	sudo php artisan key:generate
	sudo chmod -R 777 storage
	sudo chmod -R 777 bootstrap/cache
	sudo php artisan serve
fi