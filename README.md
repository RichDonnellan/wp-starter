# Alcohol.org

### Getting Started
1. Clone the boilerplate:
`git clone git@github.com:American-Addiction-Centers/wp-boilerplate.git alcohol.test`

1. Install PHP dependencies:
`composer install`

1. Move into theme directory:
`cd web/app/themes`

1. Clone the theme:
`git clone git@github.com:American-Addiction-Centers/alcohol-org-v2.git`

1. Install npm dependencies:
`npm install`

### Laravel Mix
To compile assets, we'll be using [Laravel Mix](https://github.com/JeffreyWay/laravel-mix/tree/master/docs), a fluent wrapper API for defining basic webpack build steps. Use the following npm scripts to build your project:

- `npm run build` - builds the files
- `npm run watch` - builds the files and fires up BrowserSync
- `npm run production` - builds the files for production use