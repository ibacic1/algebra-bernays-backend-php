<?php

/*
HR: Zadatak - simetrična piramida s tri ugniježđene for petlje:
        1
       212
      32123
     4321234
    543212345

    Svaki red se sastoji od 3 dijela:
    1. Razmaci za centriranje (desna strana se poravnava)
    2. Silazni dio (od $i do 1)
    3. Uzlazni dio (od 2 do $i)

EN: Exercise - symmetric pyramid with three nested for loops:
        1
       212
      32123
     4321234
    543212345

    Each row consists of 3 parts:
    1. Spaces for centering (right-align)
    2. Descending part (from $i to 1)
    3. Ascending part (from 2 to $i)
*/

$n = 5;

// HR: Vanjska petlja - svaka iteracija = jedan red piramide
// EN: Outer loop - each iteration = one row of pyramid
for($i = 1; $i <= $n; $i++){

    // HR: 1. dio - razmaci za centriranje
    //     Red 1 ima 4 razmaka, Red 2 ima 3... Red 5 ima 0
    //     Broj razmaka = $n - $i
    // EN: 1. part - spaces for centering
    //     Row 1 has 4 spaces, Row 2 has 3... Row 5 has 0
    //     Number of spaces = $n - $i
    for($j = $n; $j > $i; $j--){
        echo " ";
    }

    // HR: 2. dio - silazni brojevi (lijeva strana piramide)
    //     Red 1: 1
    //     Red 2: 21
    //     Red 3: 321
    // EN: 2. part - descending numbers (left side of pyramid)
    //     Row 1: 1
    //     Row 2: 21
    //     Row 3: 321
    for($j = $i; $j >= 1; $j--){
        echo $j;
    }

    // HR: 3. dio - uzlazni brojevi (desna strana piramide)
    //     Počinje od 2 jer je 1 već ispisana u silaznom dijelu
    //     Red 1: (ništa - $j=2 > $i=1, petlja se ne izvršava)
    //     Red 2: 2
    //     Red 3: 23
    // EN: 3. part - ascending numbers (right side of pyramid)
    //     Starts from 2 because 1 is already printed in descending part
    //     Row 1: (nothing - $j=2 > $i=1, loop doesn't execute)
    //     Row 2: 2
    //     Row 3: 23
    for($j = 2; $j <= $i; $j++){
        echo $j;
    }

    echo PHP_EOL;
}

?>
