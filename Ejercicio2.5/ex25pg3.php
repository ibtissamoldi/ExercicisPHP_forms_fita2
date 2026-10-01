<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Seleccionar items</title>
</head>

<body>

<h1>Selecciona els items</h1>

<form action="ex25pg4.php" method="POST">

<?php

$items = $_POST["items"];

foreach ($items as $item) {

    echo "<label>";

    echo "<input type='checkbox' name='seleccionats[]' value='$item'>";
    echo "$item";

    echo "</label>";

    echo "<br><br>";
}

?>

<input type="submit" value="Continuar">

</form>

</body>
</html>