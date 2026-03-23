<?php
// HR: basename() - vraća samo naziv fajla bez putanje
//     $_SERVER["SCRIPT_NAME"] - putanja trenutne skripte (npr. /webshop/index.php)
//     $fileName se koristi u izbornik.php za označavanje aktivne stranice
// EN: basename() - returns only the filename without the path
//     $_SERVER["SCRIPT_NAME"] - path of the current script (e.g. /webshop/index.php)
//     $fileName is used in izbornik.php to mark the active page
$fileName = basename($_SERVER["SCRIPT_NAME"]);
?>
<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WebShop - početna stranica</title>
        <link rel="stylesheet" href="css/stil.css">
    </head>
    <body>
        <!-- HR: Header je izdvojen u poseban fajl - uključuje se na svakoj stranici
                 Promjena u ovom fajlu automatski se primjenjuje na sve stranice
             EN: Header is extracted to a separate file - included on every page
                 Changes in this file automatically apply to all pages -->
        <header>
            <h1>WebShop - izdvojeni header</h1>
            <p>Dobro došli na našu web trgovinu</p>
        </header>
    <?php
    // HR: require - uključuje navigaciju, ako fajl ne postoji skripta se zaustavlja
    // EN: require - includes navigation, if file doesn't exist script stops
    require "izbornik.php";
    ?>
