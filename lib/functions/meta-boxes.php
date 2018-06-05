<?php

add_filter('rwmb_meta_boxes', 'createCustomMetaBoxes');
function createCustomMetaBoxes(array $meta_boxes)
{
    $prefix = 'alc-';

    $meta_boxes[] = [
        'id' => 'alt-title',
        'title' => 'Alternate Title',
        'post_types' => ['post', 'page'],
        'context' => 'before_permalink',
        'priority' => 'default',
        'fields' => [
            [
                'id' => $prefix . 'alt-title',
                'type' => 'text',
                'desc' => 'Enter an alternate title to change how it appears in the Further Reading section.',
                'size' => 100,
            ],
        ],
    ];

    return $meta_boxes;
}
