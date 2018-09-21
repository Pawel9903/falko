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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
.styles([
    // 'resources/template/css/bootstrap.min.css',
    'resources/template/css/themify-icons.css',
    'resources/template/font-awesome/css/font-awesome.css',
    'resources/template/css/animated-stock.css',
    'resources/template/css/owl.carousel.css',
    'resources/template/css/owl.theme.css',
    'resources/template/css/owl.transitions.css',
    'resources/template/css/stock-style.css',
    'resources/template/css/queries-stock.css',
],'public/css/template.css')
    .sass('resources/sass/custom/_custom.scss','public/css/custom.css')


.scripts([
    'resources/template/plugin/pluginsstock.js',
    'resources/template/js/stock.js',
],'public/js/template.js');