<?php
//lees de sessie en het config-bestand
require_once 'session.inc.php';
require_once 'config.inc.php';

//geef eventuele fouten weer op de website
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//lees alle formuliervelden
$email = $_POST['email'];
$dag = $_POST['dag'];
$tijdsblok = $_POST['tijdsblok'];

//controleer of alle velden zijn ingevuld
if (strlen($email) > 0 &&
    strlen($dag) > 0 &&
    strlen($tijdsblok) > 0) {

    //alle data zijn ok, maak de query
    //verwijder de inschrijving uit de database
    $result = mysqli_query($mysqli, "DELETE FROM inschrijven 
                                            WHERE email = $email     
                                            AND dag = $dag 
                                            AND tijdsblok = $tijdsblok");

    //controleer het resultaat
    if ($result) {
        //alles ok, stuur terug naar overzicht
        header("Location:index.html");
        exit();
    } else {
        echo "Er ging iets mis met het uitschrijven";
    }
} else {
    // het ID is geen nummer
    echo "Onjuist ID";
    exit();
}
?>
