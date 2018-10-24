<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <?php
            wp_head();
            include(THEME_DIR . '/lib/partials/google-tag-manager.php');
        ?>

    </head>
    <body <?php body_class('font-sans leading-normal text-dark'); ?>>
    <?php include(THEME_DIR . '/lib/partials/ns-google-tag-manager.php'); ?>
