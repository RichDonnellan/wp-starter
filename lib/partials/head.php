<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('font-sans leading-normal'); ?>>
