<?php

use WJH\Utils\ArrayUtils;
use PHPUnit\Framework\TestCase;

/**
 * ArrayUtilsTest
 *
 * @author Wajih WERIEMI <wajih@evensys.tn>
 */
class ArrayUtilsTest extends TestCase
{
    /**
     * Test mutltidimArrayUnique method
     */
    public function testMutltidimArrayUnique()
    {
        $array = [
            [
                "id" => 1,
                "name" => "foo",
            ],
            [
                "id" => 2,
                "name" => "bar",
            ],
            [
                "id" => 1,
                "name" => "bla",
            ],
        ];

        $array = ArrayUtils::multidimArrayUnique($array, 'id');

        $this->assertEquals(
        	2,
        	count($array)
        );
        $this->assertEquals([
            [
                "id" => 1,
                "name" => "foo",
            ],
            [
                "id" => 2,
                "name" => "bar",
            ],
        ], $array);
    }
}
