<?php

class BerlinClock{

    public function minutes(string $minutes) : string{
        if($minutes%5 == "1") return "YXXX";
        if($minutes%5 == "2") return "YYXX";
        if($minutes%5 == "3") return "YYYX";
        if($minutes%5 == "4") return "YYYY";
        return "XXXX";
    }


}
