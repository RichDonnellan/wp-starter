<?php

function render($templatePath, $data = [])
{
    if ($data) {
        $data = (object) $data;
    }
    include(THEME_DIR . $templatePath);
}
