<!DOCTYPE html>
<html>
    <head>
        <title>Datumi u PHP-u</title>
        <style>
            body{ font-family: Arial, Helvetica, sans-serif; }
            h1{ font-size: 2.2em; }
            h2{ font-size: 2em; }
            table{ width: 60%; border-collapse: collapse; background-color: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.1); font-size: 12px; margin-top: 20px; }
            th, td{ padding: 10px; border: 1px solid #ccc; text-align: left; }
            th{ background-color: #333; color: #fff; }
            .parni{ background-color: red; }
            .neparni{ background-color: greenyellow; }
        </style>
    </head>
    <body>
        <h1>Datum</h1>
        <?php
        // HR: date() - PHP funkcija za formatiranje datuma/vremena
        //     d = dan (01-31), m = mjesec (01-12), Y = godina (2026)
        //     H = sat 24h (00-23), i = minute (00-59), s = sekunde (00-59)
        // EN: date() - PHP function for formatting date/time
        //     d = day (01-31), m = month (01-12), Y = year (2026)
        //     H = hour 24h (00-23), i = minutes (00-59), s = seconds (00-59)
        $datum = date("d.m.Y");
        echo "<br>Datum: ".$datum;

        // HR: Svaki dio datuma u zasebnoj varijabli
        // EN: Each part of the date in a separate variable
        $dd = date("d");
        $mm = date("m");
        $gg = date("Y");

        echo "<br>Dijelovi datuma: ";
        echo "<br>Dan: ".$dd;
        echo "<br>Mjesec: ".$mm;
        echo "<br>Godina: ".$gg;

        echo "<p>Godine:</p>";

        // HR: Dinamički <select> od 2000 do trenutne godine
        //     Svake godine se automatski proširuje jer koristimo $gg (trenutna godina)
        // EN: Dynamic <select> from 2000 to current year
        //     Automatically expands each year because we use $gg (current year)
        echo "<select>";
        for($god = 2000; $god <= $gg; $god++){
            echo "<option value='{$god}'>$god</option>";
        }
        echo "</select>";
        ?>

        <h1>Vrijeme</h1>
        <?php
        $vrijeme = date("H:i:s");
        echo "<br>Vrijeme: ".$vrijeme;

        // HR: Datum i vrijeme zajedno u jednom stringu
        // EN: Date and time together in one string
        $timestamp = date("d.m.Y H:i:s");
        echo "<br>Timestamp: ".$timestamp;

        // HR: Format za SQL - Y-m-d jer SQL sortira datume kao string
        // EN: Format for SQL - Y-m-d because SQL sorts dates as string
        $datumzasql = date("Y-m-d");
        echo "<br>Datum za sql: ".$datumzasql;

        // HR: strtotime() - pretvara datum-string u Unix timestamp (sekunde od 1.1.1970.)
        //     date() zatim formatira taj timestamp u željeni format
        // EN: strtotime() - converts date-string to Unix timestamp (seconds since 1.1.1970.)
        //     date() then formats that timestamp into desired format
        $datumunos = "21.04.2017";
        echo "<br>Datum unos: ".$datumunos;
        $datumunossql = date("Y-m-d", strtotime($datumunos));
        echo "<br>Datum unos sql: ".$datumunossql;

        $datumunos = "21.04.2017 15:38:22";
        echo "<br>Datum unos: ".$datumunos;
        $datumunossql = date("Y-m-d H:i:s", strtotime($datumunos));
        echo "<br>Datum unos sql: ".$datumunossql;

        // HR: l = naziv dana (Monday, Tuesday...), F = naziv mjeseca (January, February...)
        // EN: l = day name (Monday, Tuesday...), F = month name (January, February...)
        $godinaunos  = date("Y", strtotime($datumunos));
        $danunosa    = date("l", strtotime($datumunos));
        $mjesecunosa = date("F", strtotime($datumunos));

        echo "<br>Godina unosa: ".$godinaunos;
        echo "<br>Dan unosa: ".$danunosa;
        echo "<br>Mjesec unosa: ".$mjesecunosa;
        ?>
    </body>
</html>
