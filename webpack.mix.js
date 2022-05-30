const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/assets/app.js')
    .sass('resources/css/app.sass', 'public/assets/app.css');
