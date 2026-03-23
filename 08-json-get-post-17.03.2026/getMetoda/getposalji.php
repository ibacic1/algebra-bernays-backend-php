<!DOCTYPE html>
<html>
    <head>
        <title>GET pošalji</title>
        <link rel="stylesheet" href="stil.css">
    </head>
    <body>
    <?php

    // HR: $_SERVER['REQUEST_METHOD'] - HTTP metoda kojom je stranica pozvana
    //     GET = učitavanje stranice ili forma s method="GET"
    //     POST = forma s method="POST"
    // EN: $_SERVER['REQUEST_METHOD'] - HTTP method used to call the page
    //     GET = page load or form with method="GET"
    //     POST = form with method="POST"
    $metoda = $_SERVER['REQUEST_METHOD'];
    echo "<label>Metoda: {$metoda}</label>";

    // HR: $_GET - superglobalni asocijativni niz s GET parametrima
    //     Automatski popunjen iz URL query stringa
    //     print_r() prikazuje cijeli sadržaj niza
    // EN: $_GET - superglobal associative array with GET parameters
    //     Automatically populated from URL query string
    //     print_r() displays entire array content
    echo "<p>GET array</p>";
    print_r($_GET);

    // HR: isset($_GET["FormaGet"]) - provjerava je li submit gumb (FormaGet) u $_GET
    //     Ako da → dolazi s forme, ako ne → dolazi s linka
    // EN: isset($_GET["FormaGet"]) - checks if submit button (FormaGet) is in $_GET
    //     If yes → came from form, if no → came from link
    if(isset($_GET["FormaGet"])){
        echo "<label>Došao sa forme</label>";
    } else {
        echo "<label>Došao sa linka</label>";
    }

    echo "<label>Poslano ".count($_GET)." GET varijabli!</label>";

    // HR: Dohvat GET parametra po ključu: $_GET["naziv_polja"]
    //     Ključ = name atribut input polja u formi
    // EN: Access GET parameter by key: $_GET["field_name"]
    //     Key = name attribute of input field in form
    $ime = $_GET["ime"];
    echo "<label class='post'>Ime: {$ime}</label>";

    $godine = $_GET["godine"];

    // HR: empty() - vraća true ako je varijabla prazna (prazan string, 0, null, false)
    // EN: empty() - returns true if variable is empty (empty string, 0, null, false)
    if(!empty($godine)){
        echo "<label class='post'>Godine: {$godine}</label>";
    } else {
        echo "<label class='greska'>Godine su prazne!</label>";
    }

    // HR: isset() - provjerava postoji li ključ u $_GET
    //     Korisno za opcionalne parametre koji možda nisu poslani
    //     npr. "placa" postoji samo kada dolazimo s linka, ne s forme
    // EN: isset() - checks if key exists in $_GET
    //     Useful for optional parameters that may not be sent
    //     e.g. "placa" exists only when coming from link, not form
    if(isset($_GET["placa"])){
        $placa = $_GET["placa"];
        echo "<label class='post'>Plaća: {$placa}</label>";
    }

    // HR: QUERY_STRING - cijeli query string iz URL-a (iza ?)
    //     npr. "ime=Romano&godine=55&placa=3333&status=1"
    // EN: QUERY_STRING - entire query string from URL (after ?)
    //     e.g. "ime=Romano&godine=55&placa=3333&status=1"
    echo "<label class='post'>Query string: ".$_SERVER['QUERY_STRING']."</label>";
    ?>

    <p><a href="getmetoda.php">Ponovno</a></p>
    </body>
</html>
