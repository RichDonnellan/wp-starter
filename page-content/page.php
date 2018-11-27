<?php

global $post;
$parent_slug_titled = ucwords(deslugify(get_post($post->post_parent)->post_name)); // SEO pages

$title = esc_html($post->post_title);
$content = do_shortcode(wpautop($post->post_content));
