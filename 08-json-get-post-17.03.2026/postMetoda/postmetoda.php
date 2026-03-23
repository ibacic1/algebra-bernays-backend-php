<!DOCTYPE html>
<html>
    <head>
        <title>POST metoda</title>
        <link rel="stylesheet" href="stil.css">
    </head>
    <body>
    <?php
    // HR: include_once - uključuje sifarnici.php samo jednom
    //     Daje nam $gradovi i $sportovi nizove za padajući izbornik i checkboxeve
    // EN: include_once - includes sifarnici.php only once
    //     Gives us $gradovi and $sportovi arrays for dropdown and checkboxes
    include_once "sifarnici.php";
    ?>
    <h1>POST metoda</h1>

    <!-- HR: method="POST" - podaci se šalju skriveno u HTTP body-u
             RAZLIKA od GET: POST podaci NISU vidljivi u URL-u
             enctype="multipart/form-data" - OBAVEZNO za upload datoteka!
             Bez ovog, $_FILES neće funkcionirati
         EN: method="POST" - data is sent hidden in HTTP body
             DIFFERENCE from GET: POST data is NOT visible in URL
             enctype="multipart/form-data" - REQUIRED for file upload!
             Without this, $_FILES won't work -->
    <form method="POST" action="postposalji.php" enctype="multipart/form-data">

        <label>Ime:</label>
        <label><input type="text" name="ime" id="ime"></label>

        <label>Godine:</label>
        <label><input type="number" name="godine" id="godine" value="35"></label>

        <label>Grad:</label>
        <label>
            <!-- HR: select - padajući izbornik
                     Generiramo opcije iz $gradovi šifarnika
                     value="$ozn" = kod koji se šalje, prikazuje se $grad
                 EN: select - dropdown menu
                     We generate options from $gradovi code list
                     value="$ozn" = code that is sent, $grad is displayed -->
            <select name="grad" id="grad">
                <option value="-1">--Odaberite--</option>
                <?php foreach($gradovi as $ozn => $grad): ?>
                    <option value="<?= $ozn; ?>"><?= $grad; ?></option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>Spol:</label>
        <label>
            <!-- HR: radio - biramo JEDNU opciju od više
                     Isti name="spol" grupira ih zajedno
                 EN: radio - select ONE option from multiple
                     Same name="spol" groups them together -->
            <input type="radio" name="spol" value="m"> Muški
            <input type="radio" name="spol" value="z"> Ženski
        </label>

        <label>Sportovi:</label>
        <?php foreach($sportovi as $oznsport => $nazivsport): ?>
            <!-- HR: checkbox s name="sport[]" - uglatezagrade označavaju niz
                     PHP prima sve odabrane checkboxeve kao niz u $_POST["sport"]
                 EN: checkbox with name="sport[]" - square brackets indicate array
                     PHP receives all checked checkboxes as array in $_POST["sport"] -->
            <label>
                <input type="checkbox" name="sport[]" value="<?= $oznsport; ?>">
                <?= $nazivsport; ?>
            </label>
        <?php endforeach; ?>

        <label>Slika:</label>
        <!-- HR: type="file" - input za upload datoteke
                 Radi samo s enctype="multipart/form-data" na formi
             EN: type="file" - input for file upload
                 Works only with enctype="multipart/form-data" on form -->
        <label><input type="file" name="datoteka"></label>

        <label>Kratak opis:</label>
        <label><textarea name="opis" rows="15" cols="25"></textarea></label>

        <label><input type="submit" value="Pošalji"></label>
    </form>
    </body>
</html>
