<?php
/**
 * Initialize the theme's constants.
 */

function initConstants()
{
    $theme = wp_get_theme();
    define('THEME_NAME', $theme->get('Name'));
    define('THEME_URL', $theme->get('ThemeURI'));
    define('THEME_VERSION', $theme->get('Version'));
    define('TEXT_DOMAIN', $theme->get('TextDomain'));

    define('THEME_DIR', get_template_directory());
    define('THEME_DIR_URI', get_template_directory_uri());
    define('IMAGE_DIR', '/dist/images/');
    define('DIST_URL', THEME_DIR_URI . '/dist/');

    define('CALLRAIL_PHONE', '888-685-5770');
}

initConstants();
