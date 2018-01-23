const mix = require('laravel-mix');

const config = {
  site: 'alcohol.test', // VM address
  repoName: path.basename(__dirname),
  publicPath: 'dist',
};

mix.setPublicPath(config.publicPath);
mix.setResourceRoot(`/app/themes/${config.repoName}/${config.publicPath}/`);

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
  .postCss('src/css/app.css', 'css', [
    require('tailwindcss')('./tailwind-config.js'),
    require('precss'),
  ]);

if (mix.inProduction()) {
  mix.sourceMaps();
  mix.version();
}

mix.browserSync({
  host: config.site,
  proxy: config.site,
  open: 'external',
  files: ['dist/**/*', '**/*.php']
});
