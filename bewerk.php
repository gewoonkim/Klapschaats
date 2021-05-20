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
<h1>Inschrijfformulier bewerken</h1>

<!-- inschrijfformulier -->
<form action="bewerk_verwerk.php" method="post">
    <!-- ID -->
    <input type="hidden" name="ID" value="<?php echo $id; ?>">
    <!-- Naam -->
    <p>
        <label for="naam">Naam:</label>
        <input type="text" name="naam" id="naam" value="<?php echo $row['naam']; ?>" required="required">
    </p>

    <!-- Adres -->
    <p>
        <label for="adres">Adres:</label>
        <input type="text" name="adres" id="adres" value="<?php echo $row['adres']; ?>" required="required">
    </p>

    <!-- Woonplaats -->
    <p>
        <label for="woonplaats">Woonplaats:</label>
        <input type="text" name="woonplaats" id="woonplaats" value="<?php echo $row['woonplaats']; ?>" required="required">
    </p>

    <!-- Telefoonnummer -->
    <p>
        <label for="telefoonnummer">Telefoonnummer:</label>
        <input type="text" name="telefoonnummer" id="telefoonnummer" value="<?php echo $row['telefoonnummer']; ?>" required="required">
    </p>

    <!-- Email -->
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" required="required">
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
        <label>
            <input type="radio" name="lid" id="lid" value="Ja" <?php if ($row['lid'] == 'ja') echo 'checked="checked"'; ?>>
            Ja</label>
        <br>
        <label>
            <input type="radio" name="lid" id="nietlid" value="Nee" <?php if ($row['lid'] == 'nee') echo 'checked="checked"'; ?>>
            Nee </label>
    </p>

    <!-- Submit -->
    <p>
        <input type="submit" name="submit" id="submit" value="opslaan">
<!--        <button onclick="history.back():return false;">Annuleren</button>-->
    </p>
</form>

<!-- FOOTER -->
<div class="footer">

    <p><h3>Ijsvereniging de Klapschaats</h3>
    Elke dag geopend van 10:00uur tot 19:00uur zolang er natuurijs ligt.</p>

    <p><h3>TOEGANGSPRIJZEN</h3>
    Leden: Gratis
    Niet-led: 3 euro bij ingang betalen
    </p>
</div>
</body>
</html>
