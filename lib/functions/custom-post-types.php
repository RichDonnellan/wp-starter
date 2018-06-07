<?php

/**
 * Register the custom post type.
 *
 * @return void
 */

function registerCustomPostType($name, $labels = [], $args = [])
{
    $labels = $labels;
    $args = $args;
    register_post_type($name, $args);
}

/**
 * Get all the post type features for the given post type
 *
 * @param array $exclude_features Array of features to exclude
 * @param array $include_features Array of features to include (features must be 'feature' => true)
 * @param string $post_type Given post type
 *
 * @return array
 */

function configurePostTypeFeatures($exclude_features = [], $include_features = [], $post_type = 'page')
{
    $configured_features = get_all_post_type_supports($post_type);
    if (!$exclude_features) {
        return array_keys($configured_features);
    }
    if ($include_features) {
        $configured_features = array_merge($configured_features, $include_features);
    }

    return array_keys(array_diff_key($configured_features, array_flip($exclude_features)));
}

/**
 * Get all the custom post types
 *
 * @return array
 */

function getCustomPostTypes()
{
    $args = [
        'public' => true,
        '_builtin' => false,
    ];
    return get_post_types($args);
}

/**
 * Check to see if it's the post type while ignoring the home page
 *
 * @param string $post_type
 *
 * @return boolean
 */

function isPostType($post_type)
{
    global $post;
    if(!$post) return;
    return $post->post_type === $post_type;
}

/**
 * Get all pages of a specific post type
 *
 * @param string $post_type
 *
 * @return boolean
 */

function getPostTypePages($post_type)
{
    global $post;
    $args = [
        'post_type' => $post_type,
        'numberposts' => -1,
    ];

    if ($post->post_type === $post_type) return get_posts($args);
}

/**
 * Set an alternate path for custom post type single templates
 *
 * @return string
 */

function setSingleTemplateForCustomPostTypes($single_template)
{
    global $post;
    $post_types = getCustomPostTypes();

    if (!$post_types) {
        return $single_template;
    }

    foreach ($post_types as $post_type) {
        if ($post->post_type === $post_type) {
            $single_template = THEME_DIR . "/page-templates/{$post_type}/single-{$post_type}.php";
        }
        return $single_template;
    }
}

/**
 * Set an alternate path for custom post type archive templates
 *
 * @return string
 */

function setArchiveTemplateForCustomPostTypes($archive_template)
{
    global $post;
    $post_types = getCustomPostTypes();

    if (!$post_types) {
        return $archive_template;
    }

    foreach ($post_types as $post_type) {
        if ($post->post_type === $post_type) {
           $archive_template = THEME_DIR . "/page-templates/{$post_type}/archive-{$post_type}.php";
        }
        return $archive_template;
    }
}
