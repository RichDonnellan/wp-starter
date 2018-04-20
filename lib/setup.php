<?php

$soil = [
/**
 * Enable features from Soil when plugin is activated
 * @link https://roots.io/plugins/soil/
 */
    'soil-clean-up' => null,
    'soil-disable-asset-versioning' => null,
    'soil-disable-trackbacks' => null,
    'soil-jquery-cdn' => null,
    'soil-js-to-footer' => null,
    'soil-nav-walker' => null,
    'soil-nice-search' => null,
    'soil-relative-urls' => null,
];

$theme_support = [
    'title-tag' => null,
    'post-thumbnails' => null,
    'menus' => null,
    'yoast-seo-breadcrumbs' => null,
];

$menus = [
    'primary' => __('Primary Navigation', TEXT_DOMAIN),
    'footer' => __('Footer Navigation', TEXT_DOMAIN)
];

$image_sizes = [
    'featured-seo' => [
        'width' => 760,
        'height' => 265,
        'crop' => true
    ],
    'featured-full' => [
        'width' => 1440,
        'height' => 265
    ]
];

registerThemeSupport($soil);
registerThemeSupport($theme_support);
registerNavMenus($menus);
registerImageSizes($image_sizes);
