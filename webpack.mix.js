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
mix.browserSync('paypal.test');

mix.sass('resources/scss/styles.scss', 'public/css');

mix.pug = require('laravel-mix-blade-pug');
mix.pug('resources/pug', 'resources/views');

mix.js('resources/js/general.js', 'public/js')
  	.extract(['jquery', 'slick-carousel','webui-popover', 'card', 'bullseye', 'jquery-zoom', 'jquery-match-height', 'jquery.localscroll']).autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
    });