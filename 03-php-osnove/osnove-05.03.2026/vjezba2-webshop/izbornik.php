        <nav>
            <?php
            // HR: $fileName dolazi iz header.php - naziv trenutnog fajla (npr. "index.php")
            //     Uvjetno dodajemo class="active" samo na link trenutne stranice
            //     Ovo je pametnije od ručnog dodavanja active klase u svakom fajlu posebno
            // EN: $fileName comes from header.php - name of current file (e.g. "index.php")
            //     We conditionally add class="active" only to the current page link
            //     This is smarter than manually adding active class in each file separately
            ?>
            <a href="index.php" <?php if($fileName == "index.php") echo 'class="active"'; ?>>Početna</a>
            <a href="kategorije.php" <?php if($fileName == "kategorije.php") echo 'class="active"'; ?>>Kategorije</a>
            <a href="opisnekategorije.php" <?php if($fileName == "opisnekategorije.php") echo 'class="active"'; ?>>Opisne kategorije</a>
            <a href="proizvodi.php" <?php if($fileName == "proizvodi.php") echo 'class="active"'; ?>>Proizvodi</a>
            <a href="roba.php" <?php if($fileName == "roba.php") echo 'class="active"'; ?>>Roba</a>
            <a href="kontakt.php" <?php if($fileName == "kontakt.php") echo 'class="active"'; ?>>Kontakt</a>
        </nav>
