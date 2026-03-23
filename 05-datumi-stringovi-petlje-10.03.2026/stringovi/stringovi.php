<?php

$recenica = "PHP je odlican jezik za Web Programiranje";
//           0123456789..............................n
// HR: Indeksiranje stringa počinje od 0, kao kod nizova
// EN: String indexing starts from 0, like arrays

// HR: strlen() - vraća broj znakova u stringu (uključujući razmake)
// EN: strlen() - returns number of characters in string (including spaces)
$duljina = strlen($recenica);
echo "\nDuljina stringa: ".$duljina.PHP_EOL;

// HR: substr($string, $start, $length) - izvlači dio stringa
//     $start  = pozicija od koje počinjemo (0 = prvi znak)
//     $length = koliko znakova uzimamo
// EN: substr($string, $start, $length) - extracts part of string
//     $start  = position to start from (0 = first character)
//     $length = how many characters to take
$prviznak  = substr($recenica, 0, 1);
$drugiznak = substr($recenica, 1, 1);
$prvadva   = substr($recenica, 0, 2);

echo "\nPrvi znak: ".$prviznak.PHP_EOL;
echo "\nDrugi znak: ".$drugiznak.PHP_EOL;
echo "\nPrva dva znaka: ".$prvadva.PHP_EOL;

// HR: Prolazak kroz string znak po znak - substr s duljinom 1 na svakoj poziciji
// EN: Iterating through string character by character - substr with length 1 at each position
echo "\nSvi znakovi:\n";
for($a = 0; $a < strlen($recenica); $a++){
    $znak = substr($recenica, $a, 1);
    echo "\nZnak: ".$znak;
}

// HR: strtoupper() - sva slova postaju velika
// EN: strtoupper() - all letters become uppercase
echo "\nVELIKA SLOVA:\n";
echo strtoupper($recenica);

// HR: strtolower() - sva slova postaju mala
// EN: strtolower() - all letters become lowercase
echo "\nmala slova:\n";
echo strtolower($recenica);

// HR: Logika za prebrojavanje:
//     - Ako je znak razmak → povećaj brojač razmaka
//     - Ako nije razmak → usporedi ga s uppercase verzijom
//       Ako je jednak → to je veliko slovo
//       Ako nije jednak → to je malo slovo
// EN: Counting logic:
//     - If character is space → increase space counter
//     - If not space → compare with its uppercase version
//       If equal → it is uppercase letter
//       If not equal → it is lowercase letter
echo "\nKoliko velikih i malih slova?\n";
$velikih = $malih = 0;
$razmaci = 0;

for($a = 0; $a < strlen($recenica); $a++){
    $znak = substr($recenica, $a, 1);
    if($znak != " "){
        if($znak == strtoupper($znak)){
            $velikih++;
        } else {
            $malih++;
        }
    } else {
        $razmaci += 1;
    }
}

echo "\nVelikih slova: {$velikih}".PHP_EOL;
echo "\nMalih slova: {$malih}".PHP_EOL;
// HR: Broj riječi = broj razmaka + 1 (npr. "PHP je" ima 1 razmak = 2 riječi)
// EN: Number of words = number of spaces + 1 (e.g. "PHP je" has 1 space = 2 words)
echo "\nBroj riječi: ".($razmaci + 1).PHP_EOL;

// HR: Prebrojavanje samoglasnika - strtolower() da ne moramo provjeravati A,E,I,O,U posebno
// EN: Counting vowels - strtolower() so we don't need to check A,E,I,O,U separately
echo "\nBroj samoglasnika u rečenici:\n";
$samoglasnici = 0;
for($a = 0; $a < strlen($recenica); $a++){
    $znak = substr(strtolower($recenica), $a, 1);
    if($znak == "a" || $znak == "e" || $znak == "i" || $znak == "o" || $znak == "u"){
        $samoglasnici++;
    }
}
echo "\nSamoglasnici: {$samoglasnici}".PHP_EOL;

// HR: strpos($string, $traženi, $offset) - traži poziciju znaka/podniza
//     Vraća poziciju (int) ako nađe, false ako ne nađe
//     Pozicije se broje od 0
// EN: strpos($string, $search, $offset) - finds position of character/substring
//     Returns position (int) if found, false if not found
//     Positions are counted from 0
echo "\nPozicija znaka W u rečenici:\n";
$pozicijaW = strpos($recenica, "W", 0);
echo "\nPozicija od W je: {$pozicijaW}".PHP_EOL;

?>
