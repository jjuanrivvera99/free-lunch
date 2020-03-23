web: vendor/bin/heroku-php-apache2 public/
queue: php /var/www/artisan queue:work redis --verbose --tries=3 --timeout=90
socket-io: node resources/js/socketio.js
