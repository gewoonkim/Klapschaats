<?php
//lees de sessie en het config-bestand
require_once 'session.inc.php';
require_once 'config.inc.php';

//geef eventuele fouten weer op de website
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//lees het id uit de url
$id =$_GET['id'];

//is het id een nummer
if (is_numeric($id)) {
    //verwijder de inschrijving uit de database
    $result = mysqli_query($mysqli, "DELETE FROM inschrijven WHERE ID = $id");

    //controleer het resultaat
    if ($result) {
        //alles ok, stuur terug naar overzicht
       header("Location:overzicht.php");
       exit();
    } else {
        echo "Er ging iets mis met het verwijderen";
    }
} else {
    // het ID is geen nummer
    echo "Onjuist ID";
    exit();
}
?>