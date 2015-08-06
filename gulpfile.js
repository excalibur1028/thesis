var elixir = require('laravel-elixir');

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
    mix.sass('app.scss');

    mix.scripts([
        'bootstrap.js',
        'adminlte.js'
    ],
        'public/js/plugins.js',
        'resources/assets/scripts/plugins'
    );

    mix.scripts([
        'app.js'
    ],
        'public/js/app.js',
        'resources/assets/scripts'
    );
});
