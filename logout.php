<?php
//start de sessie
session_start();

//vernietig de sessie
session_destroy();

//ga naar de homepagina
header("Location:index.html");