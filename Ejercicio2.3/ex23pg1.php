<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Selector de skins</title>
</head>

<?php

$color = "white";

if (isset($_POST["color"])) {
    $color = $_POST["color"];
}

?>

<body style="background-color: <?php echo $color; ?>;">

<form method="POST">

    <select name="color">

        <option value="orange">FOC!</option>
        <option value="lightblue">~alGUA~</option>
        <option value="lightgreen">terra</option>

    </select>

    <input type="submit" value="Tramet la consulta">

</form>

</body>
</html>