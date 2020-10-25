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

mix.setResourceRoot("/Visual Studio Code/TeresaLupoNews/public")
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

 


// mix.setResourceRoot("//philmymusicband.000webhostapp.com/public_html")
//     .js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');
