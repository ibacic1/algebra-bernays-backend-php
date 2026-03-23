<?php

/*
HR: Zadatak - izračun faktorijela:
    Faktorijel broja n = n * (n-1) * (n-2) * ... * 2 * 1
    Primjer: 5! = 5 * 4 * 3 * 2 * 1 = 120
    Slučajni broj između 3 i 8.

EN: Exercise - factorial calculation:
    Factorial of n = n * (n-1) * (n-2) * ... * 2 * 1
    Example: 5! = 5 * 4 * 3 * 2 * 1 = 120
    Random number between 3 and 8.
*/

$broj = rand(3, 8);

// HR: Počinjemo s 1 jer je 1 neutralni element za množenje
//     Svako množenje s 1 ne mijenja rezultat
// EN: Start with 1 because 1 is neutral element for multiplication
//     Multiplying by 1 doesn't change the result
$faktorijeli = 1;

// HR: Petlja ide silazno od $broj prema 2
//     Ne trebamo množiti s 1 jer to ne mijenja rezultat
//     *= kombinirani operator: $faktorijeli = $faktorijeli * $temp
// EN: Loop goes descending from $broj towards 2
//     No need to multiply by 1 because it doesn't change result
//     *= combined operator: $faktorijeli = $faktorijeli * $temp
for($temp = $broj; $temp > 1; $temp--){
    $faktorijeli *= $temp;
}

echo "Faktorijeli broja {$broj} iznose {$faktorijeli}".PHP_EOL;

?>
