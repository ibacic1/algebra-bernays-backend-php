<?php

// HR: Skalarna varijabla čuva samo jednu vrijednost
// EN: Scalar variable stores only one value
$auto = "BMW";
echo "\nJa volim auto: ".$auto;
$auto = "AUDI";
echo "\nJa volim auto: ".$auto;

// HR: Indeksni niz - indeksi počinju od 0
//     indeks = ključ = pozicija → sve isto
// EN: Indexed array - indices start from 0
//     index = key = position → all the same
$auti = array("BMW","AUDI","KIA","Mercedes","Škoda","Opel","Golf");
//  indeksi:   0      1     2       3          4      5     6

echo "\nJa volim auto: ".$auti[1];   // AUDI
echo "\nJa volim auto: ".$auti[5];   // Opel

echo "\nSTRUKTURA NIZA\n";
print_r($auti);   // HR: čitljivi prikaz / EN: readable display
var_dump($auti);  // HR: prikaz s tipovima / EN: display with types

$duljina = count($auti);
echo "\nDuljina niza: ".$duljina;

echo "\nISPIS NIZA PREKO FOR PETLJE\n";
for($a = 0; $a < sizeof($auti); $a++){
    echo "\nElement niza: ".$auti[$a];
}

// HR: $auti[] = dodaje na kraj niza, PHP automatski dodjeljuje indeks
// EN: $auti[] = adds to end of array, PHP automatically assigns index
$auti[] = "Fiat";
echo "\nSTRUKTURA NIZA\n";
print_r($auti);

echo "\nISPIS NIZA PREKO FOR PETLJE\n";
for($a = 0; $a < sizeof($auti); $a++){
    echo "\nElement niza: ".$auti[$a];
}

// HR: array_push() - dodaje više elemenata na kraj odjednom
// EN: array_push() - adds multiple elements to end at once
array_push($auti, "Hyundai", "Citroen");
echo "\nSTRUKTURA NIZA\n";
print_r($auti);

echo "\nISPIS NIZA PREKO FOR PETLJE\n";
for($a = 0; $a < sizeof($auti); $a++){
    echo "\nElement niza: ".$auti[$a];
}

// HR: unset() - briše element, ali NE preuređuje indekse!
//     Indeks 4 ostaje prazan - nastaje "rupa" u nizu
// EN: unset() - deletes element but does NOT reorder indices!
//     Index 4 remains empty - a "gap" appears in the array
unset($auti[4]);
echo "\nSTRUKTURA NIZA\n";
print_r($auti);

// HR: array_key_exists() - provjera postoji li ključ prije dohvata
//     Potrebno jer ima "rupe" na indeksu 4
// EN: array_key_exists() - check if key exists before accessing
//     Needed because there's a "gap" at index 4
echo "\nISPIS NIZA PREKO FOR PETLJE\n";
for($a = 0; $a < sizeof($auti); $a++){
    if(array_key_exists($a, $auti)){
        echo "\nElement niza: ".$auti[$a];
    }
}

// HR: foreach - prolazi samo kroz postojeće elemente, preskače "rupe"
// EN: foreach - iterates only through existing elements, skips "gaps"
echo "\nISPIS NIZA PREKO FOREACH PETLJE - VRIJEDNOSTI\n";
foreach($auti as $auto){
    echo "\nElement niza foreach: ".$auto;
}

echo "\nISPIS NIZA PREKO FOREACH PETLJE - KLJUČEVI I VRIJEDNOSTI\n";
foreach($auti as $k => $auto){
    echo "\nElement niza foreach: kljuc: ".$k." => vrijednost: ".$auto;
}

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

$gradovi[] = "Zagreb";
$gradovi[] = "Split";
$gradovi[] = "Rijeka";
$gradovi[] = "Osijek";
$gradovi[] = "Dubrovnik";
IspisNiza($gradovi);

array_push($gradovi, "Pula", "Makarska", "Karlovac");
IspisNiza($gradovi);

array_push($gradovi, "Vukovar", "Vinkovci");
IspisNiza($gradovi);

// HR: array_shift() - uklanja i vraća PRVI element niza
//     Indeksi se automatski preuređuju od 0
// EN: array_shift() - removes and returns FIRST element of array
//     Indices are automatically reordered from 0
array_shift($gradovi);
IspisNiza($gradovi);

// HR: array_unshift() - dodaje jedan ili više elemenata na POČETAK niza
//     Postojeći elementi se pomiču, indeksi se preuređuju
// EN: array_unshift() - adds one or more elements to BEGINNING of array
//     Existing elements shift, indices are reordered
array_unshift($gradovi, "Omiš", "Makarska");
IspisNiza($gradovi);

// HR: Niz brojeva za analizu i sortiranje
// EN: Array of numbers for analysis and sorting
$brojevi[] = 34;
$brojevi[] = 27;
$brojevi[] = 17;
$brojevi[] = 42;
$brojevi[] = 54;
$brojevi[] = 23;
$brojevi[] = 12;
$brojevi[] = 39;
IspisNiza($brojevi);

// HR: Analiza niza - jedan prolaz kroz foreach za sve vrijednosti
//     Efikasnije nego više zasebnih petlji
// EN: Array analysis - one pass through foreach for all values
//     More efficient than multiple separate loops
echo "\na) najmanji element niza:\n";

$najmanji      = $brojevi[0];  // HR: počinjemo s prvim kao "min" / EN: start with first as "min"
$najveci       = $brojevi[0];  // HR: počinjemo s prvim kao "max" / EN: start with first as "max"
$suma          = 0;
$zbrojneparpoz = 0;
$brojparnih    = 0;

foreach($brojevi as $key => $val){
    if($val < $najmanji) $najmanji = $val;
    if($val > $najveci)  $najveci  = $val;

    // HR: Neparni indeksi (1,3,5,7...) - $key%2==1
    // EN: Odd indices (1,3,5,7...) - $key%2==1
    if($key % 2 == 1) $zbrojneparpoz += $val;

    // HR: Parni element - ostatak dijeljenja s 2 je 0
    // EN: Even element - remainder of division by 2 is 0
    if($val % 2 == 0) $brojparnih++;

    $suma += $val;
}

echo "\n- najmanji element niza: ".$najmanji;
echo "\n- najveci element niza: ".$najveci;
$prosjek = $suma / count($brojevi);
echo "\n- prosječni element niza: ".$prosjek;
echo "\n- zbroj elemenata neparnih pozicija: ".$zbrojneparpoz;
echo "\n- broj parnih elemenata: ".$brojparnih;

// HR: Ručno sortiranje uzlazno - Bubble Sort algoritam
//     Uspoređujemo svaki par susjednih elemenata i zamjenjujemo ako je potrebno
//     Prolazimo kroz niz dok nije sortiran
// EN: Manual ascending sort - Bubble Sort algorithm
//     Compare each pair of adjacent elements and swap if needed
//     Pass through array until it's sorted
echo "\nSortiranje niza - uzlazno:\n";
for($i = 0; $i < sizeof($brojevi); $i++){
    for($j = $i + 1; $j < sizeof($brojevi); $j++){
        $temp = 0;
        if($brojevi[$i] > $brojevi[$j]){
            // HR: Zamjena elemenata pomoću privremene varijable
            // EN: Swapping elements using temporary variable
            $temp        = $brojevi[$i];
            $brojevi[$i] = $brojevi[$j];
            $brojevi[$j] = $temp;
        }
    }
    echo "\nBroj: ".$brojevi[$i];
}
IspisNiza($brojevi);

// HR: Ručno sortiranje silazno - isti algoritam, obrnuta usporedba
// EN: Manual descending sort - same algorithm, reversed comparison
echo "\nSortiranje niza - silazno:\n";
for($i = 0; $i < sizeof($brojevi); $i++){
    for($j = $i + 1; $j < sizeof($brojevi); $j++){
        $temp = 0;
        if($brojevi[$i] < $brojevi[$j]){
            $temp        = $brojevi[$i];
            $brojevi[$i] = $brojevi[$j];
            $brojevi[$j] = $temp;
        }
    }
    echo "\nBroj: ".$brojevi[$i];
}

// HR: Gotove PHP funkcije za sortiranje - brže i jednostavnije od ručnog
//     sort()   - uzlazno po vrijednosti, resetira indekse
//     rsort()  - silazno po vrijednosti, resetira indekse
//     ksort()  - uzlazno po ključu (indeksu)
//     krsort() - silazno po ključu (indeksu)
// EN: Built-in PHP sorting functions - faster and simpler than manual
//     sort()   - ascending by value, resets indices
//     rsort()  - descending by value, resets indices
//     ksort()  - ascending by key (index)
//     krsort() - descending by key (index)
echo "\nGotove metode za sortiranje:\n";

echo "\nSortiranje niza - uzlazno po vrijednosti:\n";
sort($brojevi);
IspisNiza($brojevi);

echo "\nSortiranje niza - silazno po vrijednosti:\n";
rsort($brojevi);
IspisNiza($brojevi);

echo "\nSortiranje niza - uzlazno po indeksu (ključu):\n";
ksort($brojevi);
IspisNiza($brojevi);

echo "\nSortiranje niza - silazno po indeksu (ključu):\n";
krsort($brojevi);
IspisNiza($brojevi);

// HR: explode() - dijeli string u niz po zadanom separatoru
//     " " (razmak) = separator → svaka riječ postaje element niza
//     suprotno od implode() koji spaja niz u string
// EN: explode() - splits string into array by given separator
//     " " (space) = separator → each word becomes array element
//     opposite of implode() which joins array into string
$izraz     = "Moje ime je Davorin Bogovic i sve oko mene je crno bijeli svijet";
$izraz_niz = explode(" ", $izraz);
IspisNiza($izraz_niz);

foreach($izraz_niz as $val){
    if(strlen($val) >= 5){
        $info = "5 i više znakova";
    } else {
        $info = "Manje od 5 znakova";
    }
    echo "\n{$val} => ".strlen($val)." => ".$info;
}

// HR: Generiranje niza bez duplikata
//     ProvjeriDuplog() - vraća true ako broj već postoji u nizu
//     Ako duplikat postoji ($ima=true), $m-- vraća iterator unazad
// EN: Generating array without duplicates
//     ProvjeriDuplog() - returns true if number already exists in array
//     If duplicate exists ($ima=true), $m-- moves iterator back
$brojke   = array();
$brojke[] = 55;

for($m = 1; $m <= 9; $m++){
    $broj = rand(10, 99);
    $ima  = ProvjeriDuplog($brojke, $broj);
    if(!$ima){
        $brojke[] = $broj;
    } else {
        $m--;  // HR: ponovi ovu iteraciju / EN: repeat this iteration
    }
}

function ProvjeriDuplog($brojke, $broj){
    foreach($brojke as $br){
        if($broj == $br){
            return true;  // HR: duplikat pronađen / EN: duplicate found
        }
    }
    return false;  // HR: nije duplikat / EN: not a duplicate
}

IspisNiza($brojke);
IspisNiza($gradovi);

// HR: in_array() - provjerava postoji li vrijednost u nizu
//     Vraća true/false
// EN: in_array() - checks if value exists in array
//     Returns true/false
if(in_array("dfdf", $gradovi)){
    echo "Postoji Osijek u nizu gradovi";
} else {
    echo "Ne postoji trazeni pojam";
}

// HR: array_search() - traži vrijednost i vraća njen KLJUČ (indeks)
//     Vraća false ako element nije pronađen
// EN: array_search() - searches for value and returns its KEY (index)
//     Returns false if element is not found
$poz = array_search("Pula", $gradovi);
echo "\nPozz Pula: ".$poz;

?>
