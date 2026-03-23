<?php

// ============================================================
// HR: FUNKCIJE u PHP-u - blok koda koji se može pozivati više puta
//     Prednosti: izbjegavamo ponavljanje koda, lakše održavanje
//     Sintaksa: function naziv($parametri){ ... return $vrijednost; }
// EN: FUNCTIONS in PHP - code block that can be called multiple times
//     Benefits: avoid code repetition, easier maintenance
//     Syntax: function name($parameters){ ... return $value; }
// ============================================================

echo "OSNOVNA FUNKCIJA".PHP_EOL;

// HR: Definicija funkcije - kod se ne izvršava dok se funkcija ne pozove
// EN: Function definition - code doesn't execute until function is called
function ispis(){
    echo "\nJa sam funkcija";
}

// HR: Pozivanje funkcije - može se pozivati koliko puta god želimo
// EN: Calling function - can be called as many times as we want
ispis();
ispis();

echo "Pozovi funkciju 10 puta".PHP_EOL;
for($a = 1; $a <= 10; $a++){
    ispis(); echo " pozvana {$a}. put";
}

// ============================================================
echo "\nOSNOVNA FUNKCIJA SA LOKALNOM VARIJABLOM".PHP_EOL;

// HR: Lokalne varijable - postoje SAMO unutar funkcije
//     Nakon završetka funkcije, lokalne varijable se brišu iz memorije
//     Nisu vidljive izvan funkcije
// EN: Local variables - exist ONLY inside the function
//     After function ends, local variables are deleted from memory
//     Not visible outside the function
function Lokalna(){
    $a = 10;    // HR: lokalna varijabla / EN: local variable
    $b = 5;
    $c = $a + $b;
    echo "\nRezultat je: ".$c;
    $d = sqrt($c);  // HR: sqrt() = kvadratni korijen / EN: sqrt() = square root
    echo "\nKorijen je: ".$d;
}

Lokalna();

// ============================================================
echo "\nFUNKCIJA SA GLOBALNOM VARIJABLOM".PHP_EOL;

// HR: Globalne varijable - definirane izvan funkcije
//     Da bi se koristile UNUTAR funkcije, mora se deklarirati: global $varijabla
//     Bez "global" - funkcija ne vidi varijablu izvana
// EN: Global variables - defined outside function
//     To use them INSIDE function, must declare: global $variable
//     Without "global" - function cannot see the variable from outside
$kolicina = 100;
echo "\nKoličina je: ".$kolicina;

function Ukupno(){
    global $kolicina;   // HR: dohvati globalnu varijablu / EN: access global variable
    $cijena  = 15;
    $ukupno  = $kolicina * $cijena;
    echo "\nUkupno je: ".$ukupno;
    // HR: Mijenjanje globalne varijable unutar funkcije - mijenja se i izvana!
    // EN: Changing global variable inside function - changes outside too!
    $kolicina *= 2;
}

Ukupno();
echo "\nKoličina je: ".$kolicina;  // HR: vrijednost je promijenjena / EN: value has changed

// ============================================================
// HR: static varijabla - zadržava vrijednost između poziva funkcije
//     Za razliku od lokalne koja se resetira, static pamti zadnju vrijednost
// EN: static variable - retains value between function calls
//     Unlike local which resets, static remembers last value
function brojac(){
    static $brojac = 0;  // HR: inicijalizira se samo jednom / EN: initialized only once
    $brojac++;
    echo "\nFunkcija brojac pozvana {$brojac} puta!";
}

brojac();   // ispisuje 1
brojac();   // ispisuje 2
brojac();   // ispisuje 3
brojac();   // ispisuje 4

// ============================================================
echo "\nFUNKCIJA SA PARAMETRIMA - 1 PARAMETAR".PHP_EOL;

$x = 25;

// HR: Parametar $x u funkciji je LOKALNA kopija - ne utječe na globalnu $x
//     Promjena parametra unutar funkcije ne mijenja originalnu varijablu
// EN: Parameter $x in function is LOCAL copy - doesn't affect global $x
//     Changing parameter inside function doesn't change original variable
function Korijen($x){
    $korijen = round(sqrt($x), 3);
    echo "\nKorijen broja {$x} je: ".$korijen;
}

Korijen($x);    // HR: šaljemo varijablu / EN: sending variable
Korijen(36);    // HR: šaljemo literal / EN: sending literal

echo "\nFUNKCIJA SA PARAMETRIMA - 1 PRIMJER".PHP_EOL;
// HR: Iskoristivost funkcije - ista funkcija za 10 različitih slučajnih brojeva
// EN: Function reusability - same function for 10 different random numbers
for($m = 1; $m <= 10; $m++){
    $broj = rand(100, 999);
    Korijen($broj);
}

// ============================================================
echo "\nFUNKCIJA SA PARAMETRIMA - VIŠE PARAMETARA".PHP_EOL;

// HR: Funkcija s više parametara - svaki parametar odvojen zarezom
// EN: Function with multiple parameters - each parameter separated by comma
function ZbrojiBrojeve($x1, $x2){
    $zbroj = $x1 + $x2;
    echo "\nZbroj brojeva {$x1} i {$x2} je: ".$zbroj;
}

ZbrojiBrojeve(100, 200);

// HR: Defaultni parametri - vrijednost se koristi ako parametar nije proslijeđen
//     OpsegTrokuta() bez argumenata = koristi 3,4,5
//     OpsegTrokuta(7,11,15) = koristi 7,11,15
// EN: Default parameters - value is used if parameter is not passed
//     OpsegTrokuta() without arguments = uses 3,4,5
//     OpsegTrokuta(7,11,15) = uses 7,11,15
function OpsegTrokuta($a = 3, $b = 4, $c = 5){
    $opseg = $a + $b + $c;
    echo "\nOpseg trokuta je: ".$opseg;
}

OpsegTrokuta(7, 11, 15);

// ============================================================
echo "\nFUNKCIJA KOJA VRAĆA VRIJEDNOST".PHP_EOL;

// HR: return - vraća vrijednost iz funkcije pozivatelju
//     Nakon return, funkcija odmah prestaje s izvršavanjem
// EN: return - returns value from function to caller
//     After return, function immediately stops executing
function ParnostBroja($br){
    if($br % 2 == 0){
        return true;    // HR: vraća boolean true / EN: returns boolean true
    } else {
        return false;   // HR: vraća boolean false / EN: returns boolean false
    }
}

echo "\nBroj 5 je paran: ";
var_dump(ParnostBroja(5));

echo "\nBroj 10 je paran: ";
var_dump(ParnostBroja(10));

// HR: Funkcija koja vraća broj - rezultat možemo koristiti direktno u izrazu
// EN: Function that returns number - result can be used directly in expression
function VratiKorijen($var){
    return sqrt($var);
}

for($a = 1; $a <= 10; $a++){
    echo "\nKorijen broja {$a} je: ".VratiKorijen($a);
}

// HR: Funkcija koja vraća string - ternarni operator za odluku
//     Prost broj ima točno 2 djelitelja (1 i sam sebe)
//     Složen broj ima više od 2 djelitelja
// EN: Function that returns string - ternary operator for decision
//     Prime number has exactly 2 divisors (1 and itself)
//     Composite number has more than 2 divisors
function SlozenostBroja($brojka){
    $djelitelji = 0;
    for($b = 1; $b <= $brojka; $b++){
        if($brojka % $b == 0){
            $djelitelji++;
        }
    }
    return $djelitelji > 2 ? " - složen" : " - prost";
}

$brojka = rand(1, 20);
echo "\nSlozenost broja ".$brojka." je: ".SlozenostBroja($brojka);

?>
