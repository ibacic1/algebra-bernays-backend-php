<!DOCTYPE html>
<html>
    <head>
        <title>FOR petlja</title>
        <style>
            body{ font-family: Arial, Helvetica, sans-serif; }
            h1{ font-size: 2.2em; } h2{ font-size: 2em; }
            table{ width: 60%; border-collapse: collapse; background-color: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.1); font-size: 12px; margin-top: 20px; }
            th, td{ padding: 10px; border: 1px solid #ccc; text-align: left; }
            th{ background-color: #333; color: #fff; }
        </style>
    </head>
    <body>
        <h1>Primjeri</h1>
        <?php

        // HR: for petlja - koristi se kad znamo točan broj iteracija
        //     Sintaksa: for(inicijalizacija; uvjet; inkrement){ ... }
        //     1. inicijalizacija → izvršava se JEDNOM na početku ($broj=1)
        //     2. uvjet           → provjerava se PRIJE svake iteracije ($broj<=10)
        //     3. inkrement       → izvršava se NAKON svake iteracije ($broj++)
        // EN: for loop - used when we know exact number of iterations
        //     Syntax: for(initialization; condition; increment){ ... }
        //     1. initialization → executes ONCE at start ($broj=1)
        //     2. condition      → checked BEFORE each iteration ($broj<=10)
        //     3. increment      → executes AFTER each iteration ($broj++)

        echo "<h2>Primjer 1</h2>";
        // HR: Klasično brojanje od 1 do 10
        // EN: Classic counting from 1 to 10
        for($broj = 1; $broj <= 10; $broj++){
            echo "<br>Broj je: ".$broj;
        }

        echo "<h2>Primjer 2</h2>";
        // HR: Silazno brojanje ($a--) s break kada $a==15
        //     break odmah prekida petlju, ostatak se ne izvršava
        // EN: Descending count ($a--) with break when $a==15
        //     break immediately stops loop, rest doesn't execute
        for($a = 20; $a >= 10; $a--){
            echo "<br>Broj a: ".$a;
            if($a == 15){
                break;
            }
        }

        echo "<h2>Primjer 3 - continue</h2>";
        // HR: continue - preskače TRENUTNU iteraciju i ide na SLJEDEĆU
        //     Razlika od break: break izlazi iz petlje, continue samo preskače iteraciju
        // EN: continue - skips CURRENT iteration and goes to NEXT
        //     Difference from break: break exits loop, continue only skips iteration
        for($i = 1; $i <= 10; $i++){
            if($i == 5){
                continue; // HR: preskoči 5, nastavi od 6 / EN: skip 5, continue from 6
            }
            echo "<br>Vrijednost i: ".$i;
        }

        echo "<h2>Primjer 4 - continue</h2>";
        // HR: Ispis samo parnih - neparni se preskakaju s continue
        //     $j%2==1 → neparan → preskoči
        // EN: Print only even numbers - odd ones are skipped with continue
        //     $j%2==1 → odd → skip
        for($j = 1; $j <= 20; $j++){
            if($j % 2 == 1){
                continue;
            }
            echo "<br>Vrijednost j: ".$j;
        }

        echo "<h2>Primjer 5</h2>";
        // HR: Ugniježđena for petlja za provjeru prostih/složenih brojeva
        //     Prost broj = ima točno 2 djelitelja (1 i sam sebe)
        //     Složen broj = ima više od 2 djelitelja
        //     Unutarnja petlja broji koliko je brojeva bez ostatka pri dijeljenju
        // EN: Nested for loop for checking prime/composite numbers
        //     Prime number = has exactly 2 divisors (1 and itself)
        //     Composite number = has more than 2 divisors
        //     Inner loop counts how many numbers divide evenly
        for($a = 1; $a <= 30; $a++){
            echo "<br>Broj: ".$a;
            $djelitelji = 0;
            for($b = 1; $b <= $a; $b++){
                if($a % $b == 0){
                    $djelitelji++;
                }
            }
            // HR: Ternarni operator - kratica za if/else u jednoj liniji
            //     uvjet ? vrijednost_ako_true : vrijednost_ako_false
            // EN: Ternary operator - shorthand for if/else in one line
            //     condition ? value_if_true : value_if_false
            echo $djelitelji > 2 ? " - složen" : " - prost";
        }

        echo "<h2>Primjer 6</h2>";
        // HR: Tablica množenja s dvije ugniježđene for petlje
        //     Vanjska petlja ($m) = redovi tablice
        //     Unutarnja petlja ($n) = stupci tablice
        //     Svaka ćelija = $m * $n
        // EN: Multiplication table with two nested for loops
        //     Outer loop ($m) = table rows
        //     Inner loop ($n) = table columns
        //     Each cell = $m * $n
        $limit = 10;
        echo "<table>";
        for($m = 1; $m <= $limit; $m++){
            echo "<tr>";
            for($n = 1; $n <= $limit; $n++){
                echo "<td>".($m * $n)."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
