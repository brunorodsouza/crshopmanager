const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/login.js', 'public/static/js/login.js')
    .js('resources/js/pessoa.js', 'public/static/js/pessoa.js')
    .js('resources/js/jqueryMask-cep-pessoa.js', 'public/static/js/jqueryMask-cep-pessoa.js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
