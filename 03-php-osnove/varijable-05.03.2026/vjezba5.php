<?php

echo "<h1>PREDEFINIRANE VARIJABLE U PHP-U</h1>";

// HR: $_SERVER - superglobalna varijabla koja sadrži informacije o serveru i zahtjevu
//     Dostupna je svugdje u skripti, bez obzira na scope
// EN: $_SERVER - superglobal variable containing info about server and request
//     Available everywhere in the script, regardless of scope

// HR: SERVER_NAME - naziv servera (npr. localhost ili domena)
// EN: SERVER_NAME - server name (e.g. localhost or domain)
echo "<br>HOST: ".$_SERVER["SERVER_NAME"];

// HR: PHP_SELF - putanja do trenutne skripte od root-a (npr. /folder/skripta.php)
// EN: PHP_SELF - path to current script from root (e.g. /folder/script.php)
echo "<br>".$_SERVER['PHP_SELF'];

// HR: basename() - vraća samo naziv fajla bez putanje (npr. vjezba5.php)
// EN: basename() - returns only filename without path (e.g. vjezba5.php)
echo "<br>".basename($_SERVER['PHP_SELF']);

// HR: REQUEST_METHOD - HTTP metoda zahtjeva (GET, POST, PUT, DELETE...)
// EN: REQUEST_METHOD - HTTP request method (GET, POST, PUT, DELETE...)
echo "<br>".$_SERVER['REQUEST_METHOD'];

// HR: QUERY_STRING - parametri u URL-u iza ? (npr. ime=Pero&grad=Zagreb)
// EN: QUERY_STRING - URL parameters after ? (e.g. ime=Pero&grad=Zagreb)
echo "<br>".$_SERVER['QUERY_STRING'];

// HR: DOCUMENT_ROOT - putanja do root mape web servera na disku
// EN: DOCUMENT_ROOT - path to web server root folder on disk
echo "<br>".$_SERVER['DOCUMENT_ROOT'];

// HR: REQUEST_URI - cijeli URI zahtjeva uključujući query string
// EN: REQUEST_URI - complete request URI including query string
echo "<br>".$_SERVER['REQUEST_URI'];

?>
