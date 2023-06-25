#!bin/bash
mv .env.example .env
composer update
php artisan cache:clear
php artisan view:clear
php artisan route:clear
php artisan clear:compiled
php artisan config:cache
php artisan config:clear
php artisan migrate:refresh
composer dump-autoload
php artisan key:generate
npm install

