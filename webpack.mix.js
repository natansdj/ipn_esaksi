let mix = require('laravel-mix');
// let path = require('path');

mix.webpackConfig({
  module: {
    rules: [
      {
        test: /\.(handlebars|hbs)$/,
        loader: 'handlebars-loader'
      }
    ]
  }
});

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
//SASS
mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.sass('resources/assets/sass/custom.scss', 'public/css');
mix.sass('resources/assets/sass/custom.vmap.scss', 'public/css/tmp');

//Main CSS
mix.styles([
  'public/css/app.css',
  'public/css/tmp/gijgo.min.css'
], 'public/css/main.css');

//VMAP
mix.styles([
  'public/css/tmp/jqvmap.min.css',
  'public/css/tmp/custom.vmap.css'
], 'public/css/vmap.css');


//JS
mix.js('resources/assets/js/app.js', 'public/js');
mix.js('resources/assets/js/custom.js', 'public/js');
mix.js('resources/assets/js/hbs_template.js', 'public/js/tmp');

mix.combine([
  'public/vendor/moment.js',
  'public/vendor/gijgo.min.js'
], 'public/js/vendor.js');

mix.combine([
  'public/vendor/jquery.vmap.min.js',
  'public/vendor/jquery.vmap.indonesia.js'
], 'public/js/jquery.vmap.js');

mix.combine([
  'resources/assets/js/vendor/datatables/buttons.server-side.js',
  'public/js/tmp/hbs_template.js'
], 'public/js/custom_datatables.js');
