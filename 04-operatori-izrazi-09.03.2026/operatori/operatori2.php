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

        <h2>Inkrementacijski operatori</h2>
        <?php

        // HR: var++ (post-inkrement) - PRVO vrati trenutnu vrijednost, ONDA povećaj za 1
        // EN: var++ (post-increment) - FIRST return current value, THEN increase by 1
        echo "<label>Operator var++</label>";
        $x1 = 5;
        echo '<br>Varijabla x1 iznosi: '.$x1;        // ispisuje 5
        echo '<br>Varijabla x1++ iznosi: '.$x1++;     // ispisuje 5, zatim x1 postaje 6
        echo '<br>Varijabla x1 iznosi: '.$x1;         // ispisuje 6
        echo '<br>Varijabla x1++ iznosi: '.$x1++;     // ispisuje 6, zatim x1 postaje 7
        echo '<br>Varijabla x1++ iznosi: '.$x1++;     // ispisuje 7, zatim x1 postaje 8

        // HR: ++var (pre-inkrement) - PRVO povećaj za 1, ONDA vrati novu vrijednost
        // EN: ++var (pre-increment) - FIRST increase by 1, THEN return new value
        echo "<label>Operator ++var</label>";
        $x2 = 20;
        echo '<br>Varijabla x2 iznosi: '.$x2;        // ispisuje 20
        echo '<br>Varijabla ++x2 iznosi: '.++$x2;    // povećaj na 21, ispisuje 21
        echo '<br>Varijabla ++x2 iznosi: '.++$x2;    // povećaj na 22, ispisuje 22
        echo '<br>Varijabla ++x2 iznosi: '.++$x2;    // povećaj na 23, ispisuje 23
        echo '<br>Varijabla ++x2 iznosi: '.++$x2;    // povećaj na 24, ispisuje 24

        // HR: var-- (post-dekrement) - PRVO vrati trenutnu vrijednost, ONDA smanji za 1
        // EN: var-- (post-decrement) - FIRST return current value, THEN decrease by 1
        echo "<label>Operator var--</label>";
        $x3 = 35;
        echo '<br>Varijabla x3 iznosi: '.$x3;        // ispisuje 35
        echo '<br>Varijabla x3-- iznosi: '.$x3--;    // ispisuje 35, zatim x3 postaje 34
        echo '<br>Varijabla x3-- iznosi: '.$x3--;    // ispisuje 34, zatim x3 postaje 33
        echo '<br>Varijabla x3-- iznosi: '.$x3--;    // ispisuje 33, zatim x3 postaje 32
        echo '<br>Varijabla x3-- iznosi: '.$x3--;    // ispisuje 32, zatim x3 postaje 31

        // HR: --var (pre-dekrement) - PRVO smanji za 1, ONDA vrati novu vrijednost
        // EN: --var (pre-decrement) - FIRST decrease by 1, THEN return new value
        echo "<label>Operator --var</label>";
        $x4 = 50;
        echo '<br>Varijabla x4 iznosi: '.$x4;        // ispisuje 50
        echo '<br>Varijabla --x4 iznosi: '.--$x4;    // smanji na 49, ispisuje 49
        echo '<br>Varijabla --x4 iznosi: '.--$x4;    // smanji na 48, ispisuje 48
        echo '<br>Varijabla --x4 iznosi: '.--$x4;    // smanji na 47, ispisuje 47
        echo '<br>Varijabla --x4 iznosi: '.--$x4;    // smanji na 46, ispisuje 46

        echo "<hr>";
        ?>

        <h2>Operatori usporedbe</h2>
        <?php
        $broj1 = rand(1,10);
        $broj2 = rand(1,10);
        echo "<label>Brojevi:</label>".$broj1." i ".$broj2;

        // HR: > veće od / EN: > greater than
        echo "<p>Operator > : ($broj1 > $broj2): "; var_dump($broj1>$broj2)."</p>";

        // HR: < manje od / EN: < less than
        echo "<p>Operator < : ($broj1 < $broj2): "; var_dump($broj1<$broj2)."</p>";

        // HR: >= veće ili jednako / EN: >= greater than or equal
        echo "<p>Operator >= : ($broj1 >= $broj2): "; var_dump($broj1>=$broj2)."</p>";

        // HR: <= manje ili jednako / EN: <= less than or equal
        echo "<p>Operator <= : ($broj1 <= $broj2): "; var_dump($broj1<=$broj2)."</p>";

        $broj1 = 5;
        $broj2 = "5";

        // HR: == jednako (uspoređuje samo vrijednost, ne tip - "5" == 5 je TRUE)
        // EN: == equal (compares only value, not type - "5" == 5 is TRUE)
        echo "<p>Operator == : ($broj1 == $broj2): "; var_dump($broj1==$broj2)."</p>";

        // HR: != nije jednako (vrijednost) / EN: != not equal (value)
        echo "<p>Operator != : ($broj1 != $broj2): "; var_dump($broj1!=$broj2)."</p>";

        // HR: === identično (uspoređuje vrijednost I tip - 5 === "5" je FALSE jer je int !== string)
        // EN: === identical (compares value AND type - 5 === "5" is FALSE because int !== string)
        echo "<p>Operator === : ($broj1 === $broj2): "; var_dump($broj1===(int)$broj2)."</p>";

        // HR: !== nije identično (vrijednost ili tip se razlikuju)
        // EN: !== not identical (value or type differ)
        echo "<p>Operator !== : ($broj1 !== $broj2): "; var_dump($broj1!==$broj2)."</p>";
        ?>
    </body>
</html>
