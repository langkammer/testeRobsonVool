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
.js([
     'resources/assets/js/app.js', 
     'resources/js/scripts/app.js'
    ],
 'public/js')
.sass('resources/assets/sass/app.scss', 'public/css')
.copy('resources/assets/summernote/dist/summernote.css','public/css')
.copy('resources/assets/summernote/dist/font/summernote.ttf','public/css/font')
.copy('resources/assets/summernote/dist/font/summernote.woff','public/css/font')
.copy('resources/assets/summernote/dist/summernote.min.js','public/js')
.copy('resources/assets/jquery/dist/jquery.min.js','public/js')
.copy('resources/assets/chosen/chosen.min.css','public/css')
.copy('resources/assets/chosen/chosen.jquery.min.js','public/js');

