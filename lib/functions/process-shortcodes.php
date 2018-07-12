<?php

function getDirectories($dir = '/lib/shortcodes')
{
    return array_values(preg_grep('/^([^.])/', scandir(THEME_DIR . $dir)));
}

function processShortcode($user_defined_attributes, $the_content = null, $shortcode_name)
{
    $config = getShortcodeConfiguration($shortcode_name);
    $attributes = extract(shortcode_atts(
        $config['defaults'],
        $user_defined_attributes,
        $shortcode_name
    ));

    ob_start();
    include(THEME_DIR . "/lib/shortcodes/$shortcode_name/$shortcode_name.php");
    return ob_get_clean();
}

function getShortcodeConfiguration($shortcode_name)
{
    return include(THEME_DIR . "/lib/shortcodes/$shortcode_name/$shortcode_name.config.php");
}

function loadShortcodes()
{
    $shortcodes = getDirectories();
    foreach ($shortcodes as $shortcode) {
        add_shortcode($shortcode, 'processShortcode');
    }
}

loadShortcodes();
