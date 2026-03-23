<?php

/*
HR: Zadatak - piramida brojeva s ugniježđenom for petljom:
    1
    1 2
    1 2 3
    1 2 3 4
    1 2 3 4 5

EN: Exercise - number pyramid with nested for loop:
    1
    1 2
    1 2 3
    1 2 3 4
    1 2 3 4 5
*/

$broj_redova = 5;

// HR: Vanjska petlja - kontrolira koji smo red ($i = broj trenutnog reda)
//     Red 1: $i=1, Red 2: $i=2, ..., Red 5: $i=5
// EN: Outer loop - controls which row we're on ($i = current row number)
//     Row 1: $i=1, Row 2: $i=2, ..., Row 5: $i=5
for($i = 1; $i <= $broj_redova; $i++){

    // HR: Unutarnja petlja - ispisuje brojeve od 1 do $i
    //     U redu 1: ispisuje samo 1
    //     U redu 2: ispisuje 1 2
    //     U redu 3: ispisuje 1 2 3 itd.
    // EN: Inner loop - prints numbers from 1 to $i
    //     In row 1: prints only 1
    //     In row 2: prints 1 2
    //     In row 3: prints 1 2 3 etc.
    for($j = 1; $j <= $i; ++$j){
        echo $j." ";
    }

    // HR: PHP_EOL - novi red nakon svakog reda piramide
    // EN: PHP_EOL - new line after each row of pyramid
    echo PHP_EOL;
}

?>
