<?php

// HR: Šifarnici - asocijativni nizovi s kodovima i nazivima
//     Ključ = kratki kod (oznaka), Vrijednost = puni naziv
//     Koriste se za padajuće izbornike i checkbox opcije u formi
//     Uključuju se u postmetoda.php i postposalji.php s include_once
// EN: Code lists - associative arrays with codes and names
//     Key = short code (identifier), Value = full name
//     Used for dropdown menus and checkbox options in form
//     Included in postmetoda.php and postposalji.php with include_once

// HR: Gradovi - ključ je dvoslovna oznaka, vrijednost puni naziv grada
// EN: Cities - key is two-letter code, value is full city name
$gradovi["zg"] = "Zagreb";
$gradovi["st"] = "Split";
$gradovi["ri"] = "Rijeka";
$gradovi["os"] = "Osijek";
$gradovi["du"] = "Dubrovnik";
$gradovi["vu"] = "Vukovar";
$gradovi["ka"] = "Karlovac";
$gradovi["ma"] = "Makarska";

// HR: Sportovi - ključ je kratka oznaka, vrijednost naziv sporta
//     Koristimo za checkbox - jedan korisnik može odabrati više sportova
// EN: Sports - key is short code, value is sport name
//     Used for checkbox - one user can select multiple sports
$sportovi["ng"] = "Nogomet";
$sportovi["ru"] = "Rukomet";
$sportovi["od"] = "Odbojka";
$sportovi["ko"] = "Košarka";
$sportovi["va"] = "Vatrepol";

?>
