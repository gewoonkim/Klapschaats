<?php
//include de sessie en de config
require_once 'session.inc.php';
require 'config.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IJSVERENIGING de Klapschaats</title>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <style>
        table, td, th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 15px;
        }
    </style>
</head>
<body>
<!-- Loguit Knop -->
<ul>
    <li><a href="logout.php">LOG UIT</a></li>
</ul>

<div>
<?php
//start de tabel
echo "<table>";

//start een tabelrij voor de kopjes
echo "<tr>";

//maak de cellen voor de kopjes
echo "<th>ID</th>";
echo "<th>Dag</th>";
echo "<th>Tijd</th>";
echo "<th>Naam</th>";
echo "<th>Telefoonnummer</th>";
echo "<th>Email</th>";

echo "<th>Bewerk</th>";
echo "<th>Verwijder</th>";

//sluit de tabelrij voor de kopjes
echo "</tr>";

//loop door alle rijen data heen
$result = mysqli_query($mysqli,"SELECT * FROM inschrijven");
while ($row = mysqli_fetch_array($result)) {
    //start een tabelrij
    echo "<tr>";

    //maak de cellen voor de gegevens
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['dag'] . "</td>";
    echo "<td>" . $row['tijdsblok'] . "</td>";
    echo "<td>" . $row['naam'] . "</td>";
    echo "<td>" . $row['telefoonnummer'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";

    echo "<td><a href='bewerk.php?id=" . $row['ID'] . "'>bewerk</a></td>";
    echo "<td><a href='delete.php?id=" . $row['ID'] . "'>verwijder</a></td>";
    //sluit de tabelrij
    echo "</tr>";
}

//sluit de tabel
echo "</table>";
?>
</div>
</html>
