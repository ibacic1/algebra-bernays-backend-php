<?php

// ============================================================
// HR: REFERENCE u PHP-u
//     Normalno: $b = $a → kopija vrijednosti, promjena $a ne utječe na $b
//     Referenca: $b = &$a → $b POKAZUJE na istu memorijsku lokaciju kao $a
//                           promjena $a MIJENJA i $b i obrnuto!
// EN: REFERENCES in PHP
//     Normal: $b = $a → copy of value, changing $a doesn't affect $b
//     Reference: $b = &$a → $b POINTS to same memory location as $a
//                            changing $a CHANGES $b too and vice versa!
// ============================================================

echo "\nPRIMJER 1 - BEZ REFERENCE".PHP_EOL;

$a = 5;
$b = $a;    // HR: kopija vrijednosti - $b dobiva vlastitu kopiju od 5
            // EN: copy of value - $b gets its own copy of 5

$a = 10;    // HR: mijenjamo $a, ali $b ostaje 5
            // EN: we change $a, but $b remains 5
echo $b;    // ispisuje 5

// ============================================================
echo "\nPRIMJER 2 - SA REFERENCOM".PHP_EOL;

$c = 5;
$d = &$c;   // HR: $d je referenca na $c - dijele ISTU memorijsku lokaciju
            // EN: $d is reference to $c - they share THE SAME memory location

$c = 10;    // HR: mijenjamo $c → automatski se mijenja i $d!
            // EN: we change $c → $d automatically changes too!
echo "\nVarijabla D iznosi: ".$d;  // ispisuje 10

// ============================================================
echo "\nPRIMJER 3 - SA REFERENCOM".PHP_EOL;

$a = 10;
$b = &$a;   // HR: $b je referenca na $a

$b = 20;    // HR: mijenjamo $b → mijenja se i $a!
            // EN: we change $b → $a changes too!
echo "\nA iznosi: ".$a;  // ispisuje 20

// ============================================================
echo "\nPRIMJER 3 - SA REFERENCOM - ZAMJENA VARIJABLE".PHP_EOL;

// HR: Zamjena vrijednosti dviju varijabli pomoću reference
// EN: Swapping values of two variables using reference
$m = 20;
$n = 30;

$tempp = &$m;   // HR: tempp referenca na $m

echo "\nTemp: ".$tempp;  // ispisuje 20
$m = $n;        // HR: $m postaje 30, $tempp isto postaje 30 (referenca!)
$n = $tempp;    // HR: $n postaje 30... ovo ne radi ispravno zbog reference!

echo PHP_EOL.$m." ".$n;

// ============================================================
echo "\nPRIMJER 3 - SA REFERENCOM - ZAMJENE VARIJABLI".PHP_EOL;

// HR: Funkcija BEZ reference - prima KOPIJE varijabli
//     Zamjena unutar funkcije ne utječe na originalne varijable!
// EN: Function WITHOUT reference - receives COPIES of variables
//     Swap inside function doesn't affect original variables!
function zamjeni($x, $y){
    $temp = $x;
    $x    = $y;
    $y    = $temp;
    // HR: $x i $y su lokalne kopije - original ostaje nepromijenjen
    // EN: $x and $y are local copies - original stays unchanged
}

$x = 10;
$y = 20;
zamjeni($x, $y);
echo $x." - ".$y;  // HR: ispisuje 10 - 20, nije zamijenjeno! / EN: prints 10 - 20, not swapped!

echo PHP_EOL;

// HR: Funkcija SA referencom (&) - prima ADRESU originalne varijable
//     Promjene unutar funkcije DIREKTNO mijenjaju originalne varijable!
//     & ispred parametra = prosljeđivanje po referenci
// EN: Function WITH reference (&) - receives ADDRESS of original variable
//     Changes inside function DIRECTLY change original variables!
//     & before parameter = passing by reference
function zamjeniref(&$i, &$j){
    $temp = $i;
    $i    = $j;
    $j    = $temp;
    // HR: $i i $j su reference - mijenjamo originalne varijable
    // EN: $i and $j are references - we change the original variables
}

zamjeniref($x, $y);
echo $x." == ".$y;  // HR: ispisuje 20 == 10, uspješno zamijenjeno! / EN: prints 20 == 10, successfully swapped!

?>
