<?php

use WJH\Utils\StringUtils;
use PHPUnit\Framework\TestCase;

/**
 * StringUtilsTest
 *
 * @author Wajih WERIEMI <wajih@evensys.tn>
 */
class StringUtilsTest extends TestCase
{
    /**
     * Test testHumanizeDuration method
     */
    public function testHumanizeDuration()
    {
        $d1 = new DateTime('2009-10-11 10:05:33');
        $milliseconds1 = strtotime($d1->format('Y-m-d H:i:s'));
        $d2 = new DateTime('2009-10-11 14:20:10');
        $milliseconds2 = strtotime($d2->format('Y-m-d H:i:s'));
        $interval = abs($milliseconds1 - $milliseconds2) * 1000;

        $this->assertEquals('04:14:37', StringUtils::humanizeDuration($interval));
    }
}
