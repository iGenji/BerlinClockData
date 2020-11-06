<?php
require "vendor/autoload.php";
require "BerlinClock.php";
use BerlinClock;
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

    /**
     * @return string
     */
    private function getMinutes($nbMinute): string
    {
        return $this->berlinClock->minutes($nbMinute);
    }


}
