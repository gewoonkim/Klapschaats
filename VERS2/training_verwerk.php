<?php

//lees het config-bestand
require_once 'config.inc.php';

//geeft eventuele fouten weer op website
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//lees alle formuliervelden
$naam =$_POST['naam'];
$adres = 'schaatsbaan';
$woonplaats = 'schaatsbaan';
$telefoonnummer =$_POST['telefoonnummer'];
$email =$_POST['email'];
$dag = $_POST['dag'];
$tijdsblok = $_POST['tijdsblok'];
$aantal = $_POST['aantal'];

//controleer of alle velden zijn ingevuld
if (strlen($dag) > 0 &&
    strlen($tijdsblok) > 0 &&
    strlen($aantal) > 0) {

    //alle data zijn ok, maak de query
    $query = "INSERT INTO inschrijven(naam, adres, woonplaats, telefoonnummer, email, dag, tijdsblok, aantal)
              VALUES ('$naam', 
                      '$adres',
                      '$woonplaats',
                      '$telefoonnummer',
                      '$email',
                      '$dag',
                      '$tijdsblok',
                      '$aantal')";

    //kijk of er nog genoeg ruimte is in het geselecteerde tijdvak
    $count = mysqli_query($mysqli, "SELECT COUNT(tijdsblok) FROM tijdblok");
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
            //alles OK, ga terug naar de homepage
            header("Location:overzicht.php");
            exit;
        } else {
            echo 'Er ging iets mis met het toevoegen!';
        }
    }else {
        echo 'Niet alle velden zijn ingevuld!';
    }
