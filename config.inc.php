<?php
error_reporting(E_ALL);
ini_set(' display_errors', '1');

//database logingegevens
$db_hostname = 'localhost';
$db_username = 'Owner';
$db_password = 'Klapschaats!?';
$db_database = 'Klapschaats';

//maak de database-verbinding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
if (!$mysqli) {
    echo "FOUT: Geen connectie naar database. <br>";
    echo "Errno;" . mysqli_connect_errno(). "<br/>";
    echo "Error" . mysqli_connect_error(). "</br>";
}
else{

}
?>