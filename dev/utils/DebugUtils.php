<?php

namespace WJH\Dev\Utils;

/**
 * DebugUtils
 *
 * @author Wajih WERIEMI <wajih@evensys.tn>
 */
class DebugUtils
{
    /**
     * Dump 1..n vars
     *
     * @param mixed $vars
     */
    public static function Sd(...$vars)
    {
        s(...$vars);
        exit;
    }
}
