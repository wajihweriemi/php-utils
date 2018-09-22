<?php

use WJH\Utils\ArrayUtils;

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
