<?php
// start de sessie
session_start();

//controleer of er een username is opgeslagen
if (!isset($_SESSION['username']) || strlen($_SESSION['username']) == 0) {
    //geen geldige login, stuur door naar het loginformulier
    header("Location:login.php");
    exit();
}