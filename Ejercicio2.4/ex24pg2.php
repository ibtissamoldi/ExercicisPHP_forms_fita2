<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

<?php

$contrasenya1 = $_POST["contrasenya1"];
$contrasenya2 = $_POST["contrasenya2"];

if ($contrasenya1 != $contrasenya2) {

    echo "ERROR: les contrasenyes han de coincidir";
} else {

    if (!preg_match('/[0-9]/', $contrasenya1)) {

        echo "ERROR: la contrasenya ha de tenir al menys un número";
    } else {

        echo "Contraseña Correcta!!";

    }
}

?>

</body>
</html>