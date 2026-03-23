<?php

/*
HR: Zadatak - konzolni program s do-while:
    Korisnik unosi broj, program ispisuje sve od 1 do tog broja.
    Pita želi li nastaviti - "ne" izlazi, sve ostalo nastavlja.
    Koristi ugniježđene do-while petlje.

EN: Exercise - console program with do-while:
    User enters a number, program prints all from 1 to that number.
    Asks if they want to continue - "ne" exits, anything else continues.
    Uses nested do-while loops.
*/

// HR: Vanjska do-while - program se mora izvršiti barem jednom
//     Nema smisla pitati korisnika želi li nastaviti prije nego je počeo
// EN: Outer do-while - program must execute at least once
//     No point asking user if they want to continue before they've started
do{
    $broj = (int)readline("Unesite broj: ");

    // HR: Unutarnja do-while - ispisuje brojeve od 1 do unesenog
    //     Također se mora izvršiti barem jednom
    // EN: Inner do-while - prints numbers from 1 to entered number
    //     Also must execute at least once
    $i = 1;
    do{
        echo $i.PHP_EOL;
        $i++;
    }
    while($i <= $broj);

    // HR: Pitanje za nastavak - uvjet vanjske do-while petlje
    //     Provjerava se na KRAJU, nakon što je program već izvršen
    // EN: Continue question - outer do-while condition
    //     Checked at THE END, after program has already executed
    $odgovor = readline("Želite još: ");
}
while($odgovor != "ne");

echo "Program završen...".PHP_EOL;

?>
