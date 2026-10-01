<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

<h1>Login</h1>

<form method="POST">

    <label>Usuario:</label>
    <input type="text" name="usuario">

    <br><br>

    <label>Contraseña:</label>
    <input type="password" name="passw">

    <br><br>

    <input type="submit" value="Entrar">

</form>

<?php

    $usuarios = [
        "alex" => "6767",
        "valeria" => "xxyy",
        "rita" => "riri000"
        ];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $contrasenya = $_POST["passw"];

    if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $contrasenya) {
        echo "<p>Login correcto.</p>";
    } else {
        echo "<p>Login incorrecto!!!</p>";
    }
}

?>

</body>
</html>