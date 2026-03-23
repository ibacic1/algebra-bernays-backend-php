<?php include "header.php"; ?>
        <main>
            <h2>Unos novog proizvoda</h2>

            <!-- HR: Forma za unos novog proizvoda
                      type="number" - dopušta samo brojeve
                      step="0.01"   - dopušta decimalne vrijednosti (za cijene)
                      <select>      - padajući izbornik za kategoriju
                 EN: Form for entering a new product
                      type="number" - allows numbers only
                      step="0.01"   - allows decimal values (for prices)
                      <select>      - dropdown menu for category -->
            <form action="" method="POST">
                <label>Naziv proizvoda:</label>
                <input type="text" name="naziv">

                <label>Kategorija:</label>
                <select>
                    <option>Elektronika</option>
                    <option>Odjeća</option>
                    <option>Knjige</option>
                </select>

                <label>Količina:</label>
                <input type="number">

                <label>Cijena:</label>
                <input type="number" step="0.01">

                <button type="submit">Spremi</button>
            </form>
        </main>
<?php include "footer.php"; ?>
