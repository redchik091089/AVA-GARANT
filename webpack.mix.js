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
    .postCss('resources/css/app.css', 'public/css',[
        require('postcss-custom-properties')
    ]);

// mix.css([
//     'resources/css/bootstrap.css',
//     'resources/css/bootstrap-reboot.css',
//     'resources/css/font-awesome.min.css',
//     'resources/css/icomoon.css',
//     'resources/css/jquery.fancybox.min.css',
//     'resources/css/jquery.mCustomScrollbar.min.css',
//     'resources/css/responsive.css',
//     'resources/css/style.css'
// ], 'public/css/styles.css');
//
// mix.js([
//     'resources/js/bootstrap.bundle.min.js',
//     'resources/js/custom.js',
//     'resources/js/jquery.mCustomScrollbar.concat.min.js',
//     'resources/js/jquery.min.js',
//     'resources/js/jquery-3.0.0.min.js',
//     'resources/js/popper.min.js'
// ], 'public/js/scripts.js');
