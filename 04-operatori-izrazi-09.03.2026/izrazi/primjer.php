<?php

// HR: Konzolna skripta - pokreće se iz terminala, ne iz preglednika
//     php primjer.php
// EN: Console script - runs from terminal, not from browser
//     php primjer.php

// HR: rand(1,5) - generira slučajni broj između 1 i 5
// EN: rand(1,5) - generates random number between 1 and 5
$slucajni = rand(1,5);

// HR: readline() - čeka unos korisnika u konzoli i vraća ga kao string
//     (int) - pretvara uneseni string u integer
// EN: readline() - waits for user input in console and returns it as string
//     (int) - converts entered string to integer
$unos = (int)readline("Unesite broj:");

echo "\nSlucajni: ".$slucajni;

// HR: Usporedba unesenog broja sa slučajnim
//     == uspoređuje samo vrijednosti (ne tipove)
// EN: Comparing entered number with random number
//     == compares only values (not types)
if($slucajni == $unos){
    echo "\nBroj je pogođen";
} else {
    echo "\nBroj nije pogođen";
}

?>
