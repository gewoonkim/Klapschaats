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
$dag = $_POST['dag'];
$tijdsblok = $_POST['tijdsblok'];
$lid = $_POST['lid'];

//controleer of alle velden zijn ingevuld
if (strlen($id) > 0 &&
    strlen($naam) > 0 &&
    strlen($adres) > 0 &&
    strlen($woonplaats) > 0 &&
    strlen($telefoonnummer) > 0 &&
    strlen($email) > 0 &&
    strlen($dag) > 0 &&
    strlen($tijdsblok) > 0 &&
    strlen($lid) > 0) {

    //alle data zijn ok, maak de query
    $query = "UPDATE inschrijven SET
     naam = '$naam'
     adres = '$adres'
     woonplaats = '$woonplaats'
     telefoonnummer = '$telefoonnummer'
     email = '$email'
     dag = '$dag'
     tijdsblok = '$tijdsblok'
     lid = '$lid' WHERE ID = $id";

    $result = mysqli_query($mysqli, $query);
    //controleer het resultaat
    if ($result) {
        //alles OK, stuur terug naar de homepage
        header("Location:index.html");
        exit;
    } else {
        echo 'Er ging iets mis met het toevoegen!';
    }
} else {
    echo 'Niet alle velden zijn ingevuld!';
}