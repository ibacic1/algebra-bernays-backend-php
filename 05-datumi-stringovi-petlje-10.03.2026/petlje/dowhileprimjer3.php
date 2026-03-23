<?php

/*
HR: Zadatak - unos parnih brojeva:
    Program prima parne brojeve sve dok korisnik ne unese neparni.
    Na kraju ispisuje zbroj i koliko ih je djeljivo s 4.
    Napomena: koristi while petlju, a ne do-while!

EN: Exercise - entering even numbers:
    Program accepts even numbers until user enters an odd one.
    At end prints sum and how many are divisible by 4.
    Note: uses while loop, not do-while!
*/

$zbroj            = 0;
$brojDjeljivihSa4 = 0;

// HR: $broj=0 → paran broj → uvjet while($broj%2==0) je true → petlja kreće
//     Ovo je trik za inicijalizaciju - koristimo 0 kao "lažni" početni unos
// EN: $broj=0 → even number → while($broj%2==0) condition is true → loop starts
//     This is an initialization trick - we use 0 as a "fake" initial input
$broj = 0;

while($broj % 2 == 0){

    $broj = readline("Unesite broj: ");

    // HR: Odmah provjeravamo parnost - ako je neparan, break prekida petlju
    //     BEZ dodavanja neparnog broja u zbroj
    // EN: Check parity immediately - if odd, break stops loop
    //     WITHOUT adding the odd number to the sum
    if($broj % 2 != 0){
        break;
    }

    // HR: += kombinirani operator: $zbroj = $zbroj + $broj
    // EN: += combined operator: $zbroj = $zbroj + $broj
    $zbroj += $broj;

    // HR: Provjera djeljivosti s 4 samo za parne brojeve koji su uneseni
    // EN: Check divisibility by 4 only for even numbers that were entered
    if($broj % 4 == 0){
        $brojDjeljivihSa4++;
    }
}

echo "Zbroj svih unesenih brojeva je ".$zbroj.PHP_EOL;
echo "Broj brojeva djeljivih sa 4 je ".$brojDjeljivihSa4.PHP_EOL;

?>
