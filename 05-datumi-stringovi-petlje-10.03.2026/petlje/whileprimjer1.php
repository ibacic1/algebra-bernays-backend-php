<?php

/*
HR: Zadatak - konzolni program s while petljom:
    Korisnik unosi broj, program ispisuje sve od 0 do tog broja.
    Nakon ispisa pita želi li nastaviti.
    Odgovor "ne" zaustavlja program.

EN: Exercise - console program with while loop:
    User enters a number, program prints all from 0 to that number.
    After printing asks if they want to continue.
    Answer "ne" stops the program.
*/

// HR: Inicijaliziramo odgovor na "da" da bi while uvjet bio true i petlja krenula
// EN: Initialize answer to "da" so while condition is true and loop starts
$odgovor = "da";

while($odgovor != "ne"){

    // HR: readline() - čeka unos s tipkovnice, vraća string
    //     (int) pretvara string u integer
    // EN: readline() - waits for keyboard input, returns string
    //     (int) converts string to integer
    $broj = (int)readline("Unesite broj: ");

    // HR: Unutarnja petlja - ispisuje sve brojeve od 0 do unesenog
    // EN: Inner loop - prints all numbers from 0 to entered number
    $i = 0;
    while($i <= $broj){
        echo "Vrijednost: ".$i.PHP_EOL;
        $i++;
    }

    // HR: Pitanje za nastavak - ako upiše "ne", uvjet vanjske petlje postaje false
    // EN: Continue question - if "ne" is typed, outer loop condition becomes false
    $odgovor = readline("Želite još?");
}

echo "Program završen...".PHP_EOL;

?>
