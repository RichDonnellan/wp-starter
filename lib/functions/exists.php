<?php
/**
 * exists()
 *
 * Checks the value with isset and returns $mixed or empty string
 */
function exists(&$mixed)
{
    return (isset($mixed)) ? $mixed : '';
}
