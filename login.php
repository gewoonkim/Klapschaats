<?php
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>IJSVERENIGING de Klapschaats</title> <!-- Staat bij de URL -->

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

<h1>Inloggen</h1>
<div class="container">

    <!-- Login formulier -->
<form action="login_verwerk.php" method="post">

    <p>
        <label FOR="username">Username:</label>
        <input type="text" name="username" id="username" required="required">
    </p>

    <p>
        <label for="password">Wachtwoord:</label>
        <input type="password" name="password" id="password" required="required">
    </p>

    <p>
        <input type="submit" name="submit" id="submit" value="Inloggen">
    </p>
</form>

    <!-- FOOTER -->
<div class="footer">

    <p><h3>Ijsvereniging de Klapschaats</h3>
    Elke dag geopend van 10:00uur tot 19:00uur zolang er natuurijs ligt.</p>

    <p><h3>TOEGANGSPRIJZEN</h3>
    Leden: Gratis
    Niet-led: 3 euro bij ingang betalen
    </p>
</div>
</div>
</body>
</html>
