<?php

use WJH\Dev\Utils\DebugUtils;

if (!function_exists('sd')) {
    /**
     * dump 0..n vars
     *
     * @param mixed $vars
     */
    function sd(...$vars)
    {
        return DebugUtils::Sd(...$vars);
    }
}
