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
        <title>IJSVERENIGING de Klapschaats</title><!-- title bij url -->
        <link rel="icon" href="assets/schaatsbaan.jpeg"><!-- icon bij url -->

        <!-- css -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>
    <div class="title">
        <h1>Inschrijfformulier bewerken</h1>
    </div>

    <div class="container">
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
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" required="required">
        </p>

        <!-- TIJDSBLOK -->
        <p>
            <label for='tijdsblok'>Tijdsblok:</label>
            <select name="tijdsblok" >
                <option disabled selected id="tijdsblok">--Selecteer tijdsblok--</option>
                <?php
                //lees de tijdsblokken uit de database
                $result = mysqli_query($mysqli, "SELECT tijdsblok FROM tijdblok ORDER BY ID");

                while ($data = mysqli_fetch_array($result))
                {
                    echo "<option value='".$data['tijdsblok']."'>" .$data['tijdsblok']."</option>";
                }
                ?>
            </select>
        </p>

        <!-- LID of NIET LID -->
        <p>
            <label>
                <input type="radio" name="lid" id="lid" value="Ja" <?php if ($row['lid'] == 'ja') echo 'checked="checked"'; ?>>
                Ja</label>
            <label>
                <input type="radio" name="lid" id="nietlid" value="Nee" <?php if ($row['lid'] == 'nee') echo 'checked="checked"'; ?>>
                Nee </label>
        </p>

        <!-- HOEVEEL SPELERS -->
        <p>
            <label for="aantal">Aantal mensen:</label>
            <input type="number" name="aantal" id="aantal" placeholder="aantal mensen" required="required" max="100">
        </p>

        <!-- Submit -->
        <p>
            <input type="submit" name="submit" id="submit" value="Opslaan">
    <!--        <button onclick="history.back():return false;">Annuleren</button>-->
        </p>
    </form>
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
