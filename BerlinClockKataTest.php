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

    public function test_minutes_given3_shouldReturnYYYX(){

        $actual = $this->getMinutes("3");

        $this->assertEquals("YYYX", $actual);
    }

    public function test_minutes_given4_shouldReturnYYYY(){

        $actual = $this->getMinutes("4");

        $this->assertEquals("YYYY", $actual);
    }

    public function test_minutes_given5_shouldReturnXXXX(){

        $actual = $this->getMinutes("5");

        $this->assertEquals("XXXX", $actual);
    }

    public function test_fiveMinutes_given0_shouldReturnXXXXXXXXXXX(){

        $actual = $this->getFiveMinutes("0");

        $this->assertEquals("XXXXXXXXXXX", $actual);
    }

    /**
     * @return string
     */
    private function getMinutes($nbMinute): string
    {
        return $this->berlinClock->minutes($nbMinute);
    }

    /**
     * @return string
     */
    private function getFiveMinutes($minute): string
    {
        return $this->berlinClock->fiveMinutes($minute);
    }


}
