    <?php
    //lees het config-bestand
    require_once 'config.inc.php';

    //geeft eventuele fouten weer op website
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    //lees alle formuliervelden
    $naam = $_POST['naam'];
    $adres = $_POST['adres'];
    $woonplaats = $_POST['woonplaats'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $email = $_POST['email'];
    $tijdsblok = $_POST['tijdsblok'];  //<-- GEEFT FOUTMELDING!!!!
    $lid = $_POST['lid'];
    $aantal =$_POST['aantal'];

    //controleer of alle velden zijn ingevuld
    if (strlen($naam) > 0 &&
        strlen($adres) > 0 &&
        strlen($woonplaats) > 0 &&
        strlen($telefoonnummer) > 0 &&
        strlen($email) > 0 &&
        strlen($tijdsblok) > 0 &&
        strlen($lid)  > 0 &&
        strlen($aantal) > 0 ){

        //alle data zijn ok, maak de query
        $query = "INSERT INTO inschrijven(naam, adres, woonplaats, telefoonnummer, email, tijdsblok, lid, aantal)
                  VALUES (
                  '$naam', 
                  '$adres',
                  '$woonplaats', 
                  '$telefoonnummer',
                  '$email',
                  '$tijdsblok',
                  '$lid',
                  '$aantal')";

        $result = mysqli_query($mysqli, $query);

    //kijk of er nog genoeg ruimte is in het geselecteerde tijdvak
    //    $count = mysqli_query($mysqli, "SELECT COUNT(tijdsblok) FROM inschrijven");
    //
    //    if ( ($count) < 100) {
    //        //alle data zijn ok, maak de query
    //        $result;
    //    }else {
    //        echo "Dit tijdsblok is al bezet!";
    //        header("Location:inschrijven.php");
    //    }

        //controleer het resultaat
        if ($result) {
            //alles OK,doe dan niks
        } else {
            echo 'Er ging iets mis met het toevoegen!';
        }
    }else {
        echo 'Niet alle velden zijn ingevuld!';
    }
    ?>
    <!doctype html>
    <head xmlns="http://www.w3.org/1999/html">
        <meta charset="UTF-8">
        <title>IJSVERENIGING de Klapschaats</title> <!-- Staat bij de URL -->
        <link rel="icon" href="assets/schaatsbaan.jpeg"><!-- icon bij url -->

        <!-- css -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>
    <div class="title">
        <h1>Bevestiging voltooid!</h1>
    </div>

    <div class="container">
    <!-- Downloadknop -->
        <p>Download het bevestigingsformulier</p>
        <a href="INSCHRIJFBEVESTIGING.docx" download>
            <img src="INSCHRIJFBEVESTIGING.png" alt="bevestiging" width="150" height="150">
        </a>
    </div>

    <!-- Ga terug naar homepagina -->
    <div class="container">
        <a href="index.html"><button class="button">Ga terug naar de homepage</button></a>
    </div>

    <!-- FOOTER -->
    <div class="footer">

        <p><h3>Ijsvereniging de Klapschaats</h3>
        Elke dag geopend van 10:00uur tot 19:00uur zolang er natuurijs ligt.</p>

        <p><h3>TOEGANGSPRIJZEN</h3>
        Leden: Gratis<br>
        Niet-leden: 3 euro bij ingang betalen
        </p>

    </div>

    </body>
</html>
