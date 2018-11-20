<?php
/**
 * https://css-tricks.com/hashes-in-wordpress-assets-with-enqueue/
 */
function enqueueFiles($ext)
{
    $type = $ext === 'css' ? 'style' : 'script'; // Enqueuing css or js?
    $wildcard = $ext === 'css' ? null : true; // unique to wp_enqueue_{type}

    $dir = new DirectoryIterator(THEME_DIR . "/dist/{$ext}/");

    foreach ($dir as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === $ext) {
            $fullName = basename($file);
            $name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));

            switch ($name) {

            case 'app':
                $deps = $ext === 'css' ? null : ['jquery'];
                break;

            default:
                $deps = null;
                break;

            }
            $func = "wp_enqueue_{$type}"; // Needed for interpolating $type
            $func($name, THEME_DIR_URI . "/dist/{$ext}/" . $fullName, $deps, null, $wildcard);
        }
    }
}

function enqueueScript($name, $src, $dep = [], $ver = false, $in_footer = false)
{
    wp_enqueue_script($name, $src, $dep, $ver, $in_footer);
}

function enqueueFont($font)
{
    wp_enqueue_style("TEXT_DOMAIN-fonts", $font, false);
}

function enqueueAssets()
{
    add_action('wp_enqueue_scripts', function () {
        enqueueFiles('css');
        enqueueFiles('js');
        enqueueFont('https://fonts.googleapis.com/css?family=Montserrat:300,400|Raleway:400,500,700|Shadows+Into+Light');
        enqueueScript('callrail', '//cdn.callrail.com/companies/885043551/9fc0b0e7540344aa6301/12/swap.js');
    });
}

enqueueAssets();
