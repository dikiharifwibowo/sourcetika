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

mix.js('resources/assets/js/app.js', 'public/js/app.js').version();

// mix.js('resource/assets/theme/user/js/mdb.min.js', 'public/js/mdb.js')
//    .sass('resource/assets/theme/user/css/mdb.min.css', 'public/css/mdb.css')

// new BrowserSyncPlugin({
// 	open: 'external',
// 	host: 'example.dev',
// 	proxy: 'example.dev',
// 	files: ['protected/resources/views/**/*.php', 'protected/app/**/*.php', 'protected/routes/**/*.php']
// })

mix.browserSync({
    proxy: 'my-domain.dev'
})