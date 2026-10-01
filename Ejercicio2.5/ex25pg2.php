<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Introduir items</title>
</head>

<body>

<h1>Introduir els items</h1>

<?php

$quantitat = $_GET["quantitat"];

?>

<form action="ex25pg3.php" method="POST">

<?php

for ($i = 1; $i <= $quantitat; $i++) {

    echo "<label>Item $i:</label>";
    echo "<input type='text' name='items[]'>";
    echo "<br><br>";

}

?>

<input type="submit" value="Continuar">

</form>

</body>
</html>