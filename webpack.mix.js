const mix = require('laravel-mix');

mix.less('resources/less/app.less', 'public/css/app.css')

    .styles([
        'node_modules/@fortawesome/fontawesome-free/css/fontawesome.css',
        'node_modules/@fortawesome/fontawesome-free/css/brands.css',
        'node_modules/@fortawesome/fontawesome-free/css/solid.css',
        'node_modules/@fortawesome/fontawesome-free/css/v5-font-face.css',
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css'
    ], 'public/css/core.css')

    .scripts([
        'node_modules/jquery/dist/jquery.js',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
        'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
        'node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js'
    ], 'public/js/core.js')

    .js('resources/js/app.js','public/js/app.js')
    .js('resources/js/swiper-briefcase.js','public/js/swiper-briefcase.js')

    .copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')

    .styles([
        'node_modules/photoswipe/dist/photoswipe.css',
    ], 'public/css/photoswipe.css')

    .scripts([
        'node_modules/photoswipe/dist/umd/photoswipe.umd.min.js',
        'node_modules/photoswipe/dist/umd/photoswipe-lightbox.umd.min.js',
    ], 'public/js/photoswipe.js')

if (mix.inProduction()) {
    mix.version();
}
