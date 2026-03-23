<?php

// HR: Varijable u PHP-u počinju s $ znakom, osjetljive su na velika/mala slova
// EN: Variables in PHP start with $ sign, they are case-sensitive

$grad = "Zagreb";

// HR: Dvostruki navodnici - varijable se interpretiraju unutar stringa
// EN: Double quotes - variables are interpreted inside the string
echo "<p>Grad je $grad</p>";

// HR: Jednostruki navodnici - varijable se NE interpretiraju, ispisuje se doslovno $grad
// EN: Single quotes - variables are NOT interpreted, literally prints $grad
echo '<p>Grad je $grad</p>';

$br_stanovnika = 780000;

// HR: Dva načina spajanja varijabli i teksta u stringu
//     1. Interpolacija - varijabla direktno u dvostrukim navodnicima
//     2. Konkatenacija - spajanje s točkom (.)
// EN: Two ways to combine variables and text in a string
//     1. Interpolation - variable directly in double quotes
//     2. Concatenation - joining with dot (.)
echo "<br>Grad $grad ima $br_stanovnika stanovnika";
echo "<br>Grad ".$grad." ima ".$br_stanovnika." stanovnika";

$broj1 = 20;
$broj2 = 30;

// HR: Računanje unutar stringa ne radi bez zagrada i konkatenacije
//     Prvi echo ispisuje doslovno ($broj1+$broj2) kao tekst
//     Drugi echo izračuna zbroj jer je u zagradama izvan stringa
// EN: Calculation inside string doesn't work without brackets and concatenation
//     First echo prints ($broj1+$broj2) as literal text
//     Second echo calculates sum because it's in brackets outside the string
echo "<br>Zbroj ($broj1 i $broj2) je ($broj1+$broj2)";
echo "<br>Zbroj ($broj1 i $broj2) je ".($broj1+$broj2);
echo "<br>Zbroj ($broj1 i $broj2) je ".($broj1+$broj2)." i to je točan rezultat";

// HR: Vrste komentara u PHP-u
// EN: Types of comments in PHP
// jedna linija komentara / single line comment
/*
    početak komentara bloka / start of block comment
    blok1
    blok2
    blok3
    kraj komentara bloka / end of block comment
*/
# komentar / comment (shell stil)

// HR: PHP automatski pretvara string "30" u broj pri zbrajanju (type juggling)
// EN: PHP automatically converts string "30" to number when adding (type juggling)
$broj3 = "30";
$broj4 = "50";
echo "<br>Novi zbroj: ".($broj3+$broj4);

// HR: Privremena varijabla za čuvanje vrijednosti prije prepisivanja
// EN: Temporary variable to save value before overwriting
$brojka = 10;
echo "<br>Brojka iznosi: ".$brojka;
$temp = $brojka;        // HR: spremi staru vrijednost / EN: save old value
$brojka = 20;
echo "<br>Brojka iznosi: ".$brojka;
echo "<br>Brojka prije prepisivanja iznosila je: ".$temp;

// HR: Escapeanje navodnika unutar stringa s backslash (\)
//     U dvostrukim navodnicima escapamo \" 
//     U jednostrukim navodnicima escapamo \'
// EN: Escaping quotes inside string with backslash (\)
//     In double quotes we escape \"
//     In single quotes we escape \'
echo "<p><a href=\"vjezba2.php\">Link na vježba 2</a></p>";
echo '<p><a href=\'vjezba2.php\'>Link na vježba 2</a></p>';

?>
