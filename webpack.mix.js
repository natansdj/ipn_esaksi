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

mix.js('resources/assets/js/app.js', 'public/js');

mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.sass('resources/assets/sass/custom.scss', 'public/css');
mix.sass('resources/assets/sass/custom.vmap.scss', 'public/css');

mix.js('resources/assets/js/custom.js', 'public/js');

mix.js('resources/assets/js/datatables.js', 'public/js');