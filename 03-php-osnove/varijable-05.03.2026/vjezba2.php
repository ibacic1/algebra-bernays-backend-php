<?php

echo "<h1>Tipovi podataka</h1>";

echo "<h2>Cijeli brojevi</h2>";

// HR: integer - cijeli broj (pozitivan ili negativan, bez decimale)
// EN: integer - whole number (positive or negative, no decimal)
$broj = 10;
echo "<br>Broj: ".$broj;

echo "<br>";
// HR: var_dump() - ispisuje tip i vrijednost varijable, korisno za debugiranje
// EN: var_dump() - prints type and value of variable, useful for debugging
var_dump($broj);

// HR: string - niz znakova (tekst), uvijek u navodnicima
// EN: string - sequence of characters (text), always in quotes
$ime = "Pero";
echo "<br>";
var_dump($ime);

// HR: float - decimalni broj (floating point)
// EN: float - decimal number (floating point)
$cijena = 24.32;
echo "<br>";
var_dump($cijena);

// HR: boolean - logička vrijednost, samo true ili false
// EN: boolean - logical value, only true or false
$istina = true;
echo "<br>";
var_dump($istina);

// HR: array - niz elemenata, može sadržavati različite tipove podataka
// EN: array - collection of elements, can contain different data types
$imena = ["Ivan", 5, "Marko"];
echo "<br>";
var_dump($imena);

// HR: Razlika između integer i string broja
//     $a = 5  → integer (broj)
//     $b = "5" → string (tekst koji izgleda kao broj)
// EN: Difference between integer and string number
//     $a = 5   → integer (number)
//     $b = "5" → string (text that looks like a number)
$a = 5;
$b = "5";
echo "<br>"; var_dump($a);
echo "<br>"; var_dump($b);

// HR: (int) - kastanje (type casting) - prisilno pretvaranje u integer
// EN: (int) - casting (type casting) - forcefully converting to integer
$c = (int)$b;
echo "<br>"; var_dump($c);

echo "<h2>Zapisi integera</h2>";

// HR: Integer se može zapisati u različitim brojevnim sustavima
//     Decimalni (10) - normalni zapis
//     Oktalni (8)    - počinje s 0
//     Heksadecimalni (16) - počinje s 0x
// EN: Integer can be written in different number systems
//     Decimal (10)     - normal notation
//     Octal (8)        - starts with 0
//     Hexadecimal (16) - starts with 0x
$decimal = 123;
$octal   = 0123;
$hex     = 0x123;

echo "<br>Decimal: ".$decimal;
echo "<br>Octal: ".$octal;
echo "<br>Heksadecimal: ".$hex;

echo "<h2>Hiperlinkovi u PHP-u</h2>";

// HR: Dva načina pisanja linka unutar echo-a
//     1. Jednostruki navodnici izvana, dvostruki iznutra
//     2. Dvostruki navodnici izvana, jednostruki iznutra
// EN: Two ways to write a link inside echo
//     1. Single quotes outside, double quotes inside
//     2. Double quotes outside, single quotes inside
echo "<p><a href='vjezba1.php'>Link na vježba 1</a></p>";
echo '<p><a href="vjezba1.php">Link na vježba 1</a></p>';

?>
