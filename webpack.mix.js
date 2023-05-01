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

mix.js('resources/js/app.js', 'public/js/app.js')
    .postCss('resources/css/app.css', 'public/css/app.css', [
        //
    ]);

mix.styles([
    'resources/themes/backend/assets/css/dashlite.css',
    'resources/themes/backend/assets/css/theme.css'
], 'public/backend/css/app.css');

mix.scripts([
    'resources/themes/backend/assets/js/bundle.js',
    'resources/themes/backend/assets/js/scripts.js'
], 'public/backend/js/app.js');

mix.copy('resources/themes/backend/assets/images',
    'public/backend/images');

mix.copyDirectory('resources/themes/backend/assets/fonts',
    'public/backend/assets/fonts');