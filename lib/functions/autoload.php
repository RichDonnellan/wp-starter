<?php
/**
 * Theme required files
 *
 * The $required_files array determines the code library required in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */

function loadThemeFiles()
{
    $required_files = [
        'lib/init.php',

        'lib/functions/register-options.php',
        'lib/functions/enqueue-assets.php',
        'lib/functions/image-path.php',
        'lib/functions/render.php',
        'lib/functions/featured-image.php',
        'lib/functions/exists.php',
        'lib/functions/meta-boxes.php',
        'lib/functions/custom-post-types.php',
        'lib/functions/process-shortcodes.php',
        'lib/functions/deslugify.php',

        'lib/post-types/content-marketing.php',

        'lib/setup.php',
    ];

    loadFiles($required_files);
}

function loadFiles(array $files)
{
    foreach ($files as $file) {
        if (!$filepath = locate_template($file)) {
            trigger_error(sprintf(__('Error locating %s for inclusion', TEXT_DOMAIN), $file), E_USER_ERROR);
        }
        require_once($filepath);
    }
    unset($file, $filepath);
}

loadThemeFiles();
