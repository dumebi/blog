const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')

        .styles([
                'skins/_all-skins.min.css',
                'AdminLTE.min.css',
                'bootstrap.min.css',
                'dataTables.bootstrap.css',
                'jquery.dataTables.css',
                'select2.min.css'


        ], './public/css/libs.css')
        .scripts([

                'bootstrap.min.js',
                'jquery.min.js',
                'pages/dashboard.js',
                'dataTables.bootstrap.js',
                'jquery.dataTables.js',
                'select2.full.min.js',
                'app.js'

                ], './public/js/libs.js')
});
