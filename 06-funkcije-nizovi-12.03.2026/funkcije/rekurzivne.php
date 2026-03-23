<?php

// ============================================================
// HR: REKURZIVNE FUNKCIJE - funkcija koja poziva samu sebe
//     Svaka rekurzivna funkcija mora imati:
//     1. Bazni slučaj (uvjet zaustavljanja) - bez njega = beskonačna petlja!
//     2. Rekurzivni poziv koji se bliži baznom slučaju
// EN: RECURSIVE FUNCTIONS - function that calls itself
//     Every recursive function must have:
//     1. Base case (stopping condition) - without it = infinite loop!
//     2. Recursive call that approaches the base case
// ============================================================

$broj = 7;

// HR: Odbrojavanje - rekurzivno smanjuje $n za 1 dok ne dođe do 0
//     Bazni slučaj: $n==0 → ispiši "START" i zaustavi
// EN: Countdown - recursively decreases $n by 1 until it reaches 0
//     Base case: $n==0 → print "START" and stop
function odbrojavanje($n){

    // HR: Bazni slučaj - zaustavljamo rekurziju
    // EN: Base case - we stop the recursion
    if($n == 0){
        echo "START";
        return;  // HR: return bez vrijednosti = samo izlaz iz funkcije / EN: return without value = just exit function
    }

    echo $n.PHP_EOL;

    // HR: Rekurzivni poziv - pozivamo istu funkciju s manjim argumentom
    //     odbrojavanje(5) → odbrojavanje(4) → odbrojavanje(3) → ... → odbrojavanje(0)
    // EN: Recursive call - we call same function with smaller argument
    //     odbrojavanje(5) → odbrojavanje(4) → odbrojavanje(3) → ... → odbrojavanje(0)
    odbrojavanje($n - 1);
}

odbrojavanje(5);

// ============================================================
// HR: Rekurzivni faktorijel
//     5! = 5 * 4! = 5 * 4 * 3! = 5 * 4 * 3 * 2! = 5 * 4 * 3 * 2 * 1! = 120
//     Bazni slučaj: $m<=1 → return 1
// EN: Recursive factorial
//     5! = 5 * 4! = 5 * 4 * 3! = 5 * 4 * 3 * 2! = 5 * 4 * 3 * 2 * 1! = 120
//     Base case: $m<=1 → return 1
function faktorijel($m){

    // HR: Bazni slučaj - faktorijel od 1 (i 0) je 1
    // EN: Base case - factorial of 1 (and 0) is 1
    if($m <= 1){
        return 1;
    }

    // HR: Rekurzivni poziv: faktorijel(5) = 5 * faktorijel(4)
    //     PHP čeka rezultat faktorijel(4) prije množenja
    // EN: Recursive call: faktorijel(5) = 5 * faktorijel(4)
    //     PHP waits for result of faktorijel(4) before multiplying
    return $m * faktorijel($m - 1);
}

echo PHP_EOL.faktorijel(5);  // ispisuje 120

// ============================================================
// HR: Rekurzivni Fibonaccijev niz
//     Svaki broj je zbroj prethodna dva: 0,1,1,2,3,5,8,13,21...
//     Bazni slučaji: fibbonaci(0)=0, fibbonaci(1)=1
//     fibbonaci(5) = fibbonaci(4) + fibbonaci(3)
//                  = (fibbonaci(3)+fibbonaci(2)) + (fibbonaci(2)+fibbonaci(1))
//                  = ...
// EN: Recursive Fibonacci sequence
//     Each number is sum of previous two: 0,1,1,2,3,5,8,13,21...
//     Base cases: fibbonaci(0)=0, fibbonaci(1)=1
//     fibbonaci(5) = fibbonaci(4) + fibbonaci(3)
function fibbonaci($br){

    // HR: Bazni slučajevi - zaustavljaju rekurziju
    // EN: Base cases - stop the recursion
    if($br == 0) return 0;
    if($br == 1) return 1;

    // HR: Rekurzivni poziv - zbraja rezultate dva prethodna poziva
    // EN: Recursive call - sums results of two previous calls
    return fibbonaci($br - 1) + fibbonaci($br - 2);
}

// HR: Ispisujemo prvih 11 Fibonaccijevih brojeva (od 0 do 10)
// EN: Printing first 11 Fibonacci numbers (from 0 to 10)
for($i = 0; $i <= 10; $i++){
    echo fibbonaci($i).",";
}

?>
