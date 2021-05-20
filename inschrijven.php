<?php
//lees het config-bestand
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
<h1>Inschrijfformulier</h1>
<div class="container">
<!-- inschrijfformulier -->
<form action="inschrijving_verwerk.php" method="post">
    <!-- Naam -->
    <p>
        <label for="naam">Naam:</label>
        <input type="text" name="naam" id="naam" placeholder="naam" required="required">
    </p>

    <!-- Adres -->
    <p>
        <label for="adres">Adres:</label>
        <input type="text" name="adres" id="adres" placeholder="adres" required="required">
    </p>

    <!-- Woonplaats -->
    <p>
        <label for="woonplaats">Woonplaats:</label>
        <input type="text" name="woonplaats" id="woonplaats" placeholder="woonplaats" required="required">
    </p>

    <!-- Telefoonnummer -->
    <p>
        <label for="telefoonnummer">Telefoonnummer:</label>
        <input type="text" name="telefoonnummer" id="telefoonnummer" placeholder="telefoonnummer" required="required">
    </p>

    <!-- Email -->
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="test@test.com" required="required">
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
    <!-- LID of NIET LID -->
    <p>
        <label for="lid">LID:
        <input type="radio" name="lid" id="lid" value="Ja" checked="checked">
        Ja</label>
    <label>
        <input type="radio" name="lid" id="nietlid" value="Nee">
        Nee </label>
    </p>

    <!-- AANTAL -->
    <label for="aantal">Aantal:</label>
    <input type="number" name="aantal" id="aantal" placeholder="aantal spelers" required="required" max="100">

    <!-- Submit -->
    <p>
        <input type="submit" name="submit" id="submit" value="opslaan">
        <button onclick="history.back():return false;">Annuleren</button>
        </p>
</form>

        <p>Download het bevestigingsformulier</p>
        <a href="INSCHRIJFBEVESTIGING.docx" download>
            <img src="INSCHRIJFBEVESTIGING.png" alt="bevestiging" width="300" height="300">
        </a>

</div>
</body>
</html>