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

    public function test_fiveMinutes_given1_shouldReturnXXXXXXXXXXX(){

        $actual = $this->getFiveMinutes("1");

        $this->assertEquals("XXXXXXXXXXX", $actual);
    }

    public function test_fiveMinutes_given5_shouldReturnYXXXXXXXXXX(){

        $actual = $this->getFiveMinutes("5");

        $this->assertEquals("YXXXXXXXXXX", $actual);
    }

    public function test_fiveMinutes_given6_shouldReturnYXXXXXXXXXX(){

        $actual = $this->getFiveMinutes("6");

        $this->assertEquals("YXXXXXXXXXX", $actual);
    }

    public function test_fiveMinutes_given10_shouldReturnYYXXXXXXXXX(){

        $actual = $this->getFiveMinutes("10");

        $this->assertEquals("YYXXXXXXXXX", $actual);
    }

    public function test_fiveMinutes_given15_shouldReturnYYRXXXXXXXX(){

        $actual = $this->getFiveMinutes("15");

        $this->assertEquals("YYRXXXXXXXX", $actual);
    }

    public function test_fiveMinutes_given20_shouldReturnYYRYXXXXXXX(){

        $actual = $this->getFiveMinutes("20");

        $this->assertEquals("YYRYXXXXXXX", $actual);
    }

    public function test_fiveMinutes_given46_shouldReturnYYRYYRYYRXX(){

        $actual = $this->getFiveMinutes("46");

        $this->assertEquals("YYRYYRYYRXX", $actual);
    }

    public function test_fiveMinutes_given60_shouldReturnXXXXXXXXXXX(){

        $actual = $this->getFiveMinutes("60");

        $this->assertEquals("XXXXXXXXXXX", $actual);
    }


    public function test_hours_given0_shouldReturnXXXX(){

        $actual = $this->getHours("0");

        $this->assertEquals("XXXX", $actual);
    }

    public function test_hours_given1_shouldReturnRXXX(){

        $actual = $this->getHours("1");

        $this->assertEquals("RXXX", $actual);
    }

    public function test_hours_given2_shouldReturnRRXX(){

        $actual = $this->getHours("2");

        $this->assertEquals("RRXX", $actual);
    }

    public function test_hours_given3_shouldReturnRRRX(){

        $actual = $this->getHours("3");

        $this->assertEquals("RRRX", $actual);
    }

    public function test_hours_given4_shouldReturnRRRR(){

        $actual = $this->getHours("4");

        $this->assertEquals("RRRR", $actual);
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

    /**
     * @return string
     */
    private function getHours($hour): string
    {
        return $this->berlinClock->hours($hour);
    }


}
