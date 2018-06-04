<?php

$args = [
    'post_type' => 'page',
    'orderby' => 'rand',
    'posts_per_page' => 5,
];
$randomPages = get_posts($args);

get_header();
include(THEME_DIR . '/lib/structure/404.view.php');
get_footer();
