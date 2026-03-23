<?php

// ============================================================
// HR: ASOCIJATIVNI NIZOVI - nizovi s imenovanim ključevima
//     Za razliku od indeksnih (0,1,2...) ključevi su stringovi
//     Sintaksa: array("kljuc"=>"vrijednost", ...)
//     ili:      ["kljuc"=>"vrijednost", ...]
// EN: ASSOCIATIVE ARRAYS - arrays with named keys
//     Unlike indexed (0,1,2...) keys are strings
//     Syntax: array("key"=>"value", ...)
//     or:     ["key"=>"value", ...]
// ============================================================

// HR: Pomoćna funkcija za standardizirani ispis niza
// EN: Helper function for standardized array display
function IspisNiza($niz){
    echo "\n========================================================\n";
    echo "\nSTRUKTURA NIZA\n";
    print_r($niz);
    echo "\nDuljina niza: ".count($niz);
    echo "\nISPIS NIZA PREKO FOREACH PETLJE - KLJUČEVI I VRIJEDNOSTI\n";
    foreach($niz as $key => $val){
        echo "\nElement niza: kljuc: ".$key." => vrijednost: ".$val;
    }
    echo "\n========================================================\n";
}

// HR: Deklaracija asocijativnog niza - ime=>godine
//     Ključ je ime osobe, vrijednost su njene godine
// EN: Declaration of associative array - name=>age
//     Key is person's name, value is their age
$imena = array("Pero"=>45, "Dado"=>15, "Miro"=>50, "Ana"=>36, "Cico"=>29);
IspisNiza($imena);

// HR: Dodavanje novog elementa - $niz["kljuc"] = vrijednost
// EN: Adding new element - $array["key"] = value
$imena["Bobo"] = 32;
IspisNiza($imena);

// HR: key() - vraća KLJUČ trenutnog (prvog) elementa niza
//     current() - vraća VRIJEDNOST trenutnog (prvog) elementa niza
// EN: key() - returns KEY of current (first) element in array
//     current() - returns VALUE of current (first) element in array
$key1 = key($imena);
echo "\nPrvi ključ: ".$key1;

$val1 = current($imena);
echo "\nPrva vrijednost: ".$val1;

// ============================================================
// HR: Pronalazak najstarije osobe u nizu
//     Počinjemo s prvim elementom kao "maksimumom"
//     Prolazimo kroz sve i ažuriramo ako nađemo veću vrijednost
// EN: Finding oldest person in array
//     Start with first element as "maximum"
//     Iterate through all and update if we find larger value
// ============================================================
$maksime = key($imena);
$maksgod = current($imena);

foreach($imena as $ime => $god){
    if($god > $maksgod){
        $maksgod = $god;
        $maksime  = $ime;
    }
}

echo "\nNajstariji je {$maksime} i ima {$maksgod} godina!";

// ============================================================
// HR: Asocijativni niz za prijevod - ključ=engleski, vrijednost=hrvatski
//     Koristimo ga za direktno dohvaćanje prijevoda: $dani[$currDay]
// EN: Associative array for translation - key=English, value=Croatian
//     We use it for direct translation lookup: $dani[$currDay]
// ============================================================
$dani = array(
    "Monday"    => "Ponedjeljak",
    "Tuesday"   => "Utorak",
    "Wednesday" => "Srijeda",
    "Thursday"  => "Četvrtak",
    "Friday"    => "Petak",
    "Saturday"  => "Subota",
    "Sunday"    => "Nedjelja"
);

$currDay = date("l");
echo "\nDanas je: ".$dani[$currDay];

// ============================================================
// HR: Provjera tipa vrijednosti u asocijativnom nizu
//     is_numeric() - vraća true ako je vrijednost broj (int ili float)
// EN: Checking value type in associative array
//     is_numeric() - returns true if value is a number (int or float)
// ============================================================
$osoba = [
    "ime"       => "Pero",
    "prezime"   => "Perić",
    "godine"    => 25,
    "placa"     => 2578.32,
    "datum_rod" => "1987-05-14",
    "visina"    => 178.95
];

$brojNumVr = 0;
foreach($osoba as $atribut => $vrijednost){
    if(is_numeric($vrijednost)){
        $brojNumVr++;
    }
}
echo "\nNumeričkih vrijednosti imamo: {$brojNumVr}";

// ============================================================
// HR: Brojanje automobila po vlasniku
//     $auti: ključ=auto, vrijednost=vlasnik
//     $vlasnici: ključ=vlasnik, vrijednost=broj auta
//     Ugniježđena foreach petlja broji pojavljivanja svakog vlasnika
// EN: Counting cars per owner
//     $auti: key=car, value=owner
//     $vlasnici: key=owner, value=number of cars
//     Nested foreach loop counts occurrences of each owner
// ============================================================
$auti["BMW"]     = "Pero";
$auti["Audi"]    = "Mate";
$auti["Kia"]     = "Ana";
$auti["Golf"]    = "Pero";
$auti["Mercedes"]= "Miro";
$auti["Opel"]    = "Pero";
$auti["Honda"]   = "Mate";
$auti["Toyota"]  = "Marko";
$auti["Fiat"]    = "Bobo";
$auti["Ford"]    = "Cico";
$auti["Jetta"]   = "Pero";
$auti["Jaguar"]  = "Bobo";
$auti["Dacia"]   = "Robo";
$auti["Renol"]   = "Zlatko";
$auti["Suzuki"]  = "Pero";
$auti["Hyundai"] = "Bobo";
$auti["Zastava"] = "Miro";

$vlasnici = array();

foreach($auti as $key1 => $val1){
    $brojac = 0;
    // HR: Unutarnja petlja broji koliko puta se $val1 pojavljuje kao vlasnik
    // EN: Inner loop counts how many times $val1 appears as owner
    foreach($auti as $key2 => $val2){
        if($val1 == $val2){
            $brojac++;
        }
    }
    $vlasnici[$val1] = $brojac;
}

// HR: arsort() - sortira po VRIJEDNOSTI silazno, čuva ključeve
// EN: arsort() - sort by VALUE descending, preserves keys
arsort($vlasnici);

foreach($vlasnici as $vlasnik => $brauta){
    echo "\nVlasnik {$vlasnik} ima {$brauta} auta u vlasništvu!";
}

// HR: ksort() - sortira po KLJUČU uzlazno (abecedno)
// EN: ksort() - sort by KEY ascending (alphabetically)
ksort($vlasnici);
IspisNiza($vlasnici);

// HR: krsort() - sortira po KLJUČU silazno (obrnuto abecedno)
// EN: krsort() - sort by KEY descending (reverse alphabetically)
krsort($vlasnici);
IspisNiza($vlasnici);

?>
