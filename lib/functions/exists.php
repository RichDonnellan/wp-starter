<?php
/**
 * exists()
 *
 * Checks whether a variable or object property exists. Replaces
 * the repeated pattern: isset($mixed) ? $mixed : 'false value'
 *
 * @param mixed $name
 * @param mixed $else
 * @return mixed
 *
 */
function exists(&$mixed, $else = '')
{
    return (!empty($mixed)) ? $mixed : $else;
}
