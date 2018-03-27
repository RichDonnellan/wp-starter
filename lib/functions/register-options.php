<?php

function registerThemeSupport(array $config)
{
    foreach ($config as $feature => $args) {
        $args ? add_theme_support($feature, $args) : add_theme_support($feature);
    }
}

function registerNavMenus(array $config)
{
    foreach ($config as $menu => $args) {
        register_nav_menus([$menu, $args]);
    }
}

function registerImageSizes(array $config)
{
    foreach ($config as $name => $args) {
        $crop = array_key_exists('crop', $args) ? $args['crop'] : false;
        $height = array_key_exists('height', $args) ? $args['height'] : null;

        add_image_size($name, $args['width'], $height, $crop);
    }
}
