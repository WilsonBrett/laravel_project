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

/*
    app.scss imports bootstrap stylesheets but not bootstrap fonts or javascripts
        bootstrap fonts and js's are moved to public folder using copy functions below
    app.scss also imports scss for font awesome
    mix.sass resolves all the scss files being imported into app.scss and combines them
        into one file app.css which is placed into public/css
*/

elixir(function(mix) {
    var bootstrapPath = 'node_modules/bootstrap-sass/assets';
    var fontAwesomePath = 'vendor/fortawesome/font-awesome';

    mix.sass('app.scss')
       .copy(bootstrapPath + '/fonts', 'public/fonts')
       .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js')
       .copy(fontAwesomePath + '/fonts', 'public/fonts')
       .copy('vendor/components/jquery/jquery.min.js', 'public/js')
       .copy('vendor/components/jqueryui/jquery-ui.min.js', 'public/js')
       .copy('vendor/components/jqueryui/themes/base', 'public/css/base-theme')
       .webpack('app.js');
});
