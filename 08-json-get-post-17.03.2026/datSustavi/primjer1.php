<?php

// HR: __DIR__ - konstanta koja vraća putanju do direktorija trenutne skripte
//     Koristimo je za apsolutnu putanju do JSON datoteke
//     Bolje od relativne putanje jer radi bez obzira odakle se skripta poziva
// EN: __DIR__ - constant that returns path to directory of current script
//     Used for absolute path to JSON file
//     Better than relative path because it works regardless of where script is called from
$datoteka = __DIR__."/knjige.json";

// HR: file_exists() - provjerava postoji li datoteka na disku
//     Ako postoji, čitamo je; ako ne, počinjemo s praznim nizom
// EN: file_exists() - checks if file exists on disk
//     If it exists, we read it; if not, we start with empty array
if(file_exists($datoteka)){
    // HR: file_get_contents() - čita cijeli sadržaj datoteke kao string
    //     json_decode($json, true) - pretvara JSON string u PHP niz
    //     true = asocijativni niz (key=>value), bez true = stdClass objekt
    // EN: file_get_contents() - reads entire file content as string
    //     json_decode($json, true) - converts JSON string to PHP array
    //     true = associative array (key=>value), without true = stdClass object
    $knjigeJSON = file_get_contents($datoteka);
    $knjige     = json_decode($knjigeJSON, true);
} else {
    $knjige = [];
}

// HR: Dodavanje nove knjige na kraj niza
//     $knjige[] = dodaje element na kraj
// EN: Adding new book to end of array
//     $knjige[] = adds element to end
$knjige[] = [
    "naziv"      => "PHP programiranje",
    "autor"      => "Oliver Code",
    "stranice"   => 252,
    "godina"     => 2022,
    "datumzapis" => date("Y-m-d H:i:s")  // HR: trenutni datum i vrijeme / EN: current date and time
];

// HR: json_encode() - pretvara PHP niz u JSON string
//     JSON_PRETTY_PRINT    = formatira JSON s uvlakama (čitljivije)
//     JSON_UNESCAPED_UNICODE = čuva posebne znakove (š,č,ž...) bez escapeanja
// EN: json_encode() - converts PHP array to JSON string
//     JSON_PRETTY_PRINT    = formats JSON with indentation (more readable)
//     JSON_UNESCAPED_UNICODE = keeps special characters (š,č,ž...) without escaping
$knjigeJSON = json_encode($knjige, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

// HR: file_put_contents() - zapisuje string u datoteku (prepisuje sadržaj)
//     Vraća broj zapisanih bajtova ili false ako je greška
// EN: file_put_contents() - writes string to file (overwrites content)
//     Returns number of bytes written or false if error
$zapisi = file_put_contents($datoteka, $knjigeJSON);

if($zapisi){
    echo "\nUspješan zapis";
}

?>
