<!DOCTYPE html>
<html>
    <head>
        <title>GET metoda</title>
        <link rel="stylesheet" href="stil.css">
    </head>
    <body>
    <h1>GET metoda - 1</h1>

    <!-- HR: method="GET" - podaci se šalju u URL-u kao query string
             action="getposalji.php" - forma šalje podatke na tu stranicu
             Vidljivo u URL-u: getposalji.php?ime=Pero&godine=25
         EN: method="GET" - data is sent in URL as query string
             action="getposalji.php" - form sends data to that page
             Visible in URL: getposalji.php?ime=Pero&godine=25 -->
    <form method="GET" action="getposalji.php">
        <label>Ime:</label>
        <label><input type="text" name="ime" id="ime"></label>
        <label>Godine:</label>
        <label><input type="number" name="godine" id="godine" value="35"></label>
        <label><input type="submit" name="FormaGet" value="Pošalji"></label>
    </form>

    <h1>GET metoda - 2</h1>
    <!-- HR: GET parametri se mogu proslijediti i direktno u linku (href)
             Sve iza ? je query string: ime=Romano&godine=55&placa=3333&status=1
             Svaki parametar odvojen je znakom &
         EN: GET parameters can also be passed directly in link (href)
             Everything after ? is query string: ime=Romano&godine=55&placa=3333&status=1
             Each parameter is separated by & character -->
    <p><a href="getposalji.php?ime=Romano&godine=55&placa=3333&status=1">Klikni</a></p>
    </body>
</html>
