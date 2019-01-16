let mix = require('laravel-mix');

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

/*mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');*/
mix.styles([
'resources/assets/admin/assets/plugins/bootstrap/css/bootstrap.min.css',
'resources/assets/admin/assets/plugins/chartist-js/dist/chartist.min.css',
'resources/assets/admin/assets/plugins/chartist-js/dist/chartist-init.css',
'resources/assets/admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css',
'resources/assets/admin/assets/plugins/c3-master/c3.min.css',
'resources/assets/admin/assets/css/icons/flag-icon-css/flag-icon.min.css',
'resources/assets/admin/assets/css/icons/font-awesome/css/fontawesome-all.css',
'resources/assets/admin/assets/css/icons/linea-icons/linea.css',
'resources/assets/admin/assets/css/icons/material-design-iconic-font/css/materialdesignicons.min.css',
'resources/assets/admin/assets/css/icons/simple-line-icons/css/simple-line-icons.css',
'resources/assets/admin/assets/css/icons/themify-icons/themify-icons.css',
'resources/assets/admin/assets/css/icons/weather-icons/css/weather-icons.min.css',
'resources/assets/admin/assets/css/animate.css',
'resources/assets/admin/assets/css/spinners.css',
'resources/assets/admin/assets/css/style.css',
'resources/assets/admin/assets/css/colors/blue.css',
'resources/assets/admin/assets/css/tagsinput.css'
], 'public/css/admin.css');
mix.scripts([
'resources/assets/admin/assets/plugins/jquery/jquery.min.js',
'resources/assets/admin/assets/plugins/popper/popper.min.js',
'resources/assets/admin/assets/plugins/bootstrap/js/bootstrap.min.js',
'resources/assets/admin/assets/js/jquery.slimscroll.js',
'resources/assets/admin/assets/js/waves.js',
'resources/assets/admin/assets/js/sidebarmenu.js',
'resources/assets/admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js',
'resources/assets/admin/assets/plugins/sparkline/jquery.sparkline.min.js',
'resources/assets/admin/assets/js/custom.min.js',
'resources/assets/admin/assets/plugins/chartist-js/dist/chartist.min.js',
'resources/assets/admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js',
'resources/assets/admin/assets/plugins/d3/d3.min.js',
'resources/assets/admin/assets/plugins/c3-master/c3.min.js',
'resources/assets/admin/assets/js/dashboard1.js',
'resources/assets/admin/assets/plugins/styleswitcher/jQuery.style.switcher.js',
'assets/js/tagsinput.js'
    ], 'public/js/admin.js');
mix.copy([
'resources/assets/admin/assets/images'
], 'public/assets/images');
mix.copy([
  'resources/assets/admin/assets/css/icons/linea-icons/fonts',
    'resources/assets/admin/assets/css/icons/material-design-iconic-font/fonts',
    'resources/assets/admin/assets/css/icons/simple-line-icons/fonts',
    'resources/assets/admin/assets/css/icons/themify-icons/fonts',
    'resources/assets/admin/assets/css/icons/weather-icons/fonts'
], 'public/css/fonts');
mix.copy([
  'resources/assets/admin/assets/css/icons/font-awesome/webfonts'
], 'public/css/webfonts');
mix.copy([
  'resources/assets/admin/assets/css/icons/flag-icon-css/flags'
], 'public/css/flags');