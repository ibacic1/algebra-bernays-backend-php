<?php

// ============================================================
// HR: helpers.php - pomoćne funkcije za rad s JSON datotekom
//     Sve tri funkcije koriste globalnu varijablu $putanja
//     koja je definirana u primjer3.php
// EN: helpers.php - helper functions for working with JSON file
//     All three functions use global variable $putanja
//     which is defined in primjer3.php
// ============================================================

function UnosPodataka(){

    // HR: global $putanja - dohvaćamo globalnu varijablu iz primjer3.php
    //     Bez "global", funkcija ne bi mogla vidjeti $putanja
    // EN: global $putanja - access global variable from primjer3.php
    //     Without "global", function would not see $putanja
    global $putanja;

    $broj_pr = (int)readline("Unesite broj proizvoda: ");

    for($i = 1; $i <= $broj_pr; $i++){
        echo "\nUnos podataka za {$i} proizvod:\n";
        $sifra    = readline("Unesite šifru: ");
        $naziv    = readline("Unesite naziv: ");
        $kolicina = (int)readline("Unesite količinu: ");
        $cijena   = (float)readline("Unesite cijenu: ");

        // HR: Čitamo postojeće podatke ako datoteka postoji
        //     Svaki unos se DODAJE na postojeće, ne prepisuje sve
        // EN: Read existing data if file exists
        //     Each input is ADDED to existing, doesn't overwrite all
        if(file_exists($putanja)){
            $proizvodiJSON = file_get_contents($putanja);
            $proizvodi     = json_decode($proizvodiJSON, true);
        } else {
            $proizvodi = [];
        }

        // HR: Šifra je KLJUČ asocijativnog niza
        //     Ako šifra već postoji, podatak se prepisuje (update)
        //     Ako ne postoji, dodaje se novi element (insert)
        // EN: Code is KEY of associative array
        //     If code already exists, data is overwritten (update)
        //     If not, new element is added (insert)
        $proizvodi[$sifra] = [
            "naziv"    => $naziv,
            "kolicina" => $kolicina,
            "cijena"   => $cijena
        ];

        // HR: JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        //     | (bitwise OR) kombinira dvije opcije
        //     PRETTY_PRINT = čitljivo formatiranje s uvlakama
        //     UNESCAPED_UNICODE = čuva hrvatska slova (š,č,ž...)
        // EN: JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        //     | (bitwise OR) combines two options
        //     PRETTY_PRINT = readable formatting with indentation
        //     UNESCAPED_UNICODE = preserves Croatian chars (š,č,ž...)
        $proizvodiJSON = json_encode($proizvodi, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        $zapisi        = file_put_contents($putanja, $proizvodiJSON);

        if($zapisi){
            echo "\nZapis uspješno pospremljen na ".$putanja;
        }
    }
}

function IspisPodataka(){

    global $putanja;

    if(!file_exists($putanja)){
        $proizvodi = [];
    } else {
        $proizvodiJSON = file_get_contents($putanja);
        $proizvodi     = json_decode($proizvodiJSON, true);
    }

    // HR: foreach prolazi kroz svaki proizvod
    //     $sifra = ključ (šifra proizvoda)
    //     $podaci = asocijativni niz (naziv, kolicina, cijena)
    // EN: foreach iterates through each product
    //     $sifra = key (product code)
    //     $podaci = associative array (naziv, kolicina, cijena)
    foreach($proizvodi as $sifra => $podaci){
        echo "\nŠifra: ".$sifra;
        echo "\nNaziv: ".$podaci["naziv"];
        echo "\nKoličina: ".$podaci["kolicina"];
        echo "\nCijena: ".$podaci["cijena"];

        $ukupno = $podaci["kolicina"] * $podaci["cijena"];

        // HR: number_format($broj, decimale, dec_separator, tisucice_separator)
        //     2 = 2 decimale, "," = decimalni separator, "." = separator tisućica
        //     npr. 51250 → "51.250,00 €"
        // EN: number_format($number, decimals, dec_separator, thousands_separator)
        //     2 = 2 decimals, "," = decimal separator, "." = thousands separator
        //     e.g. 51250 → "51.250,00 €"
        echo "\nUkupno: ".number_format($ukupno, 2, ",", ".")." €";
        echo "\n=========================";
    }
}

function PretragaPodataka($sifraUnos){

    global $putanja;

    if(!file_exists($putanja)){
        $proizvodi = [];
    } else {
        $proizvodiJSON = file_get_contents($putanja);
        $proizvodi     = json_decode($proizvodiJSON, true);
    }

    // HR: array_key_exists() - provjerava postoji li ključ (šifra) u nizu
    //     Ako postoji → ispiši proizvod
    //     Ako ne postoji → ispiši poruku greške
    // EN: array_key_exists() - checks if key (code) exists in array
    //     If exists → print product
    //     If not → print error message
    if(array_key_exists($sifraUnos, $proizvodi)){
        echo "\nProizvod pronađen: \n";

        // HR: Alternativna sintaksa foreach: ... endforeach;
        //     Isto kao foreach(){ } ali drugačiji stil pisanja
        // EN: Alternative foreach syntax: ... endforeach;
        //     Same as foreach(){ } but different writing style
        foreach($proizvodi as $sifra => $podaci):
            if($sifra == $sifraUnos):
                echo "\nŠifra: ".$sifra;
                echo "\nNaziv: ".$podaci["naziv"];
                echo "\nKoličina: ".$podaci["kolicina"];
                echo "\nCijena: ".$podaci["cijena"];
                $ukupno = $podaci["kolicina"] * $podaci["cijena"];
                echo "\nUkupno: ".number_format($ukupno, 2, ",", ".")." €";
            endif;
        endforeach;
    } else {
        echo "\nProizvod nije pronađen!";
    }
}

?>
