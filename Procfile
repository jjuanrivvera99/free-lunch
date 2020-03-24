web: vendor/bin/heroku-php-apache2 public/
worker: php artisan queue:work redis --verbose --tries=3 --timeout=90
scheduler: while true; do php artisan schedule:run --verbose --no-interaction & sleep 60; done
