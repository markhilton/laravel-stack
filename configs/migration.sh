#!/bin/bash

# this script will be executed on php-fpm container start 
# in order to run laravel migrations, so you don't have to
mysql -h mysql -u $DB_USERNAME -D $DB_DATABASE --password=$DB_PASSWORD -e 'SELECT version();' && \

cd /var/www/ && \

php artisan migrate
