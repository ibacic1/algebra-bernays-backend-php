<!DOCTYPE html>
<html>
    <head>
        <title>PHP Operatori</title>
        <style>
            body{ font-family: Arial, Helvetica, sans-serif; }
            label{ margin-top: 10px; display: block; color: navy; }
            hr{ width: 100%; margin: 30px 0; }
        </style>
    </head>
    <body>
        <h1>PHP Operatori</h1>

        <h2>Operatori dodjeljivanja</h2>
        <?php
        // HR: Operator dodjeljivanja = kopira vrijednost desne strane u varijablu lijevo
        // EN: Assignment operator = copies value from right side into variable on left
        $broj = 10;
        echo "<label>Broj:</label>".$broj;

        // HR: $temp čuva kopiju vrijednosti - mijenjanje $temp ne utječe na $broj
        // EN: $temp saves a copy of the value - changing $temp doesn't affect $broj
        $temp = $broj;
        echo "<label>Temp:</label>".$temp;
        echo "<hr>";
        ?>

        <h2>Aritmetički operatori</h2>
        <?php
        // HR: rand() - generira slučajni cijeli broj između zadanih vrijednosti
        // EN: rand() - generates a random integer between given values
        $broj1 = rand(10,20);
        $broj2 = rand(10,20);
        echo "<label>Broj1:</label>".$broj1;
        echo "<label>Broj2:</label>".$broj2;

        // HR: + zbrajanje / EN: + addition
        $rezultat = $broj1 + $broj2;
        echo "<label>Rezultat zbroj:</label>".$rezultat;

        // HR: - oduzimanje / EN: - subtraction
        $rezultat = $broj1 - $broj2;
        echo "<label>Rezultat razlika:</label>".$rezultat;

        // HR: * množenje / EN: * multiplication
        $rezultat = $broj1 * $broj2;
        echo "<label>Rezultat množenja:</label>".$rezultat;

        // HR: / dijeljenje, round() zaokružuje rezultat na 3 decimale
        // EN: / division, round() rounds result to 3 decimal places
        $rezultat = $broj1 / $broj2;
        echo "<label>Rezultat dijeljenja:</label>".round($rezultat, 3);

        // HR: % modulo - vraća ostatak dijeljenja (npr. 10%3 = 1)
        // EN: % modulo - returns remainder of division (e.g. 10%3 = 1)
        $rezultat = $broj1 % $broj2;
        echo "<label>Rezultat ostatak:</label>".$rezultat;
        echo "<hr>";
        ?>

        <h2>Logički operatori</h2>

        <h3>Operator AND</h3>
        <?php
        /*
        HR: AND (&&) - rezultat je TRUE samo ako su OBA uvjeta true
            Tablica istinitosti:
            ULAZ1   ULAZ2   REZULTAT
            1       1       1
            1       0       0
            0       1       0
            0       0       0

        EN: AND (&&) - result is TRUE only if BOTH conditions are true
            Truth table:
            INPUT1  INPUT2  RESULT
            1       1       1
            1       0       0
            0       1       0
            0       0       0
        */
        $ulaz1 = 2;
        $ulaz2 = 4;
        $ulaz3 = 8;

        // HR: Oba uvjeta moraju biti true da bi rezultat bio true
        // EN: Both conditions must be true for result to be true
        $rez = ($ulaz1>3 && $ulaz2>3);
        echo "<label>Rezultat:</label>";
        var_dump($rez);

        $rez = ($ulaz1>5 && $ulaz2>1);
        echo "<label>Rezultat:</label>";
        var_dump($rez);

        // HR: (int) pretvara boolean u broj - true=1, false=0
        // EN: (int) converts boolean to number - true=1, false=0
        echo "<label>Vrijednost:</label>".(int)$rez;

        // HR: Provjera jesu li svi brojevi parni (% 2 == 0)
        // EN: Check if all numbers are even (% 2 == 0)
        $rez = ($ulaz1%2==0 && $ulaz2%2==0 && $ulaz3%2==0);
        echo "<label>Rezultat:</label>";
        var_dump($rez);
        echo "<label>Vrijednost:</label>".(int)$rez;
        ?>

        <h3>Operator OR</h3>
        <?php
        /*
        HR: OR (||) - rezultat je TRUE ako je BAREM JEDAN uvjet true
            Tablica istinitosti:
            ULAZ1   ULAZ2   REZULTAT
            1       1       1
            1       0       1
            0       1       1
            0       0       0

        EN: OR (||) - result is TRUE if AT LEAST ONE condition is true
            Truth table:
            INPUT1  INPUT2  RESULT
            1       1       1
            1       0       1
            0       1       1
            0       0       0
        */
        $ulaz1 = rand(1,10);
        $ulaz2 = rand(1,10);
        $ulaz3 = rand(1,10);
        echo "<label>Brojevi:</label>".$ulaz1.",".$ulaz2.",".$ulaz3;

        $rez = ($ulaz1>3 || $ulaz2>3);
        echo "<label>Rezultat:</label>";
        var_dump($rez);

        // HR: Da li je ijedan broj paran?
        // EN: Is any number even?
        $rez = ($ulaz1%2==0 || $ulaz2%2==0 || $ulaz3%2==0);
        echo "<label>Rezultat:</label>";
        var_dump($rez);
        echo "<label>Vrijednost:</label>".(int)$rez;

        // HR: Kombinacija AND i OR - AND ima veći prioritet od OR
        //     Zagrade se koriste za jasnoću i kontrolu prioriteta
        // EN: Combination of AND and OR - AND has higher priority than OR
        //     Brackets are used for clarity and priority control
        $rez = (($ulaz1+$ulaz2+$ulaz3) > 17 and ($ulaz1%2==0 or $ulaz2%2==0 or $ulaz3%2==0));
        echo "<label>Rezultat:</label>";
        var_dump($rez);
        echo "<hr>";
        ?>

        <h3>Operator NOT</h3>
        <?php
        /*
        HR: NOT (!) - negacija, okreće vrijednost
            !true  = false
            !false = true
        EN: NOT (!) - negation, flips the value
            !true  = false
            !false = true
        */

        // HR: isset() - provjerava je li varijabla definirana i nije null
        // EN: isset() - checks if variable is defined and is not null
        $izjava1 = isset($ulaz1);  // true - $ulaz1 postoji / exists
        $izjava2 = isset($ulaz4);  // false - $ulaz4 ne postoji / doesn't exist

        var_dump($izjava1);
        var_dump($izjava2);

        echo '<label>Varijabla $ulaz1 je postavljena: </label>'; var_dump(isset($ulaz1));

        // HR: ! ispred isset() - vraća suprotnu vrijednost
        // EN: ! before isset() - returns opposite value
        echo '<label>Varijabla $ulaz1 nije postavljena: </label>'; var_dump(!isset($ulaz1));

        echo '<label>Varijabla $ulaz4 je postavljena: </label>'; var_dump(isset($ulaz4));
        echo '<label>Varijabla $ulaz4 nije postavljena: </label>'; var_dump(!isset($ulaz4));

        // HR: !(5>3) - 5>3 je true, ! to pretvara u false
        // EN: !(5>3) - 5>3 is true, ! converts it to false
        $izraz = !(5>3);
        echo "<label>Izraz:</label>"; var_dump($izraz);

        $a=5; $b=3; $c=4; $d=7; $e=10;

        // HR: Složeni logički izraz s AND, OR kombinacijom
        //     Zagrade definiraju redoslijed izvršavanja
        // EN: Complex logical expression with AND, OR combination
        //     Brackets define order of execution
        $finalrez = ($a > $b) && $c>3 && (($a+$b+$c)>($e*$c)/2 || ($e+$b)>12 || $d>4);
        echo "<label>finalrez:</label>"; var_dump($finalrez);
        ?>
    </body>
</html>
