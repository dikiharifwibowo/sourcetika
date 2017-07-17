const { mix } = require('laravel-mix');

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

// mix.js('theme/user/js/mdb.min.js', 'js/app.js');
   // .sass('theme/user/css/mdb.min.css', 'css');

new BrowserSyncPlugin({
	open: 'external',
	host: 'example.dev',
	proxy: 'example.dev',
	files: ['protected/resources/views/**/*.php', 'protected/app/**/*.php', 'protected/routes/**/*.php']
})