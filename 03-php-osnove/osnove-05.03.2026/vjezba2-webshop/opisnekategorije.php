<?php include "header.php"; ?>
        <main>
            <h2>Opisne kategorije proizvoda</h2>
            <p>Ispod su naše opisne kategorije</p>

            <!-- HR: id="opis-lista" - stilizacija po ID-u u CSS-u (#opis-lista)
                      <dl> lista opisa: <dt> = pojam, <dd> = opis
                 EN: id="opis-lista" - styling by ID in CSS (#opis-lista)
                      <dl> description list: <dt> = term, <dd> = description -->
            <dl id="opis-lista">
                <dt>Elektronika</dt>
                <dd>Uređaji poput laptopa, mobitela i televizora</dd>

                <dt>Odjeća</dt>
                <dd>Muška, ženska i dječja odjeća raznih brendova</dd>

                <dt>Knjige</dt>
                <dd>Stručna literatura, romani i edukativne knjige</dd>

                <dt>Kućanski aparati</dt>
                <dd>Perilice, hladnjaci, usisavači i ostali kućni uređaji</dd>
            </dl>
        </main>
<?php include "footer.php"; ?>
