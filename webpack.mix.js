const mix = require('laravel-mix');

const config = {
  site: 'alcohol.test', // VM address
  themeName: path.basename(__dirname),
  publicPath: 'dist',
  sourcePath: 'assets',
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
  .js(`${config.sourcePath}/js/app.js`, 'js')
  .sass(`${config.sourcePath}/sass/app.scss`, 'css')
  .copy(`${config.sourcePath}/images/*`, `${config.publicPath}/images`)
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
