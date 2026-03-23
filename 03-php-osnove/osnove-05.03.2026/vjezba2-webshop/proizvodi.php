<?php include "header.php"; ?>
        <main>
            <h2>Popis proizvoda</h2>

            <!-- HR: Tablica s thead, tbody i tfoot
                      thead = zaglavlje tablice
                      tbody = tijelo tablice s podacima
                      tfoot = podnožje s ukupnim zbrojem
                      colspan="3" = ćelija zauzima 3 stupca
                 EN: Table with thead, tbody and tfoot
                      thead = table header
                      tbody = table body with data
                      tfoot = footer with total sum
                      colspan="3" = cell spans 3 columns -->
            <table>
                <thead>
                    <tr>
                        <th>Naziv</th>
                        <th>Kategorija</th>
                        <th>Količina</th>
                        <th>Cijena</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Laptop</td>
                        <td>Elektronika</td>
                        <td class="sredina">50</td>
                        <td class="valuta">1.200,00 €</td>
                    </tr>
                    <tr>
                        <td>Majica</td>
                        <td>Odjeća</td>
                        <td class="sredina">170</td>
                        <td class="valuta">25,00 €</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="zbroj">Ukupno:</td>
                        <td class="valuta zbroj">1.225,00 €</td>
                    </tr>
                </tfoot>
            </table>

            <!-- HR: Link stiliziran kao gumb pomoću CSS klase "gumb"
                 EN: Link styled as button using CSS class "gumb" -->
            <p>
                <a href="unosproizvoda.php" class="gumb">Dodaj novi proizvod</a>
            </p>
        </main>
<?php include "footer.php"; ?>
