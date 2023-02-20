<?php

include 'conn.php';
require('../form_registro/usuario-registro.php');
// if ($_POST) {
//     $usuario = $_POST['usuario'];
//     $correo = $_POST['correo'];
//     $contrasena = $_POST['contrasena'];
// }


// $sql = "SELECT * FROM user WHERE correo ='$correo'";
// $result = $conn->query($sql);


// if ($result->num_rows > 0) {
//     echo '<p>Este usuario ya existe</p>';
// } else {
//     // Creamos la query para guardar los datos 
//     $sql = "INSERT INTO user (usuario, correo, contrasena)
//  VALUES ('$usuario','$correo','$contrasena')";
//     var_dump('lleguee aca');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <style>
     
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(0deg, rgba(8,9,14,1) 3%, rgba(53,115,184,1) 96%);
            background: linear-gradient(0deg, rgba(8, 9, 14, 1) 3%, rgba(53, 115, 184, 1) 96%);
            height: 100vh;
            text-align: center;
            display: flex-end;
            float: center;
            font-size: medium;
            /* vertical-align: center; */

        }
    </style>
</head>
<body>
    <h2>Registrate</h2>
    <div>
        <form action="usuario-registro.php" method="post">
        <form action="form-registro.php" method="post">

            <input type="text" placeholder="Usuario" name="usuario" required>

            <input type="email" placeholder="Correo" name="correo" required>

            <input type="password" placeholder="Contraseña" name="contrasena" required>

            <input type="submit" value="Enviar">
            <input type="submit" name="envio" value="Enviar">
        </form>
        <p>Si ya estás registrado, pulsa <a href="form_login.php">aquí</a> para iniciar sesión</p>
    </div>
</body>
</html>

