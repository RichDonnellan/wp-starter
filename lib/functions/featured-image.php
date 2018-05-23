<?php
/**
 * Retrieves the post thumbnail or default_image-${size} URL
 *
 * @param string $size - Will either be full (default) or seo
 * @param string $ext - Used for default featured image extension
 * @return string
 */

function getFeaturedImage($size = 'full', $ext = 'jpg')
{
    global $post;
    $default_image = 'default-featured-image';
    $featured_image = (object) [
        'image' => get_the_post_thumbnail_url($post->ID, "featured-${size}") ?: imagePath("$default_image-${size}.${ext}"),
        'size'  => $size,
    ];
    return $featured_image;
}
