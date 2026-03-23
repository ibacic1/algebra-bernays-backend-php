<?php

/*
HR: Zadatak - pogađanje PIN-a s do-while:
    Program traži PIN dok se ne pogodi ili ne dostignu 3 pokušaja.
    Razlika od while verzije: do-while je prirodniji izbor jer
    uvijek trebamo barem jedan unos od korisnika.

EN: Exercise - PIN guessing with do-while:
    Program asks for PIN until guessed or 3 attempts reached.
    Difference from while version: do-while is more natural choice because
    we always need at least one input from user.
*/

$pin      = "1234";
$pokusaji = 0;

// HR: do-while je bolji od while ovdje jer:
//     - uvijek trebamo tražiti PIN barem jednom
//     - nema potrebe za dummy varijablom ($unos="") kao u while verziji
// EN: do-while is better than while here because:
//     - we always need to ask for PIN at least once
//     - no need for dummy variable ($unos="") like in while version
do{
    $unos = readline("Unesite PIN: ");
    $pokusaji++;

    if($unos != $pin){
        echo "Pogrešan PIN".PHP_EOL;
    }

    // HR: break s uvjetom - izlaz ako su iskorišteni svi pokušaji
    //     && znači oba uvjeta moraju biti true za break
    // EN: Conditional break - exit if all attempts are used
    //     && means both conditions must be true for break
    if($pokusaji == 3 && $unos != $pin){
        echo "Dosegli ste maksimalan broj promašaja!".PHP_EOL;
        break;
    }
}
while($unos != $pin);

// HR: Provjera izvan petlje - PIN pogođen ili iscrpljeni pokušaji?
// EN: Check outside loop - PIN guessed or attempts exhausted?
if($unos == $pin){
    echo "PIN je točan!".PHP_EOL;
    echo "Broj pokušaja: ".$pokusaji.PHP_EOL;
}

?>
