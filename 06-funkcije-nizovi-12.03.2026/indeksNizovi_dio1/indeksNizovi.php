<?php

// ============================================================
// HR: INDEKSNI NIZOVI (Arrays) u PHP-u
//     Niz = varijabla koja može čuvati više vrijednosti odjednom
//     Svaka vrijednost ima svoj indeks (ključ) koji počinje od 0
//     Indeks = ključ = pozicija → sve isto!
// EN: INDEXED ARRAYS in PHP
//     Array = variable that can store multiple values at once
//     Each value has its index (key) starting from 0
//     Index = key = position → all the same!
// ============================================================

// HR: Skalarna varijabla - čuva samo jednu vrijednost
//     Svaki put kad dodijelimo novu vrijednost, stara se gubi
// EN: Scalar variable - stores only one value
//     Each time we assign new value, old one is lost
$auto = "BMW";
echo "\nJa volim auto: ".$auto;

$auto = "AUDI";  // HR: BMW je izgubljen / EN: BMW is lost
echo "\nJa volim auto: ".$auto;

// HR: Niz (array) - čuva sve vrijednosti odjednom
//     array() ili [] - dva načina deklaracije niza
//     Indeksi: BMW=0, AUDI=1, KIA=2, Mercedes=3...
// EN: Array - stores all values at once
//     array() or [] - two ways to declare array
//     Indices: BMW=0, AUDI=1, KIA=2, Mercedes=3...
$auti = array("BMW","AUDI","KIA","Mercedes","Škoda","Opel","Golf");
//  indeksi:    0      1     2       3         4       5     6

// HR: Dohvat elementa po indeksu - $niz[indeks]
// EN: Access element by index - $array[index]
echo "\nJa volim auto: ".$auti[1];   // AUDI
echo "\nJa volim auto: ".$auti[5];   // Opel

// HR: print_r() - prikazuje strukturu niza čitljivo
//     var_dump() - prikazuje strukturu s tipovima podataka
// EN: print_r() - displays array structure readably
//     var_dump() - displays structure with data types
echo "\nSTRUKTURA NIZA\n";
print_r($auti);
var_dump($auti);

// HR: count() / sizeof() - vraća broj elemenata u nizu
// EN: count() / sizeof() - returns number of elements in array
$duljina = count($auti);
echo "\nDuljina niza: ".$duljina;

// HR: Ispis niza for petljom - koristimo indeks od 0 do sizeof-1
// EN: Printing array with for loop - use index from 0 to sizeof-1
echo "\nISPIS NIZA PREKO FOR PETLJE\n";
for($a = 0; $a < sizeof($auti); $a++){
    echo "\nElement niza: ".$auti[$a];
}

// HR: $auti[] = "Fiat" - dodavanje elementa na KRAJ niza
//     PHP automatski dodjeljuje sljedeći indeks (7)
// EN: $auti[] = "Fiat" - adding element to END of array
//     PHP automatically assigns next index (7)
$auti[] = "Fiat";
echo "\nSTRUKTURA NIZA\n";
print_r($auti);

echo "\nISPIS NIZA PREKO FOR PETLJE\n";
for($a = 0; $a < sizeof($auti); $a++){
    echo "\nElement niza: ".$auti[$a];
}

// HR: array_push() - dodaje VIŠE elemenata na kraj niza odjednom
// EN: array_push() - adds MULTIPLE elements to end of array at once
array_push($auti, "Hyundai", "Citroen");
echo "\nSTRUKTURA NIZA\n";
print_r($auti);

echo "\nISPIS NIZA PREKO FOR PETLJE\n";
for($a = 0; $a < sizeof($auti); $a++){
    echo "\nElement niza: ".$auti[$a];
}

// HR: unset() - briše element na određenom indeksu
//     VAŽNO: indeksi se NE preuređuju! Indeks 4 ostaje prazan (rupa u nizu)
//     sizeof() ne smanjuje broj elemenata po indeksima, nego broji preostale
// EN: unset() - deletes element at specific index
//     IMPORTANT: indices are NOT reordered! Index 4 remains empty (gap in array)
//     sizeof() doesn't decrease count by indices, counts remaining elements
unset($auti[4]);
echo "\nSTRUKTURA NIZA\n";
print_r($auti);

// HR: array_key_exists() - provjerava postoji li ključ u nizu
//     Potrebno jer smo obrisali index 4 - bez provjere bi bila greška
// EN: array_key_exists() - checks if key exists in array
//     Needed because we deleted index 4 - without check would get error
echo "\nISPIS NIZA PREKO FOR PETLJE\n";
for($a = 0; $a < sizeof($auti); $a++){
    if(array_key_exists($a, $auti)){
        echo "\nElement niza: ".$auti[$a];
    }
}

// HR: foreach - najlakši način prolaska kroz niz
//     foreach($niz as $vrijednost) → samo vrijednosti
// EN: foreach - easiest way to iterate through array
//     foreach($array as $value) → values only
echo "\nISPIS NIZA PREKO FOREACH PETLJE - VRIJEDNOSTI\n";
foreach($auti as $auto){
    echo "\nElement niza foreach: ".$auto;
}

// HR: foreach($niz as $kljuc => $vrijednost) → ključevi I vrijednosti
//     $k = indeks (0,1,2...), $auto = vrijednost ("BMW","AUDI"...)
// EN: foreach($array as $key => $value) → keys AND values
//     $k = index (0,1,2...), $auto = value ("BMW","AUDI"...)
echo "\nISPIS NIZA PREKO FOREACH PETLJE - KLJUČEVI I VRIJEDNOSTI\n";
foreach($auti as $k => $auto){
    echo "\nElement niza foreach: kljuc: ".$k." => vrijednost: ".$auto;
}

// HR: Funkcija za standardizirani ispis niza
//     Prima niz kao parametar i ispisuje njegovu strukturu
// EN: Function for standardized array display
//     Takes array as parameter and prints its structure
function IspisNiza($niz){
    echo "\nSTRUKTURA NIZA\n";
    print_r($niz);
    echo "\nDuljina niza: ".count($niz);
    echo "\nISPIS NIZA PREKO FOREACH PETLJE - KLJUČEVI I VRIJEDNOSTI\n";
    foreach($niz as $key => $val){
        echo "\nElement niza: kljuc: ".$key." => vrijednost: ".$val;
    }
    echo "\n========================================================\n";
}

IspisNiza($auti);

// HR: Novi niz gradova - $gradovi[] dodaje element po element
// EN: New cities array - $gradovi[] adds element by element
$gradovi[] = "Zagreb";
$gradovi[] = "Split";
$gradovi[] = "Rijeka";
$gradovi[] = "Osijek";
$gradovi[] = "Dubrovnik";
IspisNiza($gradovi);

// HR: array_push s više argumenata - dodaje više gradova odjednom
// EN: array_push with multiple arguments - adds multiple cities at once
array_push($gradovi, "Pula", "Makarska", "Karlovac");
IspisNiza($gradovi);

?>
