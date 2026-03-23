<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTML stranica</title>
    </head>
    <body>
        <!-- HR: Razlika između .html i .php - PHP stranica može imati dinamički sadržaj
                 .html = uvijek isti sadržaj
                 .php  = sadržaj se generira u trenutku posjeta (npr. datum, računanje)
             EN: Difference between .html and .php - PHP page can have dynamic content
                 .html = always the same content
                 .php  = content is generated at the time of visit (e.g. date, calculation) -->
        <h1>Ovo je HTML statička stranica</h1>
        <p>Datum: 05.03.2026 18:45:26</p>

        <?php
        echo "<p>Nastavljam raditi u PHP-u</p>";

        // HR: date() - PHP funkcija koja vraća trenutni datum i vrijeme
        //     "d.m.Y H:i:s" = format: dan.mjesec.godina sat:minuta:sekunda
        // EN: date() - PHP function that returns current date and time
        //     "d.m.Y H:i:s" = format: day.month.year hour:minute:second
        echo "<br>Datum ".date("d.m.Y H:i:s");

        $a = 3;
        $b = 4;
        $c = $a + $b;

        // HR: Varijabla $c se koristi unutar stringa s dvostrukim navodnicima
        // EN: Variable $c is used inside a string with double quotes
        echo "<p>Rezultat je $c</p>";
        ?>
    </body>
</html>
