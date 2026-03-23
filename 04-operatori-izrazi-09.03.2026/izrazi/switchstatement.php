<!DOCTYPE html>
<html>
    <head>
        <title>SWITCH statement</title>
        <style>
            label{ display: block; }
            .crvena{ color: red; }
            .plava{ color: blue; }
            .zelena{ color: green; }
            .default{ color: brown; font-weight: bold; text-decoration: underline; }
        </style>
    </head>
    <body>
        <h1>SWITCH primjeri</h1>
        <?php

        // HR: switch - alternativa dugom if/elseif lancu
        //     Uspoređuje jednu varijablu s više mogućih vrijednosti (case)
        //     break - zaustavlja izvršavanje switch bloka, bez njega nastavlja na sljedeći case
        //     default - izvršava se ako nijedan case ne odgovara
        // EN: switch - alternative to long if/elseif chain
        //     Compares one variable with multiple possible values (case)
        //     break - stops execution of switch block, without it continues to next case
        //     default - executes if no case matches

        $boja = rand(1,5);

        switch($boja){
            case 1:
                // HR: CSS klasa "crvena" primjenjuje crvenu boju teksta
                // EN: CSS class "crvena" applies red text color
                echo "<p class='crvena'>1 - odabrana je crvena boja</p>";
            break;

            case 2:
                echo "<p class='plava'>2 - odabrana je plava boja</p>";
                // HR: Unutar case-a možemo pisati dodatnu logiku
                // EN: Inside a case we can write additional logic
                $kvadrat = $boja * $boja;
                echo "<label>Kvadrat: ".$kvadrat."</label>";
            break;

            case 3:
                echo "<p class='zelena'>3 - odabrana je zelena boja</p>";
                // HR: Ugniježđeni if unutar switch case-a
                // EN: Nested if inside switch case
                if(rand(10,20) >= 15){
                    echo "<br>Random broj veći/jednak od 15";
                } else {
                    echo "<br>Random broj nije veći/jednak od 15";
                }
            break;

            // HR: default - izvršava se ako $boja nije 1, 2 ili 3 (npr. 4 ili 5)
            // EN: default - executes if $boja is not 1, 2 or 3 (e.g. 4 or 5)
            default:
                echo "<p class='default'>Nije odgovarajuća boja</p>";
        }

        // HR: Switch za prevođenje naziva dana - čišći zapis od if/elseif lanca
        //     date("l") vraća engleski naziv dana (Monday, Tuesday...)
        // EN: Switch for translating day names - cleaner than if/elseif chain
        //     date("l") returns English day name (Monday, Tuesday...)
        $danENG = date("l");
        echo "<br>Dan ENG je: ".$danENG;

        switch($danENG){
            case "Monday":    $danCRO = "Ponedjeljak"; break;
            case "Tuesday":   $danCRO = "Utorak";      break;
            case "Wednesday": $danCRO = "Srijeda";     break;
            case "Thursday":  $danCRO = "Četvrtak";    break;
            case "Friday":    $danCRO = "Petak";       break;
            case "Saturday":  $danCRO = "Subota";      break;
            case "Sunday":    $danCRO = "Nedjelja";    break;
        }

        echo "<br>Dan CRO: ".$danCRO;
        ?>
    </body>
</html>
