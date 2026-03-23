<?php

// HR: Konzolni ispis - PHP skripta pokrenuta iz terminala, ne iz preglednika
//     \n = novi red (newline), \t = tabulator - funkcionira samo u konzoli
// EN: Console output - PHP script run from terminal, not from browser
//     \n = new line (newline), \t = tab - works only in console

echo "\nKonzolni ispis";
echo "\nKonzolni ispis";

// HR: \t između dva ispisa - horizontalni razmak (tabulator)
// EN: \t between two outputs - horizontal space (tab)
echo "\nVrijednost 1";
echo "\tVrijednost 2";

// HR: \n unutar varijable - novi red se čuva u varijabli
// EN: \n inside variable - new line is stored in the variable
$ime = "\nPero";
echo $ime;

$godine = 33;
echo $godine;

// HR: \n\n - dva nova reda = prazna linija između ispisa
// EN: \n\n - two new lines = empty line between outputs
echo "\n\n";
echo $godine + 20;

?>
