const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    var bootstrapPath = 'node_modules/bootstrap-sass/assets';

    //app.scss imports bootstrap stylesheets but not bootstrap fonts or javascripts
    mix.sass('app.scss')
       .copy(bootstrapPath + '/fonts', 'public/fonts')
       .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js')
       .copy('vendor/components/jquery/jquery.min.js', 'public/js')
       .copy('vendor/components/jqueryui/jquery-ui.min.js', 'public/js')
       .copy('vendor/components/jqueryui/themes/base', 'public/css/base-theme')
       .webpack('app.js');
});
