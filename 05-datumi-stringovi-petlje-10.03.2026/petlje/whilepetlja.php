<!DOCTYPE html>
<html>
    <head>
        <title>WHILE petlja</title>
        <style>
            body{ font-family: Arial, Helvetica, sans-serif; }
            h1{ font-size: 2.2em; } h2{ font-size: 2em; }
            table{ width: 60%; border-collapse: collapse; background-color: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.1); font-size: 12px; margin-top: 20px; }
            th, td{ padding: 10px; border: 1px solid #ccc; text-align: left; }
            th{ background-color: #333; color: #fff; }
            .parni{ background-color: red; }
            .neparni{ background-color: greenyellow; }
        </style>
    </head>
    <body>
        <h1>Primjeri</h1>
        <?php

        // HR: while petlja - izvršava blok koda DOK je uvjet true
        //     Uvjet se provjerava PRIJE svake iteracije
        //     Ako uvjet nije ispunjen na početku, petlja se ne izvršava ni jednom
        // EN: while loop - executes code block WHILE condition is true
        //     Condition is checked BEFORE each iteration
        //     If condition is not met at start, loop doesn't execute at all

        echo "<h2>Primjer 1</h2>";
        $broj = 1;
        while($broj <= 10){
            echo "<br>Broj: ".$broj;
            // HR: $broj++ mora biti unutar petlje - bez toga = beskonačna petlja!
            // EN: $broj++ must be inside loop - without this = infinite loop!
            $broj++;
        }

        // HR: break - odmah prekida petlju bez provjere uvjeta
        // EN: break - immediately stops loop without checking condition
        echo "<h2>Primjer 2</h2>";
        $a = 10;
        $b = -10;
        while($a >= $b){
            echo "<br>Vrijednost a: ".$a--;
            if($a < 0){
                echo "<br>Prekid petlje";
                break; // HR: izlaz iz petlje kad $a padne ispod 0 / EN: exit loop when $a drops below 0
            }
        }

        // HR: Petlja s boolean uvjetom - $uvjet=false zaustavlja petlju
        // EN: Loop with boolean condition - $uvjet=false stops the loop
        echo "<h2>Primjer 3</h2>";
        $uvjet = true;
        $ind   = 1;
        while($uvjet == true){
            echo "<br>Istina";
            $ind++;
            if($ind == 3){
                $uvjet = false; // HR: postavljamo false → petlja završava / EN: set to false → loop ends
            }
        }

        // HR: Brojači unutar petlje - akumuliraju vrijednosti kroz iteracije
        // EN: Counters inside loop - accumulate values through iterations
        echo "<h2>Primjer 4</h2>";
        $brojka         = 1;
        $brojacparnih   = 0;
        $djeljivihsatri = 0;

        while($brojka <= 30){
            echo "<br>Brojka: ".$brojka;
            // HR: % modulo - ostatak dijeljenja, ako je 0 → broj je djeljiv
            // EN: % modulo - remainder of division, if 0 → number is divisible
            if($brojka % 2 == 0) $brojacparnih++;
            if($brojka % 3 == 0) $djeljivihsatri++;
            $brojka++;
        }
        echo "<br>Broj parnih: ".$brojacparnih;
        echo "<br>Broj djeljivih sa 3: ".$djeljivihsatri;

        echo "<h2>Primjer 5</h2>";
        // HR: Mješanje PHP-a i HTML-a unutar while petlje
        //     sqrt() = kvadratni korijen
        //     round($broj, 3) = zaokruži na 3 decimale
        //     CSS klasa se mijenja ovisno o parnosti broja
        // EN: Mixing PHP and HTML inside while loop
        //     sqrt() = square root
        //     round($number, 3) = round to 3 decimal places
        //     CSS class changes depending on number parity
        ?>
        <table>
            <thead>
                <tr>
                    <th>Broj</th><th>Korijen</th><th>Parnost</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $brojka = 1;
                while($brojka <= 10){
                    $korijen = round(sqrt($brojka), 3);
                    if($brojka % 2 == 0){
                        $parnost = "Paran";
                        $klasa   = "parni";
                    } else {
                        $parnost = "Neparan";
                        $klasa   = "neparni";
                    }
                ?>
                <tr class="<?= $klasa; ?>">
                    <td><?= $brojka; ?></td>
                    <td><?= $korijen; ?></td>
                    <td><?= $parnost; ?></td>
                </tr>
                <?php
                    $brojka++;
                }
                ?>
            </tbody>
        </table>

        <?php
        // HR: Fibonaccijev niz - svaki broj je zbroj prethodna dva
        //     0, 1, 1, 2, 3, 5, 8, 13, 21, 34...
        //     $prvi i $drugi se pomiču unaprijed u svakoj iteraciji
        // EN: Fibonacci sequence - each number is sum of previous two
        //     0, 1, 1, 2, 3, 5, 8, 13, 21, 34...
        //     $prvi and $drugi shift forward in each iteration
        echo "<h2>Primjer 6</h2>";
        $prvi     = 0;
        $drugi    = 1;
        $sljedeci = $prvi + $drugi;
        echo $prvi.", ".$drugi.", ";

        while($sljedeci < 800){
            echo $sljedeci.", ";
            $prvi     = $drugi;
            $drugi    = $sljedeci;
            $sljedeci = $prvi + $drugi;
        }
        ?>
    </body>
</html>
