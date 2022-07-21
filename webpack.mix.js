// webpack.mix.js

let mix = require('laravel-mix');

mix.js('assets/js/app.js', 'build').setPublicPath('public/build')
mix.sass('assets/style/app.scss', 'public/build')

