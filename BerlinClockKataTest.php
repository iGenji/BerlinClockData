<?php
require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{

    private $berlinClock;

    protected function setUp()
    {
        parent::setUp();
        $this->berlinClock = new BerlinClock();
    }



    public function test_minutes_given0_shouldReturnXXXX(){


        $actual = $this->getMinutes("0");

        $this->assertEquals("XXXX", $actual);
    }

    public function test_minutes_given1_shouldReturnYXXX(){

        $actual = $this->getMinutes("1");

        $this->assertEquals("YXXX", $actual);
    }

    public function test_minutes_given2_shouldReturnYYXX(){

        $actual = $this->getMinutes("2");

        $this->assertEquals("YYXX", $actual);
    }

    /**
     * @return string
     */
    private function getMinutes($nbMinute): string
    {
        return $this->berlinClock->minutes($nbMinute);
    }


}
