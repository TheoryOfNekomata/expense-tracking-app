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

elixir.config.sourcemaps = true;

elixir.config.js.browserify.transformers.push({
    name: 'browserify-ngannotate',
    options: {}
});

elixir(function(mix) {
    mix.sass('app.scss');

    mix.copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts');

    mix.browserify('app.js');

    mix.copy('node_modules/angular/angular-csp.css', 'public/css');
});
