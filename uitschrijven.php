<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>IJSVERENIGING de Klapschaats</title>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<h1>Inschrijving annuleren</h1>

<!-- inschrijfformulier -->
<form action="uitschrijving_verwerk.php" method="post">
    <!-- Email -->
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="test@test.com" required="required">
    </p>

    <!-- Dag -->
    <p>
        <label for="dag">Dag</label>
        <select name="dag" id="dag">
            <option id="maandag">maandag</option>
            <option id="dinsdag">dinsdag</option>
            <option id="woensdag">woensdag</option>
            <option id="donderdag">donderdag</option>
            <option id="vrijdag">vrijdag</option>
            <option id="zaterdag">zaterdag</option>
            <option id="zondag">zondag</option>
        </select>
    </p>

    <!-- TIJD -->
    <p>
        <label for='tijdsblok'>Tijdsblok</label>
        <select name="tijdsblok" id="tijdsblok">
            <option id="10:00-11:30">10:00-11:30</option>
            <option id="11:30-13:00">11:30-13:00</option>
            <option id="13:00-14:30">13:00-14:30</option>
            <option id="14:30-16:00">14:30-16:00</option>
            <option id="16:00-17:30">16:00-17:30</option>
            <option id="17:30-19:00">17:30-19:00</option>
        </select>
    </p>
    <!-- Submit -->
    <p>
        <input type="submit" name="submit" id="submit" value="Inschrijving annuleren">
        <button onclick="history.back():return false;">Terug</button>
    </p>
</form>
</body>
</html>