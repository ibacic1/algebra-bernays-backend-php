<?php

/*
HR: Zadatak - konzolni program s izbornikom i JSON datotekom
    1. Unos podataka  → helpers.php → UnosPodataka()
    2. Ispis podataka → helpers.php → IspisPodataka()
    3. Pretraga       → helpers.php → PretragaPodataka($sifra)

    Podaci se čuvaju u storage/proizvodi.json
    Funkcije su u zasebnoj datoteci helpers.php

EN: Exercise - console program with menu and JSON file
    1. Data input  → helpers.php → UnosPodataka()
    2. Data output → helpers.php → IspisPodataka()
    3. Search      → helpers.php → PretragaPodataka($sifra)

    Data is stored in storage/proizvodi.json
    Functions are in separate file helpers.php
*/

// HR: include - uključuje helpers.php s funkcijama UnosPodataka, IspisPodataka, PretragaPodataka
//     Datoteka mora postajati, inače warning (za razliku od require koji daje fatal error)
// EN: include - includes helpers.php with functions UnosPodataka, IspisPodataka, PretragaPodataka
//     File must exist, otherwise warning (unlike require which gives fatal error)
include "helpers.php";

echo "\nIZBORNIK\n";
echo "\n1. Unos podataka";
echo "\n2. Ispis podataka";
echo "\n3. Pretraga podataka";
echo PHP_EOL;

// HR: $putanja - globalna varijabla koja se koristi u helpers.php funkcijama
//     __DIR__ osigurava ispravnu putanju bez obzira na lokaciju skripte
// EN: $putanja - global variable used in helpers.php functions
//     __DIR__ ensures correct path regardless of script location
$putanja = __DIR__."/storage/proizvodi.json";

$izbor = (int)readline("Unesite izbor: ");
echo PHP_EOL;

// HR: switch na temelju odabira iz izbornika
//     Svaki case poziva odgovarajuću funkciju iz helpers.php
// EN: switch based on menu selection
//     Each case calls corresponding function from helpers.php
switch($izbor){
    case 1:
        // HR: Poziv funkcije za unos - definirana u helpers.php
        // EN: Call input function - defined in helpers.php
        UnosPodataka();
    break;
    case 2:
        // HR: Poziv funkcije za ispis - čita iz storage/proizvodi.json
        // EN: Call display function - reads from storage/proizvodi.json
        IspisPodataka();
    break;
    case 3:
        $sifraUnos = readline("Unesite šifru: ");
        // HR: Prosljeđujemo šifru kao parametar funkciji pretrage
        // EN: We pass the code as parameter to search function
        PretragaPodataka($sifraUnos);
    break;
    default:
        echo "\nPogrešan izbor!";
}

?>
