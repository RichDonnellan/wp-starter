const mix = require('laravel-mix');

const config = {
  site: 'alcohol.test', // VM address
  themeName: path.basename(__dirname),
  publicPath: 'dist',
};

mix.setPublicPath(config.publicPath);
mix.setResourceRoot(`/app/themes/${config.themeName}/${config.publicPath}/`);

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your application.
 |
 */

mix
  .js('src/js/app.js', 'js')
  .sass('src/sass/app.scss', 'css')
  .copy('src/images/*', `${config.publicPath}/images`)
  .webpackConfig({
    devtool: 'source-map'
  })
  .sourceMaps();

if (!mix.inProduction()) {
  mix.browserSync({
    host: config.site,
    proxy: config.site,
    open: 'external',
    files: ['dist/**/*', '**/*.php']
  });
}

if (mix.inProduction()) {
  mix.version();
}
