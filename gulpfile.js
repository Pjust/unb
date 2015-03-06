var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    'jquery': './vendor/bower_components/jquery/',
    'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/'
}

elixir(function(mix) {
    mix.sass("app.scss", 'public_html/css/', {includePaths: [paths.bootstrap + 'stylesheets/']})
        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public_html/fonts')
        .scripts([
            paths.jquery + "dist/jquery.js",
            paths.bootstrap + "javascripts/bootstrap.js"
        ], 'public_html/js/app.js', './')
});

// elixir(function(mix) {
//     mix.less('app.less');
// });
