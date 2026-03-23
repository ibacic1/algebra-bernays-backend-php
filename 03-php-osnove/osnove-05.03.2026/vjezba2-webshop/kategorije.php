<?php include "header.php"; ?>
        <main>
            <h2>Kategorije proizvoda</h2>
            <p>Ispod su naše najvažnije kategorije</p>

            <!-- HR: CSS klasa kategorije-lista stilizira listu bez točkica s hover efektom
                 EN: CSS class kategorije-lista styles list without bullets with hover effect -->
            <ul class="kategorije-lista">
                <li><a href="#">Elektronika</a></li>
                <li><a href="#">Odjeća</a></li>
                <li><a href="#">Kućanski aparati</a></li>
                <li><a href="#">Knjige</a></li>
            </ul>

            <p>Ostale najvažnije kategorije</p>

            <ol>
                <li>Prehrana</li>
                <li>Vrtlarstvo</li>
            </ol>

            <!-- HR: HTML entiteti za emoji znakove
                 EN: HTML entities for emoji characters -->
            <p>&#128512;</p>
            <h2>&#128509;</h2>

            <h2>Kuća</h2>
            <!-- HR: Slika iz images/ podmape - relativna putanja
                 EN: Image from images/ subfolder - relative path -->
            <img src="images/kuca.png">
        </main>
<?php include "footer.php"; ?>
