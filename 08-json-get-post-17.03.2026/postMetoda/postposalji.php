<!DOCTYPE html>
<html>
    <head>
        <title>POST pošalji</title>
        <link rel="stylesheet" href="stil.css">
    </head>
    <body>
    <?php
    include_once "sifarnici.php";

    $metoda = $_SERVER['REQUEST_METHOD'];
    echo "<label>Metoda: {$metoda}</label>";

    // HR: $_POST - superglobalni niz s POST podacima
    //     Za razliku od $_GET, ovi podaci nisu vidljivi u URL-u
    // EN: $_POST - superglobal array with POST data
    //     Unlike $_GET, this data is not visible in URL
    echo "<p>POST array</p>";
    print_r($_POST);

    echo "<label>Poslano ".count($_POST)." POST varijabli!</label>";

    $ime = $_POST["ime"];
    echo "<label class='post'>Ime: {$ime}</label>";

    $godine = $_POST["godine"];
    if(!empty($godine)){
        echo "<label class='post'>Godine: {$godine}</label>";
    } else {
        echo "<label class='greska'>Godine su prazne!</label>";
    }

    // HR: Dohvat i provjera select polja - grad
    //     $grad = kod (npr. "zg"), $gradovi[$grad] = naziv (npr. "Zagreb")
    // EN: Getting and checking select field - grad
    //     $grad = code (e.g. "zg"), $gradovi[$grad] = name (e.g. "Zagreb")
    if(isset($_POST["grad"])){
        $grad = $_POST["grad"];
        if($grad != "-1"){
            echo "<label class='post'>Grad: {$gradovi[$grad]}</label>";
        } else {
            echo "<label class='greska'>Grad nije odabran!</label>";
        }
    }

    // HR: Radio gumb - postoji u $_POST samo ako je odabran
    //     Ternarni operator za prijevod m/ž → Muški/Ženski
    // EN: Radio button - exists in $_POST only if selected
    //     Ternary operator for translation m/f → Muški/Ženski
    if(isset($_POST["spol"])){
        $spol    = $_POST["spol"];
        $spolinfo = $spol == "m" ? "Muški" : "Ženski";
        echo "<label class='post'>Spol: ".$spolinfo."</label>";
    } else {
        echo "<label class='greska'>Spol nije odabran!</label>";
    }

    // HR: Checkboxevi s name="sport[]" dolaze kao niz u $_POST["sport"]
    //     Iteriramo kroz odabrane - svaki $poslano je kod sporta (npr. "ng")
    //     $sportovi[$poslano] daje naziv (npr. "Nogomet")
    // EN: Checkboxes with name="sport[]" come as array in $_POST["sport"]
    //     We iterate through selected - each $poslano is sport code (e.g. "ng")
    //     $sportovi[$poslano] gives name (e.g. "Nogomet")
    if(isset($_POST["sport"])){
        $odbsportovi = $_POST["sport"];
        echo "<label class='post'>Sportovi: ";
        $sportovijoin = "";
        foreach($odbsportovi as $poslano){
            echo $sportovi[$poslano].", ";
            $sportovijoin .= $sportovi[$poslano];
        }
        echo "</label>";
    }

    // HR: Upload datoteke - $_FILES["name_polja"]
    //     ["name"]     = originalni naziv datoteke
    //     ["tmp_name"] = privremena lokacija na serveru
    //     ["type"]     = MIME tip (npr. image/jpeg)
    //     ["size"]     = veličina u bajtovima
    // EN: File upload - $_FILES["field_name"]
    //     ["name"]     = original filename
    //     ["tmp_name"] = temporary location on server
    //     ["type"]     = MIME type (e.g. image/jpeg)
    //     ["size"]     = size in bytes
    $putanja = __DIR__."/uploads";

    // HR: is_dir() - provjerava postoji li direktorij
    //     mkdir() - kreira direktorij ako ne postoji
    // EN: is_dir() - checks if directory exists
    //     mkdir() - creates directory if it doesn't exist
    if(!is_dir($putanja)){
        mkdir($putanja);
    }

    $imeDat = $_FILES["datoteka"]["name"];

    if($imeDat != ""){
        $odredisnaDatoteka = $putanja."/".basename($_FILES["datoteka"]["name"]);
        $tmpDat            = $_FILES["datoteka"]["tmp_name"];
        $tipDat            = $_FILES["datoteka"]["type"];
        $velicinaDat       = $_FILES["datoteka"]["size"];

        // HR: move_uploaded_file() - premješta datoteku s privremene lokacije
        //     na odredišnu lokaciju (uploads/ folder)
        //     Vraća true ako je premještanje uspješno
        // EN: move_uploaded_file() - moves file from temporary location
        //     to destination location (uploads/ folder)
        //     Returns true if move was successful
        if(move_uploaded_file($tmpDat, $odredisnaDatoteka)){
            echo "<label class='success'>Uspješno postavljena datoteka na folder</label>";
            echo "<label class='success'>Tip datoteke: {$tipDat}</label>";
            echo "<label class='success'>Veličina datoteke: ".($velicinaDat/1024)." KB</label>";
        }

        if(file_exists($odredisnaDatoteka)){
            echo "<label><img src='uploads/{$imeDat}'></label>";
        }
    }

    // HR: Provjera dužine opisa - strlen() vraća broj znakova
    // EN: Checking description length - strlen() returns number of characters
    if(!empty($_POST["opis"])){
        $opis = $_POST["opis"];
        if(strlen($opis) > 100){
            echo "<label class='greska'>Opis je predugačak!</label>";
        } else {
            echo "<label class='success'>Opis: ".$opis."</label>";
        }
    } else {
        echo "<label class='greska'>Opis je prazan</label>";
    }

    // HR: Spremanje POST podataka u JSON datoteku
    //     storage/ mapa se kreira ako ne postoji
    // EN: Saving POST data to JSON file
    //     storage/ folder is created if it doesn't exist
    $postpath = __DIR__."/storage";
    if(!is_dir($postpath)){
        mkdir($postpath);
    }

    $postdatoteka = $postpath."/postpodaci.json";

    if(!file_exists($postdatoteka)){
        file_put_contents($postdatoteka, json_encode([]));
    }

    $podaci = json_decode(file_get_contents($postdatoteka), true);

    // HR: max(array_column($podaci,'id'))+1 - pronalazi najveći ID i dodaje 1
    //     array_column() - izvlači sve vrijednosti određenog ključa iz 2D niza
    //     Ako je $podaci prazan - ID počinje od 1
    // EN: max(array_column($podaci,'id'))+1 - finds largest ID and adds 1
    //     array_column() - extracts all values of specific key from 2D array
    //     If $podaci is empty - ID starts from 1
    $id = !empty($podaci) ? max(array_column($podaci,'id'))+1 : 1;

    $podaci[] = [
        "id"       => $id,
        "ime"      => $ime,
        "godine"   => $godine,
        "grad"     => $gradovi[$grad],
        "spol"     => $spolinfo,
        "sportovi" => $sportovijoin,
        "slika"    => "uploads/".$imeDat,
        "opis"     => $opis
    ];

    file_put_contents($postdatoteka, json_encode($podaci, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    ?>

    <p><a href="postmetoda.php">Ponovno</a></p>
    </body>
</html>
