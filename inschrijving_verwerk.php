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
        //controleer het resultaat
        if ($result) {
            //alles OK, ga terug naar de homepage
            header("Location:index.html");
            exit;
        } else {
            echo 'Er ging iets mis met het toevoegen!';
        }
    }else {
        echo 'Niet alle velden zijn ingevuld!';
    }

//max 100 inschrijvingen
//per tijdsblok 100 aanmeldingen
//tel het aantal aanmeldingen per tijdsslot
//kijk of dit minder of gelijk is aan 100
// is het minder of gelijk? voeg inschrijving toe
//is het hoger? geef een foutmelding
//mysqli_fetch_all();
//var_dump(explode(' ', $aantal));