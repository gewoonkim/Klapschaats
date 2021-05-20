<?php

//lees de sessie en het config-bestand
require_once 'session.inc.php';
require_once 'config.inc.php';
?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>IJSVERENIGING de Klapschaats</title> <!-- Staat bij de URL -->

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<h1>traning inplannen</h1>
<div class="container">
    <!-- traning inplannen -->
    <form action="training_verwerk.php" method="post">
        <!-- Naam -->
        <p>
            <label for="naam">Naam:</label>
            <input type="text" name="naam" id="naam" value="Ijsvereniging de klapschaats" required="required">
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
        <!-- Dag -->
        <p>
            <label for="dag">Dag</label>
            <select name="dag" id="dag">
                <option id="maandag">maandag</option>
                <option id="dinsdag">dinsdag</option>
                <option id="woensdag">woensdag</option>
                <option id="donderdag">donderdag</option>
                <option id="vrijdag">vrijdag</option>
                <option id="zaterdag">zaterdag</option>
                <option id="zondag">zondag</option>
            </select>
        </p>

        <!-- TIJD -->
        <p>
            <label for='tijdsblok'>Tijdsblok</label>
            <select name="tijdsblok" id="tijdsblok">
                <option id="10:00-11:30">10:00-11:30</option>
                <option id="11:30-13:00">11:30-13:00</option>
                <option id="13:00-14:30">13:00-14:30</option>
                <option id="14:30-16:00">14:30-16:00</option>
                <option id="16:00-17:30">16:00-17:30</option>
                <option id="17:30-19:00">17:30-19:00</option>
            </select>
        </p>
        <!-- HOEVEEL SPELERS -->
        <p>
            <label for="aantal">Aantal spelers:</label>
                <input type="number" name="aantal" id="aantal" placeholder="aantal spelers" required="required" max="100">
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
    Niet-led: 3 euro bij ingang betalen
    </p>

</div>
</body>
</html>