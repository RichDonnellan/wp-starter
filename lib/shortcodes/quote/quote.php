<?php

$modifier = setPositionClass($shortcode_name, $position);
$sourced = isSourced($source);

function isSourced($source)
{
    if (!$source) return;
    return 'is-sourced';
}

include(THEME_DIR . '/lib/shortcodes/quote/quote.view.php');
