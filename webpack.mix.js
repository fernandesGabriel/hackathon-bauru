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

// Compile JS
mix.js('resources/assets/js/app.js', 'public/js');

// Compile SASS
mix.sass('resources/assets/sass/app.scss', 'public/css')
    .version()
    .options({
        postCss: [
            require('postcss-css-variables')()
        ]
    });

mix.sass('resources/assets/sass/admin.scss', 'public/css')
    .version()
    .options({
        postCss: [
            require('postcss-css-variables')()
        ]
    });

// Additional settings
mix.version();

if (!mix.inProduction()) {
    mix.sourceMaps();
}

mix.webpackConfig({
    module: {
        rules: [{
            test: /\.js?$/,
            exclude: /(node_modules|bower_components)/,
            use: [{
                loader: 'babel-loader',
                options: mix.config.babel()
            }]
        }]
    }
});
