    <?php
    //lees het config-bestand
    require_once 'config.inc.php';

    //geeft eventuele fouten weer op website
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
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
    <div class="title" style="height: 50px">
    <h1>Inschrijfformulier</h1>
    </div>

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
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="test@test.com" required="required">
        </p>

        <!-- TIJDSBLOK -->
        <p>
            <label for='tijdsblok'>Tijdsblok:</label>
            <select name="tijdsblok" >
                <option disabled selected id="tijdsblok">--Selecteer tijdsblok--</option>
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
            <input type="submit" name="submit" id="submit" value="Opslaan">
            </p>
    </form>

    </div>
    </body>
    </html>