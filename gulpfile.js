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
    app.scss also imports scss for font awesome and my sass styles
    mix.sass resolves all the scss files being imported into app.scss and combines them
        into one file app.css which is placed into public/css
*/

elixir(function(mix) {

    //resolves all import statements in app.scss and outputs app.css in public/css dir
    //@TODO:  having trouble using elixir to bring in bootstrap - importing in app.scss works for now.
    mix.sass(['app.scss',
              './vendor/components/jqueryui/themes/base/jquery-ui.css'
    ]);

    //concatenates js files and puts them into in public/js/all.js
    mix.scripts(['./node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
                 './vendor/components/jquery/jquery.js',
                 './vendor/components/jqueryui/jquery-ui.js',
                 'main.js'
    ]);

    //move bootstrap and font-awesome fonts to public fonts dir
    mix.copy(['node_modules/bootstrap-sass/assets/fonts',
              'vendor/fortawesome/font-awesome/fonts'
             ], 'public/fonts');

    //jquery ui themes
    mix.copy('./vendor/components/jqueryui/themes/base', 'public/css/jqueryui_themes');

    mix.webpack('app.js');
});
