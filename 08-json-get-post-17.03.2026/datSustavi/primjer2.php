<?php

$datoteka = __DIR__."/knjige.json";

// HR: Čitanje JSON datoteke i dekodiranje u PHP niz
// EN: Reading JSON file and decoding into PHP array
if(file_exists($datoteka)){
    $knjigeJSON = file_get_contents($datoteka);
}

$knjige = json_decode($knjigeJSON, true);

// HR: print_r() - ispisuje strukturu niza čitljivo
// EN: print_r() - prints array structure readably
print_r($knjige);

echo "\nČitanje JSON-a\n";

// HR: foreach prolazi kroz svaku knjigu u nizu
//     $knjiga je asocijativni niz s ključevima: naziv, autor, stranice, godina, datumzapis
// EN: foreach iterates through each book in array
//     $knjiga is associative array with keys: naziv, autor, stranice, godina, datumzapis
foreach($knjige as $knjiga){
    echo "\nNaziv knjige: ".$knjiga["naziv"];
    echo "\nAutor knjige: ".$knjiga["autor"];
    echo "\nStranice knjige: ".$knjiga["stranice"];
    echo "\nGodina knjige: ".$knjiga["godina"];

    // HR: strtotime() pretvara datum string u timestamp
    //     date() formatira timestamp u čitljivi format
    //     "d.m.Y H:i:s" = dan.mjesec.godina sat:minuta:sekunda
    // EN: strtotime() converts date string to timestamp
    //     date() formats timestamp into readable format
    //     "d.m.Y H:i:s" = day.month.year hour:minute:second
    echo "\nDatum zapisa: ".date("d.m.Y H:i:s", strtotime($knjiga["datumzapis"]));
    echo "\n========================================";
}

?>
