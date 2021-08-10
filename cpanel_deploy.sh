#!/bin/bash
echo "Pull new changes.."
git reset --hard
git pull
echo "Starting deployment "
echo "exporting paths"
export DEPLOYPATH=/home/g72bht5yrxxn/sms_app
export PUBLIC_PATH=/home/g72bht5yrxxn/public_html/sms
export REPO_PATH=/home/g72bht5yrxxn/repositories/school-management-system
export ENV_SECRET_PATH=/home/g72bht5yrxxn/secret

mkdir -p $DEPLOYPATH

mkdir -p $PUBLIC_PATH

cd $DEPLOYPATH
# activate maintenance mode
php artisan down
cd $REPO_PATH
echo "copy main project to DEPLOYPATH"
yes | cp -rf  * $DEPLOYPATH #copy all to root
echo "copy public for sms project to public_html/sms subdomain"
#yes | cp -rf  ./public/. $PUBLIC_PATH #copy public files to public_html/sms

sync

echo "copy .env"
yes | cp -rf  $ENV_SECRET_PATH/sms.env $DEPLOYPATH/.env #copy .env for main

echo "install composer"
cd $DEPLOYPATH

php composer.phar install --no-interaction --prefer-dist --optimize-autoloader
php artisan optimize
yes|php artisan migrate:refresh --force --seed
yes|php artisan key:generate --force
# stop maintenance mode
php artisan up
php artisan optimize
php artisan route:trans:cache

#Cron Jobs
#/usr/local/bin/php /home/g72bht5yrxxn/artisan queue:work --queue=high,default >> /dev/null 2>&1
