const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/login.js', 'public/js/login.js');

mix.js('resources/js/request.js', 'public/js/request.js');

mix.js('resources/js/plates.js', 'public/js/plates.js');

mix.js('resources/js/grocery.js', 'public/js/grocery.js');

mix.js('resources/js/web-socket.js', 'public/js/socket.js');

mix.js('resources/js/profile.js', 'public/js/profile.js');

mix.js(['resources/js/app.js'], 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
