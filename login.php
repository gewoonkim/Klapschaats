<?php
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>IJSVERENIGING de Klapschaats</title>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<h1>Inloggen</h1>

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
</body>
</html>
