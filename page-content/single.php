<?php
global $post;

$title = esc_html($post->post_title);
$content = do_shortcode(wpautop($post->post_content));
