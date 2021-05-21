<?php
require_once 'session.inc.php';
require_once 'config.inc.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//lees alle formuliervelden
$id = $_POST['ID'];
$naam = $_POST['naam'];
$adres = $_POST['adres'];
$woonplaats = $_POST['woonplaats'];
$telefoonnummer = $_POST['telefoonnummer'];
$email = $_POST['email'];
$tijdsblok = $_POST['tijdsblok'];
$lid = $_POST['lid'];
$aantal = $_POST['aantal'];

//controleer of alle velden zijn ingevuld
if (strlen($id) > 0 &&
    strlen($naam) > 0 &&
    strlen($adres) > 0 &&
    strlen($woonplaats) > 0 &&
    strlen($telefoonnummer) > 0 &&
    strlen($email) > 0 &&
    strlen($tijdsblok) > 0 &&
    strlen($lid) > 0 &&
    strlen($aantal) > 0) {

    //alle data zijn ok, maak de query
    $query = "UPDATE inschrijven 
              SET
                 naam = '$naam',
                 adres = '$adres',
                 woonplaats = '$woonplaats',
                 telefoonnummer = '$telefoonnummer',
                 email = '$email',
                 tijdsblok = '$tijdsblok',
                 lid = '$lid' 
                 aantal = '$aantal' WHERE ID = $id";

    //kijk of er nog genoeg ruimte is in het geselecteerde tijdvak
    $count = mysqli_query($mysqli, "SELECT COUNT(tijdsblok) FROM inschrijven");
    if ( ($count) < 100) {
        //alle data zijn ok, maak de query
        $query;
    }else {
        echo "Dit tijdsblok is al bezet!";
        header("Location:inschrijven.php");
    }

    $result = mysqli_query($mysqli, $query);
    //controleer het resultaat
    if ($result) {
        //alles OK, stuur terug naar de homepage
        header("Location:overzicht.php");
        exit;
    } else {
        echo 'Er ging iets mis met het toevoegen!';
    }
} else {
    echo 'Niet alle velden zijn ingevuld!';
}