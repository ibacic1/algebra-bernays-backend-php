<?php

/*
HR: Zadatak - pogađanje PIN-a s while petljom:
    Program traži PIN dok se ne pogodi ili ne dostignu 3 pokušaja.
    Ispisuje preostale pokušaje nakon svakog promašaja.

EN: Exercise - PIN guessing with while loop:
    Program asks for PIN until guessed or 3 attempts reached.
    Prints remaining attempts after each wrong guess.
*/

$pin      = "1234";
$unos     = "";
$pokusaji = 0;

// HR: Petlja traje dok uneseni PIN nije jednak točnom
//     $unos="" na početku osigurava da petlja uvijek krene
// EN: Loop runs while entered PIN doesn't match correct one
//     $unos="" at start ensures loop always begins
while($unos != $pin){

    $unos = readline("Unesite PIN: ");
    $pokusaji++;

    if($unos != $pin){
        echo "Pogrešan PIN!".PHP_EOL;
        // HR: (3-$pokusaji) = preostali pokušaji
        // EN: (3-$pokusaji) = remaining attempts
        echo "Ostalo još ".(3-$pokusaji)." pokušaja!".PHP_EOL;
    }

    // HR: break - izlaz iz petlje ako su iskorištena 3 pokušaja
    //     Bez break, petlja bi nastavila jer $unos != $pin
    // EN: break - exit loop if 3 attempts are used
    //     Without break, loop would continue because $unos != $pin
    if($pokusaji == 3){
        echo "Dosegli ste maksimalan broj promašaja!";
        break;
    }
}

// HR: Provjera izvan petlje - izašli smo zbog točnog PIN-a ili zbog break-a?
// EN: Check outside loop - did we exit due to correct PIN or break?
if($unos == $pin){
    echo "PIN je točan!".PHP_EOL;
    echo "Broj pokušaja: ".$pokusaji.PHP_EOL;
}

?>
