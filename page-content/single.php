<?php
global $post;

$title = esc_html($post->post_title);
$content = wpautop($post->post_content);
