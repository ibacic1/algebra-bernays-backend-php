<!DOCTYPE html>
<html>
    <head>
        <title>IF Statement</title>
        <style>
            body{ font-family: Arial, Helvetica, sans-serif; }
            label{ margin-top: 10px; display: block; color: navy; }
            hr{ width: 100%; margin: 30px 0; }
            .istina{ color: green; font-weight: bold; }
            .laz{ color: red; font-weight: bold; }
            .default{ color: brown; font-weight: bold; }
        </style>
    </head>
    <body>
        <h1>IF bez vitičastih zagrada</h1>
        <?php

        // HR: IF bez vitičastih zagrada - izvršava samo JEDNU sljedeću naredbu
        // EN: IF without curly braces - executes only ONE next statement
        echo "<label>Primjer1:</label>";
        $broj = 10;
        if($broj > 5)
            echo "<p class='istina'>Broj je veći od 5</p>";

        // HR: OPASNOST - bez vitičastih zagrada samo prva naredba pripada if-u!
        //     Drugi echo se uvijek izvršava, bez obzira na uvjet
        // EN: DANGER - without curly braces only first statement belongs to if!
        //     Second echo always executes, regardless of condition
        echo "<label>Primjer2:</label>";
        $broj = 5;
        if($broj < -1 && $broj < -5)
            echo "<p class='istina'>Broj je manji od -5</p>";
            echo "<p class='default'>Ja ne zavisim od if uvjeta</p>"; // uvijek se ispisuje / always prints

        // HR: rand() generira slučajni broj - rezultat if-else se mijenja pri svakom učitavanju
        // EN: rand() generates random number - if-else result changes on every page load
        echo "<label>Primjer3 - if else:</label>";
        $broj = rand(10,20);
        if($broj > 15)
            echo "<p class='istina'>Broj $broj je veći od 15</p>";
        else
            echo "<p class=\"laz\">Broj $broj nije veći od 15</p>";

        // HR: && (AND) - oba uvjeta moraju biti ispunjena
        //     Obje osobe moraju imati >= 18 godina za ulaz u klub
        // EN: && (AND) - both conditions must be met
        //     Both persons must be >= 18 years old to enter the club
        echo "<label>Primjer4 - if else:</label>";
        $osoba1 = 18;
        $osoba2 = 20;
        if($osoba1 >= 18 && $osoba2 >= 18)
            echo "<p class='istina'>Obje su punoljetne i mogu ući u klub</p>";
        else
            echo "<p class='laz'>Obje nisu punoljetne i ne mogu ući u klub</p>";

        echo "<label>Primjer5 - if else:</label>";
        // HR: Zadatak: kupiti auto ako ima >150 KS ILI <20000 km ILI je dizel
        // EN: Exercise: buy car if it has >150 HP OR <20000 km OR diesel engine
        ?>

        <h1>IF sa vitičastim zagradama</h1>
        <?php

        // HR: === striktna usporedba - uspoređuje vrijednost I tip podataka
        //     "admin" === "admin" → true (isti string)
        //     1 === "1" → false (različiti tipovi - int vs string)
        // EN: === strict comparison - compares value AND data type
        //     "admin" === "admin" → true (same string)
        //     1 === "1" → false (different types - int vs string)
        echo "<label>Primjer6</label>";
        $korime      = "admin";
        $lozinka     = "administrator";
        $identifikator = 0;

        if($korime === "admin" && $lozinka == "administrator"){
            echo "<p class='istina'>Vi ste admin!</p>";
            echo "<p class='istina'>Imate sljedeće role: unos, ispis, ažuiranje, brisanje</p>";
            // HR: $identifikator++ - povećaj za 1 ako je admin
            // EN: $identifikator++ - increase by 1 if admin
            $identifikator++;
        } else {
            echo "<p class='laz'>Vi niste admin!</p>";
            echo "<p class='laz'>Nemate pristup ovoj stranici!</p>";
            // HR: $identifikator-- - smanji za 1 ako nije admin
            // EN: $identifikator-- - decrease by 1 if not admin
            $identifikator--;
        }
        echo "<label>Identifikator: $identifikator</label>";

        // HR: if / elseif / else - provjera više uvjeta redom
        //     Izvršava se SAMO prvi uvjet koji je true
        // EN: if / elseif / else - checking multiple conditions in order
        //     ONLY the first true condition executes
        echo "<label>Primjer7 - if,elseif,else</label>";
        $brojka = rand(9,12);
        echo "<p>Brojka: ".$brojka."</p>";

        if($brojka > 10){
            echo "<p class='istina'>Brojka veća od 10</p>";
        } elseif($brojka < 10){
            echo "<p class='istina'>Brojka manja od 10</p>";
        } else {
            echo "<p class='istina'>Brojka je jednaka 10</p>";
        }

        // HR: Ternarni operator - skraćeni zapis if/else u jednoj liniji
        //     uvjet ? vrijednost_ako_true : vrijednost_ako_false
        // EN: Ternary operator - shorthand if/else in one line
        //     condition ? value_if_true : value_if_false
        echo "<label>Primjer8 - ternarni operator</label>";
        $br = 10;

        // HR: Klasični if/else zapis
        // EN: Classic if/else notation
        if($br % 2 == 0){
            echo "<br>Paran";
        } else {
            echo "<br>Neparan";
        }

        // HR: Isti uvjet, ternarni zapis - kraće i čitljivije za jednostavne uvjete
        // EN: Same condition, ternary notation - shorter and more readable for simple conditions
        echo ($br % 2 == 0) ? "Tern - Paran" : "Tern - Neparan";

        // HR: date("l") - vraća naziv dana u tjednu na engleskom (lowercase L)
        //     Prevođenje u hrvatski pomoću if/elseif lanca
        // EN: date("l") - returns day of week name in English (lowercase L)
        //     Translation to Croatian using if/elseif chain
        $day = date("l");
        echo "<br>Dan je: ".$day;

        if($day == "Monday")         { $danCRO = "Ponedjeljak"; }
        elseif($day == "Tuesday")    { $danCRO = "Utorak"; }
        elseif($day == "Wednesday")  { $danCRO = "Srijeda"; }
        elseif($day == "Thursday")   { $danCRO = "Četvrtak"; }
        elseif($day == "Friday")     { $danCRO = "Petak"; }
        elseif($day == "Saturday")   { $danCRO = "Subota"; }
        else                         { $danCRO = "Nedjelja"; }

        echo "<label>HR dan je: ".$danCRO."</label>";
        ?>
    </body>
</html>
