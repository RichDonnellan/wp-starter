<?php
global $post;

$articles = getPostTypePages($post->post_type);

$title = esc_html($post->post_title);
$thumbnail = get_the_post_thumbnail($post->ID, 'medium');
$excerpt = $post->post_excerpt;
