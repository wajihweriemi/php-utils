<?php

namespace WJH\Utils;

/**
 * ArrayUtils
 *
 * @author Wajih WERIEMI <wajih@evensys.tn>
 */
class ArrayUtils
{
    /**
     * multidimArrayUnique Perform an array unique based by key
     *
     * @param array  $array
     * @param string $key
     *
     * @return array
     */
    public static function multidimArrayUnique(array $array, $key)
    {
        $tempArray = [];
        $i = 0;
        $keyArray = [];

        foreach ($array as $val) {
            if (!in_array($val[$key], $keyArray)) {
                $keyArray[$i] = $val[$key];
                $tempArray[$i] = $val;
            }
            $i++;
        }

        return $tempArray;
    }
}
