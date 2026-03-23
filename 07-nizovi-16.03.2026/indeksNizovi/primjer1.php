<?php

// ============================================================
// HR: Zadatak - unos studenta, ocjena i izračun prosjeka
//     Validacija ocjena (1-5)
//     Provjera pada pomoću in_array()
//     Alternativna sintaksa foreach: endforeach umjesto }
// EN: Exercise - student input, grades and average calculation
//     Grade validation (1-5)
//     Fail check using in_array()
//     Alternative foreach syntax: endforeach instead of }
// ============================================================

$ime_prezime = readline("Unesite ime i prezime: ");
$broj_ocjena = (int)readline("Unesite broj ocjena: ");

$ocjene = array();

for($broj = 1; $broj <= $broj_ocjena; $broj++){
    $ocjena = (int)readline("Unesite {$broj}. ocjenu: ");

    // HR: Validacija - ocjena mora biti između 1 i 5
    //     $broj-- vraća brojač unazad da se ova ocjena ne računa
    //     continue preskače ostatak iteracije i ide na sljedeću
    // EN: Validation - grade must be between 1 and 5
    //     $broj-- moves counter back so this grade doesn't count
    //     continue skips rest of iteration and goes to next
    if($ocjena < 1 || $ocjena > 5){
        echo "\nNeispravna ocjena!";
        $broj--;
        continue;
    }

    $ocjene[] = $ocjena;
}

// HR: in_array(1, $ocjene) - provjerava je li ocjena 1 u nizu ocjena
//     Ako postoji jedinka → student je pao
// EN: in_array(1, $ocjene) - checks if grade 1 is in grades array
//     If 1 exists → student has failed
if(in_array(1, $ocjene)){
    echo "\nStudent je pao";
} else {
    $suma = 0;

    // HR: Alternativna sintaksa za foreach - foreach(): ... endforeach;
    //     Funkcionalno isto kao foreach(){ ... }
    //     Češće se koristi kada se miješa PHP i HTML
    // EN: Alternative foreach syntax - foreach(): ... endforeach;
    //     Functionally same as foreach(){ ... }
    //     More commonly used when mixing PHP and HTML
    foreach($ocjene as $ocj):
        $suma += $ocj;
    endforeach;

    echo "\nProsjek studenta {$ime_prezime}: ".($suma / count($ocjene));
}

?>
