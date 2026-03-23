<?php

echo "\nPRIMJERI FUNKCIJA".PHP_EOL;

// ============================================================
// HR: Funkcija koja za proslijeđeni datum vraća naziv dana na hrvatskom
//     Kombinira date(), strtotime() i switch
// EN: Function that returns day name in Croatian for given date
//     Combines date(), strtotime() and switch
// ============================================================
function VratiDanZaDatum($datum){

    // HR: strtotime() - pretvara datum string u Unix timestamp
    //     date("l", timestamp) - vraća naziv dana na engleskom (Monday, Tuesday...)
    // EN: strtotime() - converts date string to Unix timestamp
    //     date("l", timestamp) - returns day name in English (Monday, Tuesday...)
    $danENG = date("l", strtotime($datum));

    switch($danENG){
        case "Monday":    $danCRO = "Ponedjeljak"; break;
        case "Tuesday":   $danCRO = "Utorak";      break;
        case "Wednesday": $danCRO = "Srijeda";     break;
        case "Thursday":  $danCRO = "Četvrtak";    break;
        case "Friday":    $danCRO = "Petak";        break;
        case "Saturday":  $danCRO = "Subota";      break;
        case "Sunday":    $danCRO = "Nedjelja";    break;
    }

    // HR: return vraća string s nazivom dana nazad pozivatelju
    // EN: return sends the day name string back to the caller
    return $danCRO;
}

echo "\nDan za datum 15.04.2019 je bio: ".VratiDanZaDatum("15.04.2019");

// ============================================================
// HR: Funkcija za generiranje slučajnog datuma
//     Prima početnu godinu, generira datum do današnje godine
//     Vodi računa o broju dana u svakom mjesecu (i prijestupnoj godini!)
// EN: Function for generating random date
//     Takes starting year, generates date up to current year
//     Accounts for number of days in each month (and leap years!)
// ============================================================
function GenerirajSlucajniDatum($pocetnaGod){

    // HR: rand() za godinu od $pocetnaGod do trenutne
    // EN: rand() for year from $pocetnaGod to current
    $gg = rand($pocetnaGod, date("Y"));
    $mm = rand(1, 12);

    // HR: Provjera broja dana ovisno o mjesecu
    //     Veljača (2): 29 dana ako je prijestupna godina ($gg%4==0), inače 28
    //     Prijestupna godina: djeljiva s 4
    // EN: Check number of days depending on month
    //     February (2): 29 days if leap year ($gg%4==0), otherwise 28
    //     Leap year: divisible by 4
    if($mm == 2){
        if($gg % 4 == 0){
            $dd = rand(1, 29);  // HR: prijestupna godina / EN: leap year
        } else {
            $dd = rand(1, 28);
        }
    }
    // HR: Mjeseci s 31 danom: 1,3,5,7,8,10,12
    // EN: Months with 31 days: 1,3,5,7,8,10,12
    elseif($mm==1 || $mm==3 || $mm==5 || $mm==7 || $mm==8 || $mm==10 || $mm==12){
        $dd = rand(1, 31);
    }
    // HR: Ostali mjeseci imaju 30 dana: 4,6,9,11
    // EN: Other months have 30 days: 4,6,9,11
    else {
        $dd = rand(1, 30);
    }

    // HR: Formatiranje s vodećom nulom ako je broj < 10
    //     npr. 5 → "05"
    // EN: Formatting with leading zero if number < 10
    //     e.g. 5 → "05"
    if($mm <= 9) $mm = "0".$mm;
    if($dd <= 9) $dd = "0".$dd;

    return $dd.".".$mm.".".$gg;
}

$slucDatum = GenerirajSlucajniDatum(2000);
echo "\nDan za datum {$slucDatum} je bio: ".VratiDanZaDatum($slucDatum);

// HR: Petlja generira datume i traži prvi čiji je dan > 15
//     break prekida petlju čim uvjet bude ispunjen
// EN: Loop generates dates and finds first where day > 15
//     break stops loop as soon as condition is met
for($m = 1; $m <= 10; $m++){
    $datum = GenerirajSlucajniDatum(1970);
    echo "\nDan za datum {$datum} je bio: ".VratiDanZaDatum($datum);

    // HR: date("d", strtotime()) - izvlači dan iz datuma kao string
    //     (int) pretvara string "05" → 5 za usporedbu
    // EN: date("d", strtotime()) - extracts day from date as string
    //     (int) converts string "05" → 5 for comparison
    $dd = date("d", strtotime($datum));
    if((int)$dd > 15){
        echo "\nDan: ".$dd;
        break;
    }
}

?>
