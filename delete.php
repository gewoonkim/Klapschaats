    <?php
    require_once 'session.inc.php';
    require_once 'config.inc.php';

    //lees het id uit de url
    $id = $_GET['id'];

    //is het id een nummer
    if (is_numeric($id)) {
        //lees de inschrijving uit de database
        $result = mysqli_query($mysqli, "SELECT * FROM inschrijven WHERE ID = $id");

        //is er een inschrijving gevonden met dit ID?
        if (mysqli_num_rows($result) == 1) {
            //ja lees de inschrijving uit de database
            $row = mysqli_fetch_array($result);
        } else {
            echo "Geen inschrijving gevonden!";
            exit();
        }
    } else {
        // het ID is geen nummer
        echo "Onjuist ID";
        exit();
    }
    ?>
    <!doctype html>
    <head>
        <meta charset="UTF-8">
        <title>IJSVERENIGING de Klapschaats</title>

        <!-- css -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>
    <div class="container">
    <h1>Inschrijving verwijderen</h1>

    <p>Weet u zeker dat u de inschrijving van <strong><?php echo $row['naam']?></strong>
        met de tijd  <strong><?php echo $row['tijdsblok']?></strong>  wilt verwijderen?
    </p>

    <p>
        <a href="delete_verwerk.php?id=<?php echo $id; ?>">Ja</a>
        <a href="overzicht.php">Nee</a>
    </p>

    </div>
    <!-- FOOTER -->
    <div class="footer">

        <p><h3>Ijsvereniging de Klapschaats</h3>
        Elke dag geopend van 10:00uur tot 19:00uur zolang er natuurijs ligt.</p>

        <p><h3>TOEGANGSPRIJZEN</h3>
        Leden: Gratis
        Niet-leden: 3 euro bij ingang betalen
        </p>
    </div>
    </body>
    </html>