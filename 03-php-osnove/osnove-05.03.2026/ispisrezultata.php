<?php
// HR: require - uključuje drugi PHP fajl, ako fajl ne postoji - skripta se ZAUSTAVLJA s greškom
//     Razlika od include: include samo upozori ali nastavi izvršavanje
// EN: require - includes another PHP file, if file doesn't exist - script STOPS with error
//     Difference from include: include only warns but continues execution
require "rezultati.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTML stranica</title>
    </head>
    <body>
        <h1>Ovo je trenutni rezultat:</h1>
        <?php
        // HR: Varijable $prvi i $drugi dolaze iz rezultati.php koji smo uključili gore
        // EN: Variables $prvi and $drugi come from rezultati.php included above
        echo "<br>Prvi: $prvi";
        ?>
        <?php echo "<br>Drugi: $drugi"; ?>

        <!-- HR: Iste varijable se mogu koristiti više puta jer su učitane u memoriju
             EN: Same variables can be used multiple times as they are loaded into memory -->
        <h1>Ovo je trenutni rezultat ponovno:</h1>
        <?php echo "<br>Prvi: $prvi"; ?>
        <?php echo "<br>Drugi: $drugi"; ?>
    </body>
</html>
