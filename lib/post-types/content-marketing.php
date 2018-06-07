<?php

function registerContentMarketingPostType()
{
    $labels = [
        'singular_name' => __('Guide', TEXT_DOMAIN),
        'name_admin_bar'  => __('Guide', TEXT_DOMAIN),
        'add_new_item' => __('Add New Guide', TEXT_DOMAIN),
        'new_item'  => __('New Guide', TEXT_DOMAIN),
        'edit_item' => __('Edit Guide', TEXT_DOMAIN),
        'view_item' => __('View Guide', TEXT_DOMAIN),
        'view_items' => __('View Guides', TEXT_DOMAIN),
        'all_items' => __('All Guides', TEXT_DOMAIN),
        'search_items' => __('Search Guides', TEXT_DOMAIN),
        'parent_item_colon' => __('Parent Guides:', TEXT_DOMAIN),
        'attributes' => __('Page Attributes', TEXT_DOMAIN),
        'not_found' => __('No Guides found.', TEXT_DOMAIN),
        'not_found_in_trash' => __('No Guides found in Trash.', TEXT_DOMAIN),
    ];

    $features = configurePostTypeFeatures(
        $exclude_features = [
            'comments',
            'custom-fields',
        ],

        $include_features = [
            'excerpt' => true,
        ]
    );

    $args = [
        'label' => __('Guides', TEXT_DOMAIN),
        'labels' => $labels,
        'description' => 'Used for content marketing pieces (e.g. Fractl)',
        'public' => true,
        'supports' => $features,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-book-alt',
        'menu_position' => 5,
        'has_archive' => true,
        'rewrite' => [
            'slug' => __('guides', TEXT_DOMAIN),
        ]
    ];

    registerCustomPostType('content-marketing', $labels, $args);
}
