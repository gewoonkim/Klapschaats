<?php
//lees het config-bestand
require_once 'config.inc.php';

//lees alle formuliervelden
$username = $_POST['username'];
$password =$_POST['password'];

//controleer of alle velden zijn ingevuld
if (strlen($username) > 0 &&
    strlen($password) > 0) {

    //versleutel het wachtwoord
    $password = md5($password);

    //maak de controle-query
    $query = "SELECT * FROM users WHERE username ='$username' AND password ='$password'";

    //voer de query uit
    $result = mysqli_query($mysqli, $query);

    //controleer of de login correct was
    if (mysqli_num_rows($result) == 1) {
        //login correct, start de sessie
        session_start();

        //sla de username op in de sessie
        $_SESSION['username'] = $username;

        //stuur door naar overzicht.php
        header("Location:overzicht.php");
    } else {
        //login incorrect, terug naar loginformulier
        header("Location:login.php");
        exit();
    }
} else {
    echo "Niet alle velden zijn ingevuld!";
    exit();
}