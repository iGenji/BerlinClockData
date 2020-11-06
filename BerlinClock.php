<?php

class BerlinClock{

    public function minutes(string $minutes) : string{
        if($minutes%5 == "1") return "YXXX";
        if($minutes%5 == "2") return "YYXX";
        if($minutes%5 == "3") return "YYYX";
        if($minutes%5 == "4") return "YYYY";
        return "XXXX";
    }

    public function fiveMinutes($minutes) : string{
        if($minutes >= "60") return "XXXXXXXXXXX";
        if($minutes >= "55") return "YYRYYRYYRYY";
        if($minutes >= "50") return "YYRYYRYYRYX";
        if($minutes >= "45") return "YYRYYRYYRXX";
        if($minutes >= "40") return "YYRYYRYYXXX";
        if($minutes >= "35") return "YYRYYRYXXXX";
        if($minutes >= "30") return "YYRYYRXXXXX";
        if($minutes >= "25") return "YYRYYXXXXXX";
        if($minutes >= "20") return "YYRYXXXXXXX";
        if($minutes >= "15") return "YYRXXXXXXXX";
        if($minutes >= "10") return "YYXXXXXXXXX";
        if($minutes >= "5") return "YXXXXXXXXXX";
        return "XXXXXXXXXXX";
    }

    public function hours($nbHours) : string {
        if($nbHours % 5 == "4") return "RRRR";
        if($nbHours % 5 == "3") return "RRRX";
        if($nbHours % 5 == "2") return "RRXX";
        if($nbHours % 5 == "1") return "RXXX";
        return "XXXX";
    }

    public function fiveHours($nbHours) : string{
        if($nbHours >= "20") return "RRRR";
        if($nbHours >= "15") return "RRRX";
        if($nbHours >= "10") return "RRXX";
        if($nbHours >= "5") return "RXXX";
        return "XXXX";
    }

    public function seconds($nbSeconds) : string{
        if($nbSeconds % 2 == "1") return "X";
        return "R";
    }


}
