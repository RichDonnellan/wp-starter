<?php

function deslugify($slug)
{
    return trim(preg_replace('/[\-]/', ' ', $slug));
}
