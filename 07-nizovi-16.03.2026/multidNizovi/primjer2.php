<?php

// ============================================================
// HR: Multidimenzionalni asocijativni niz studenata
//     Vanjski niz je indeksni (0,1,2...)
//     Unutarnji nizovi su asocijativni (ime, prezime, ocjena)
//     Dohvat: $studenti[0]["ime"] = "Ana"
// EN: Multidimensional associative array of students
//     Outer array is indexed (0,1,2...)
//     Inner arrays are associative (ime, prezime, ocjena)
//     Access: $studenti[0]["ime"] = "Ana"
// ============================================================

$studenti = [
    [
        "ime"     => "Ana",
        "prezime" => "Anić",
        "ocjena"  => 5
    ],
    [
        "ime"     => "Marko",
        "prezime" => "Marić",
        "ocjena"  => 4
    ],
    [
        "ime"     => "Ivan",
        "prezime" => "Ivić",
        "ocjena"  => 3
    ]
];

// HR: Dohvat elementa: $studenti[redak]["kljuc"]
// EN: Element access: $studenti[row]["key"]
echo "\nPrvi student ime: ".$studenti[0]["ime"];
echo "\nDrugi student prezime: ".$studenti[1]["prezime"];
echo "\nTreci student ocjena: ".$studenti[2]["ocjena"];

// HR: foreach prolazi kroz svaki "red" (studenta)
//     $student je asocijativni niz jednog studenta
// EN: foreach iterates through each "row" (student)
//     $student is associative array of one student
echo "\nISPIS PREKO FOREACH PETLJE:\n";
foreach($studenti as $student){
    echo "\nStudent ime: ".$student["ime"];
    echo "\nStudent prezime: ".$student["prezime"];
    echo "\nStudent ocjena: ".$student["ocjena"];
    echo "\n====================================";
}

// HR: Pronalazak studenta s najvećom ocjenom
//     Počinjemo s prvim studentom kao "maksimumom"
//     Prolazimo kroz sve i ažuriramo ako nađemo veću ocjenu
// EN: Finding student with highest grade
//     Start with first student as "maximum"
//     Iterate through all and update if we find higher grade
$maxOcjena       = $studenti[0]["ocjena"];
$najboljiStudent = $studenti[0];

foreach($studenti as $student){
    if($student["ocjena"] > $maxOcjena){
        $maxOcjena       = $student["ocjena"];
        $najboljiStudent = $student;
    }
}

echo "\nNajveću ocjenu ima ".$najboljiStudent["ime"]." ".$najboljiStudent["prezime"]." (".$maxOcjena.")";

// HR: Pretraživanje niza - tražimo studenta po imenu
//     $pronadjen = boolean zastavica (flag)
//     Na kraju provjeravamo zastavicu - je li student pronađen?
// EN: Searching array - looking for student by name
//     $pronadjen = boolean flag
//     At end we check flag - was student found?
echo "\nDA LI POSTOJI STUDENT POD IMENOM Ivan?:\n";
$pronadjen = false;

foreach($studenti as $student){
    if($student["ime"] == "Ivanko"){
        echo "\nPronađen student: ".$student["ime"];
        $pronadjen = true;
    }
}

if(!$pronadjen){
    echo "\nStudent nije pronađen!";
}

?>
