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
     * MultidimArrayUnique
     *
     * @param array  $array
     * @param string $key
     *
     * @return array
     */
    public static function MultidimArrayUnique(array $array, $key)
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
