# Alcohol.org

### Getting Started
1. Clone the boilerplate:
`git clone git@github.com:American-Addiction-Centers/wp-boilerplate.git alcohol.test`

1. Install PHP dependencies:
`composer install`

1. Move into theme directory:
`cd web/app/themes`

1. Clone the theme:
`git clone git@github.com:American-Addiction-Centers/alcohol-org.git`

1. Install npm dependencies:
`npm install`

1. Install PHP dependencies (plugins):
`composer install`

### Laravel Mix
To compile assets, we'll be using [Laravel Mix](https://github.com/JeffreyWay/laravel-mix/tree/master/docs), a fluent wrapper API for defining basic webpack build steps. Use the following npm scripts to build your project:

- `npm run clean` - removes the `dist` folder
- `npm run build` - builds the files
- `npm run watch` - builds the files and fires up BrowserSync
- `npm run production` - builds the files for production use

### Tailwind CSS
This theme relies heavily on the utility-first (customizable) framework, Tailwind CSS. It's highly suggested to read the [documentation](https://tailwindcss.com/docs/what-is-tailwind) and understand the concept behind this methodology.

> Tailwind provides highly composable, low-level utility classes that make it easy to build complex user interfaces without encouraging any two sites to look the same.

It's also component friendly:

> Tailwind provides tools for extracting component classes from repeated utility patterns, making it easy to update multiple instances of a component ...

Functions and directives make it a breeze to generate variants (responsive, hover, focus, and group-hover) of custom utilities. What about media queries:

> The @screen directive allows you to create media queries that reference your breakpoints by name instead of duplicating their values in your own CSS.

How cool is that?