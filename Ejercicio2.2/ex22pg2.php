<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2.2_2</title>
</head>

<body>

<?php

$quantitat = $_POST["quantitat"];

for ($i = 1; $i <= $quantitat; $i++) {

    echo "<a href='ex22pg3.php?comanda=$i'>Comanda $i</a>";
    echo "<br>";

}

?>

</body>
</html>