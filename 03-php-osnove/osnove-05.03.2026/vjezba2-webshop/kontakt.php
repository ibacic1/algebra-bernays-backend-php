<?php include "header.php"; ?>
        <main>
            <h2>Kontakt</h2>

            <!-- HR: Flexbox layout - kontakt-container dijeli stranicu na 2 dijela
                      kontakt-forma (flex:1) i kontakt-mapa (flex:2) - omjer 1:2
                 EN: Flexbox layout - kontakt-container splits page into 2 parts
                      kontakt-forma (flex:1) and kontakt-mapa (flex:2) - ratio 1:2 -->
            <div class="kontakt-container">
                <div class="kontakt-forma">
                    <form action="" method="POST">
                        <label>Ime:</label>
                        <input type="text" name="ime">

                        <label>Email:</label>
                        <input type="email">

                        <label>Poruka:</label>
                        <textarea name="poruka" cols="30" rows="11"></textarea>

                        <button type="submit">Pošalji</button>
                    </form>
                </div>

                <!-- HR: Google Maps iframe - ugrađena karta direktno u HTML
                     EN: Google Maps iframe - embedded map directly in HTML -->
                <div class="kontakt-mapa">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.0499924601672!2d15.938530877452814!3d45.81025717108165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6d74e265877%3A0x1a4f4eae9fc461c5!2sAlgebra%20University%20College!5e0!3m2!1sen!2shr!4v1772567526145!5m2!1sen!2shr"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </main>
<?php include "footer.php"; ?>
