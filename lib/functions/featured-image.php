<?php

function getFeaturedImage($size = 'full', $ext = 'jpg')
{
    $default_image = 'default-featured-image';
    $fi = (object) [
        'image' => get_the_post_thumbnail($size) ?: imagePath("$default_image-${size}.${ext}"),
        'size'  => $size,
    ];
    return $fi;
}
