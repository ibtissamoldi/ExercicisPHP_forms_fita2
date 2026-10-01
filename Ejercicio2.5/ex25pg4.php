<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultat</title>
</head>

<body>

<h1>Has seleccionat:</h1>

<ul>

<?php

if (isset($_POST["seleccionats"])) {

    foreach ($_POST["seleccionats"] as $item) {

        echo "<li>$item</li>";

    }

}

?>

</ul>

</body>
</html>