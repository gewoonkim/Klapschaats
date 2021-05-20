<?php

//lees de sessie en het config-bestand
require_once 'session.inc.php';
require_once 'config.inc.php';

//geeft eventuele fouten weer op website
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>IJSVERENIGING de Klapschaats</title> <!-- Staat bij de URL -->

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<h1>training inplannen</h1>
<div class="container">
    <!-- traning inplannen -->
    <form action="training_verwerk.php" method="post">
        <!-- Naam -->
        <p>
            <label for="naam">Naam:</label>
            <input type="text" name="naam" id="naam" value="Ijsvereniging de klapschaats" required="required">
        </p>

        <!-- Adres -->
        <p>
            <label for="adres">Adres:</label>
            <input type="text" name="adres" id="adres" value="schaatsbaan" required="required">
        </p>

        <!-- Woonplaats -->
        <p>
            <label for="woonplaats">Woonplaats:</label>
            <input type="text" name="woonplaats" id="woonplaats" value="schaatsbaan"  required="required">
        </p>

        <!-- Telefoonnummer -->
        <p>
            <label for="telefoonnummer">Telefoonnummer:</label>
            <input type="text" name="telefoonnummer" id="telefoonnummer" value="0687654321" required="required">
        </p>

        <!-- Email -->
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="klantenservice@klapschaats.nl" required="required">
        </p>


        <!-- TIJDSBLOK -->
        <p>
            <label for='tijdsblok'>Tijdsblok</label>
            <select >
                <option disabled selected id="tijdsblok" name="tijdsblok">--Selecteer tijdsblok--</option>
                <?php
                //lees de tijdsblokken uit de database
                $result = mysqli_query($mysqli, "SELECT tijdsblok FROM tijdblok");

                while ($data = mysqli_fetch_array($result))
                {
                    echo "<option value='".$data['tijdsblok']."'>" .$data['tijdsblok']."</option>";
                }
                ?>
            </select>
        </p>

        <!-- HOEVEEL SPELERS -->
        <p>
            <label for="aantal">Aantal mensen:</label>
                <input type="number" name="aantal" id="aantal" placeholder="aantal mensen" required="required" max="100">
        </p>

        <!-- Submit -->
        <p>
            <input type="submit" name="submit" id="submit" value="opslaan">
            <button onclick="history.back():return false;">Annuleren</button>
        </p>
    </form>

</div>

<!-- FOOTER -->
<div class="footer">

    <p>
    <h3>Ijsvereniging de Klapschaats</h3>
    Elke dag geopend van 10:00uur tot 19:00uur zolang er natuurijs ligt.</p>

    <p>
    <h3>TOEGANGSPRIJZEN</h3>
    Leden: Gratis
    Niet-leden: 3 euro bij ingang betalen
    </p>

</div>
</body>
</html>
