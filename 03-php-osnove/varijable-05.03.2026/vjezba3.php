<?php

echo "<h1>PREDEFINIRANE KONSTANTE u PHP-u</h1>";

// HR: Predefinirane konstante - PHP ih automatski definira, uvijek dostupne
//     PHP_EOL = End Of Line - znak za novi red (razlikuje se po OS-u)
// EN: Predefined constants - PHP defines them automatically, always available
//     PHP_EOL = End Of Line - newline character (differs by OS)
echo "PHP verzija: ".PHP_VERSION.PHP_EOL;
echo "<br>Major verzija: ".PHP_MAJOR_VERSION.PHP_EOL;
echo "<br>Minor verzija: ".PHP_MINOR_VERSION.PHP_EOL;
echo "<br>PHP OS: ".PHP_OS.PHP_EOL;

// HR: __DIR__  - putanja do direktorija trenutne skripte
//     __FILE__ - puna putanja do trenutne skripte
//     __LINE__ - broj linije u kodu gdje se poziva
// EN: __DIR__  - path to directory of current script
//     __FILE__ - full path to current script
//     __LINE__ - line number in code where it's called
echo "<br>Trenutni direktorij: ".__DIR__.PHP_EOL;
echo "<br>Trenutna datoteka: ".__FILE__.PHP_EOL;
echo "<br>Broj linije: ".__LINE__.PHP_EOL;

echo "<h1>VLASTITE KONSTANTE u PHP-u</h1>";

// HR: define() - definira vlastitu konstantu
//     Konstante se pišu VELIKIM SLOVIMA (konvencija)
//     Konstante nemaju $ znak i ne mogu se mijenjati
// EN: define() - defines a custom constant
//     Constants are written in UPPERCASE (convention)
//     Constants have no $ sign and cannot be changed
define("PI", 3.14);
echo PI;

// HR: Konstante se često koriste za konfiguraciju baze podataka
//     jer se ti podaci ne smiju mijenjati tokom izvršavanja skripte
// EN: Constants are often used for database configuration
//     because this data must not change during script execution
define("BAZA", "Fakulteti");
define("USER", "faks01");
define("PASS", "e23#1");
define("HOST", "f1.foi.hr");

echo "<br>Baza je: ".BAZA;

?>
