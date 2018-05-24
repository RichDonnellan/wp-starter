<?php

add_action('after_setup_theme', 'setupTheme');
function setupTheme()
{
    global $registered_image_sizes; // Set to global so the filter function can access

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
        'yoast-seo-breadcrumbs' => null,
    ];

    $menus = [
        'primary' => __('Primary Navigation', TEXT_DOMAIN),
        'primary-mobile' => __('Mobile Navigation', TEXT_DOMAIN),
        'footer' => __('Footer Navigation', TEXT_DOMAIN),
    ];

    $registered_image_sizes = [
        'featured-seo' => [
            'width' => 760,
            'height' => 265,
            'crop' => true,
            'displayed_as' => __('Featured SEO Image', TEXT_DOMAIN),
        ],
        'featured-full' => [
            'width' => 1440,
            'height' => 265,
            'displayed_as' => __('Featured Full-Width Image', TEXT_DOMAIN),
        ],
    ];

    registerThemeSupport($soil);
    registerThemeSupport($theme_support);
    registerNavMenus($menus);
    registerImageSizes($registered_image_sizes);
}
