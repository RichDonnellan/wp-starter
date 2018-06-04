<?php
/**
 * imagePath()
 *
 * Global image path to built images folder.
 */
function imagePath($src)
{
    return THEME_DIR_URI . IMAGE_DIR . exists($src);
}
