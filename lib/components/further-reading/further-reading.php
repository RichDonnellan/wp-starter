<?php

function getLinks($relationship = 'children', $number_of_links = 15)
{
    global $post;
    $args = [
        'number' => $number_of_links,
        'sort_column' => 'menu_order',
    ];
    if ($relationship === 'children') {
        $args['parent'] = $post->ID;
    }
    if ($relationship === 'sibling') {
        $parent = get_post_ancestors($post->ID);
        $args['parent'] = $parent;
        $args['exclude'] = $post->ID;
    }
    $links = get_pages($args);
    getAltTitle($links);
    return $links;
}

function getAltTitle($articles)
{
    $alt_title = [];
    foreach ($articles as $article) {
        $article->alt_title = get_post_meta($article->ID, 'alc-alt-title', true);
    }
    return $alt_title;
}

$articles = getLinks() ? getLinks() : getLinks('sibling');

include(THEME_DIR . '/lib/components/further-reading/further-reading.view.php');
