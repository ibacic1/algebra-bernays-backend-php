<?php

// ============================================================
// HR: Zadatak - multidimenzionalni niz studenata s matičnim brojem
//     Ključ vanjskog niza = matični broj studenta
//     Vrijednost = asocijativni niz s podacima studenta
//     Struktura: ["mat_broj" => ["ime"=>..., "prezime"=>..., ...]]
// EN: Exercise - multidimensional array of students with student ID
//     Outer array key = student ID number
//     Value = associative array with student data
//     Structure: ["mat_broj" => ["ime"=>..., "prezime"=>..., ...]]
// ============================================================

$broj_stud = (int)readline("Unesite broj studenata: ");

for($i = 1; $i <= $broj_stud; $i++){
    echo "\nUnos podataka za {$i}. studenta:\n";
    $matbroj = readline("Unesite matični broj: ");
    $ime     = readline("Unesite ime: ");
    $prezime = readline("Unesite prezime: ");
    $adresa  = readline("Unesite adresu: ");
    $zarada  = (float)readline("Unesite zaradu: ");

    // HR: Matični broj postaje KLJUČ vanjskog niza
    //     Unutarnji niz je asocijativni s podacima studenta
    //     $studenti["12345"] = ["ime"=>"Pero", "prezime"=>"Perić", ...]
    // EN: Student ID becomes KEY of outer array
    //     Inner array is associative with student data
    //     $studenti["12345"] = ["ime"=>"Pero", "prezime"=>"Peric", ...]
    $studenti[$matbroj] = [
        "ime"     => $ime,
        "prezime" => $prezime,
        "adresa"  => $adresa,
        "zarada"  => $zarada,
    ];
}

// HR: Ispis svih studenata - $matbroj je ključ, $podaci je unutarnji niz
// EN: Print all students - $matbroj is key, $podaci is inner array
foreach($studenti as $matbroj => $podaci){
    echo "\nMaticni broj: ".$matbroj;
    echo "\nIme: ".$podaci["ime"];
    echo "\nPrezime: ".$podaci["prezime"];
    echo "\nAdresa: ".$podaci["adresa"];
    echo "\nZarada: ".$podaci["zarada"];
    echo "\n============================";
}

// HR: Pronalazak studenta s najvećom zaradom
//     $maxPlaca = -1 kao početna vrijednost jer su zarade uvijek > 0
// EN: Finding student with highest salary
//     $maxPlaca = -1 as starting value because salaries are always > 0
echo "\nSTUDENT SA NAJVECOM ZARADOM\n";

$maxMatBroj = "";
$maxPodaci  = [];
$maxPlaca   = -1;

foreach($studenti as $matbroj => $podaci){
    if($podaci["zarada"] > $maxPlaca){
        $maxPlaca   = $podaci["zarada"];
        $maxMatBroj = $matbroj;
        $maxPodaci  = $podaci;
    }
}

echo "\nMatični broj: ".$maxMatBroj;
echo "\nIme: ".$maxPodaci["ime"];

?>
