<!DOCTYPE html>
<html>
    <head>
        <title>GET metoda</title>
        <link rel="stylesheet" href="stil.css">
    </head>
    <body>
    <h1>GET metoda - 1</h1>
    <?php

    /*
    HR: Zadatak - abecedni indeks knjiga:
        Generirati abecedu slova pomoću range()
        Svako slovo = klikabilni GET link (?znak=A)
        Po kliku → ispiši slovo → učitaj knjige s tim slovom iz knjige.json
        Ako nema knjige → poruka: Ne postoji knjiga koja počinje s tim slovom

    EN: Exercise - alphabetical book index:
        Generate alphabet using range()
        Each letter = clickable GET link (?znak=A)
        On click → print letter → load books starting with that letter from knjige.json
        If no books → message: Ne postoji knjiga koja počinje s tim slovom
    */

    // HR: range("A","Z") - generira niz svih slova od A do Z
    //     Isti princip kao range(1,10) za brojeve
    // EN: range("A","Z") - generates array of all letters from A to Z
    //     Same principle as range(1,10) for numbers
    $abeceda = range("A","Z");

    // HR: Svako slovo postaje GET link: href='?znak=A'
    //     ? znači query string, znak=A je parametar
    //     Ista stranica se poziva s različitim parametrom
    // EN: Each letter becomes GET link: href='?znak=A'
    //     ? means query string, znak=A is parameter
    //     Same page is called with different parameter
    foreach($abeceda as $slovo){
        echo "<a href='?znak=$slovo'>$slovo</a>";
    }

    // HR: isset($_GET["znak"]) - provjerava je li korisnik kliknuo na slovo
    //     Ako da → dohvati slovo i pozovi ProcitajKnjige()
    // EN: isset($_GET["znak"]) - checks if user clicked on a letter
    //     If yes → get letter and call ProcitajKnjige()
    if(isset($_GET["znak"])){
        $znak = $_GET["znak"];
        echo "<label class='success'>Kliknuo na slovo: {$znak}</label>";
        ProcitajKnjige($znak);
    }

    // HR: Funkcija čita knjige iz JSON datoteke i filtrira po prvom slovu
    //     $znak = slovo po kojemu filtriramo
    // EN: Function reads books from JSON file and filters by first letter
    //     $znak = letter we filter by
    function ProcitajKnjige($znak){

        $putanja = __DIR__."/storage/knjige.json";

        if(file_exists($putanja)){
            $knjigeJSON = file_get_contents($putanja);
            $knjige     = json_decode($knjigeJSON, true);

            $brojac = 0;

            foreach($knjige as $knjiga){
                // HR: substr($string, 0, 1) - uzima prvo slovo naziva knjige
                //     Uspoređujemo ga s kliknutim slovom
                // EN: substr($string, 0, 1) - takes first letter of book title
                //     We compare it with clicked letter
                $prvoslovo = substr($knjiga["naziv"], 0, 1);

                if($znak == $prvoslovo){
                    echo "<label>Knjiga: ".$knjiga["naziv"]."</label>";
                    $brojac++;
                }
            }

            // HR: Ako ni jedna knjiga ne počinje s tim slovom
            // EN: If no book starts with that letter
            if($brojac == 0){
                echo "<label>Ne postoji knjiga za traženo slovo!</label>";
            }
        }
    }
    ?>
    </body>
</html>
