<?php

// HR: do-while petlja - KLJUČNA razlika od while petlje:
//     while    → PRVO provjeri uvjet → ONDA izvrši kod
//     do-while → PRVO izvrši kod    → ONDA provjeri uvjet
//     Zbog toga se do-while uvijek izvršava BAREM JEDNOM!
// EN: do-while loop - KEY difference from while loop:
//     while    → FIRST check condition → THEN execute code
//     do-while → FIRST execute code   → THEN check condition
//     That's why do-while always executes AT LEAST ONCE!

echo "Ispis brojeva od 1 do 10".PHP_EOL;

// HR: $broj=11 - uvjet ($broj<=10) je FALSE od samog početka
//     S while petljom: ne bi se izvršila ni jednom
//     S do-while: izvršava se jednom jer se uvjet provjerava na KRAJU
// EN: $broj=11 - condition ($broj<=10) is FALSE from the start
//     With while loop: would not execute even once
//     With do-while: executes once because condition is checked at THE END
$broj = 11;
do{
    echo "\nBroj: ".$broj++;
}
while($broj <= 10);

?>
