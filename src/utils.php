<?php

use WJH\Utils\DebugUtils;
use WJH\Utils\StringUtils;
use WJH\Utils\ArrayUtils;

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

if (!function_exists('humanize_duration')) {
    /**
     * Humanize duration
     *
     * @param int $milliseconds
     *
     * @return string
     */
    function humanize_duration($milliseconds)
    {
        return StringUtils::humanizeDuration($milliseconds);
    }
}

if (!function_exists('multidim_array_unique')) {
    /**
     * multidim_array_unique
     *
     * @param array  $array
     * @param string $key
     *
     * @return array
     */
    function multidim_array_unique($array, $key)
    {
        return ArrayUtils::multidimArrayUnique($array, $key);
    }
}
