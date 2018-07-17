<?php
global $post;

$title = esc_html($post->post_title);
$content = wpautop(do_shortcode($post->post_content));
