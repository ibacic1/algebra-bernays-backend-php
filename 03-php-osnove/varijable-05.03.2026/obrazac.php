<?php
// HR: include - uključuje podaci.php koji definira varijable za defaultne vrijednosti forme
//     Razlika include vs require:
//     include - ako fajl ne postoji, samo upozorenje, skripta nastavlja
//     require - ako fajl ne postoji, fatalna greška, skripta se zaustavlja
// EN: include - includes podaci.php which defines variables for default form values
//     Difference include vs require:
//     include - if file doesn't exist, only warning, script continues
//     require - if file doesn't exist, fatal error, script stops
include "podaci.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>::Vjezba ponavljanja::</title>
        <style>
            /* HR: display:block - svaki label zauzima cijeli red
               EN: display:block - each label takes up the full row */
            label{
                display: block;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Obrazac</h1>

        <form>
            <!-- HR: value="<?php echo $imeprezime; ?>" - popunjava polje s vrijednošću iz podaci.php
                 EN: value="<?php echo $imeprezime; ?>" - fills field with value from podaci.php -->
            <label>Ime i prezime:</label>
            <input type="text" name="imeprezime" value="<?php echo $imeprezime; ?>">

            <!-- HR: <?= $email ?> je kratica za <?php echo $email; ?>
                 EN: <?= $email ?> is shorthand for <?php echo $email; ?> -->
            <label>Email:</label>
            <input type="email" name="email" value="<?= $email; ?>">

            <label>Datum rođenja:</label>
            <input type="date" name="datumrodjenja" value="<?= $datrod; ?>">

            <label>Visina:</label>
            <input type="number" name="visina" step="0.01" value="<?= $visina; ?>">

            <!-- HR: textarea nema value atribut - sadržaj ide između tagova
                 EN: textarea has no value attribute - content goes between tags -->
            <label>Poruka:</label>
            <textarea name="poruka" cols="30" rows="10"><?= $poruka; ?></textarea>

            <label><button type="submit">Pošalji</button></label>
        </form>

        <?php
        // HR: $_SERVER["SERVER_NAME"] - naziv servera (npr. localhost)
        //     basename($_SERVER['PHP_SELF']) - samo naziv skripte (npr. obrazac.php)
        // EN: $_SERVER["SERVER_NAME"] - server name (e.g. localhost)
        //     basename($_SERVER['PHP_SELF']) - only script name (e.g. obrazac.php)
        echo "<br>Server name: ".$_SERVER["SERVER_NAME"];
        echo "<br>Skripta: ".basename($_SERVER['PHP_SELF']);
        ?>

        <hr>

        <?php
        // HR: var_dump() - ispisuje tip i vrijednost svake varijable
        //     Korisno za provjeru tipova podataka koje dobivamo iz podaci.php
        // EN: var_dump() - prints type and value of each variable
        //     Useful for checking data types we get from podaci.php
        echo var_dump($imeprezime);
        echo var_dump($email);
        echo var_dump($datrod);
        echo var_dump($poruka);
        echo var_dump($visina);
        ?>
    </body>
</html>
