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

mix
   .scripts([
      'resources/plantilla/js/general.js',
   ], 'public/js/plantilla.js')
   .styles([
      'resources/plantilla/css/general.css',
   ], 'public/css/plantilla.css')
   .js([
      'resources/js/app.js'
   ], 'public/js/app.js');
