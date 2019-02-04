sudo cp .env.example .env
sudo composer install
sudo php artisan key:generate
sudo chmod -R 777 storage
sudo chmod -R 777 bootstrap/cache