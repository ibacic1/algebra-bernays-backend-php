<?php

/*
HR: Zadatak - usporedba dva broja s kombinacijom petlji:
    - broj1 > broj2 → ispiši silazno od broj1 do broj2 (for petlja)
    - broj1 < broj2 → ispiši broj2 točno broj1 puta (while petlja)
    - jednaki       → ispiši trećinu njihovog zbroja

EN: Exercise - comparing two numbers with combination of loops:
    - broj1 > broj2 → print descending from broj1 to broj2 (for loop)
    - broj1 < broj2 → print broj2 exactly broj1 times (while loop)
    - equal         → print one third of their sum
*/

$broj1 = (int)readline("Unesite broj 1: ");
$broj2 = (int)readline("Unesite broj 2: ");

if($broj1 > $broj2){
    echo "Prvi uvjet: ".PHP_EOL;
    // HR: For petlja - silazno od $broj1 do $broj2
    //     $broj1-- smanjuje varijablu za 1 nakon svake iteracije
    // EN: For loop - descending from $broj1 to $broj2
    //     $broj1-- decreases variable by 1 after each iteration
    for($broj1; $broj1 >= $broj2; $broj1--){
        echo $broj1.",";
    }
}
elseif($broj1 < $broj2){
    echo "Drugi uvjet: ".PHP_EOL;
    // HR: While petlja - ispisuje $broj2 točno $broj1 puta
    //     Kombinacija petlji u jednom zadatku - for i while
    // EN: While loop - prints $broj2 exactly $broj1 times
    //     Combination of loops in one task - for and while
    $i = 1;
    while($i <= $broj1){
        echo $broj2.",";
        $i++;
    }
} else {
    // HR: Trećina zbroja - ako su jednaki: (n + n) / 3 = 2n/3
    // EN: One third of sum - if equal: (n + n) / 3 = 2n/3
    $trecina = ($broj1 + $broj2) / 3;
    echo "Treći uvjet: {$trecina}".PHP_EOL;
}

?>
