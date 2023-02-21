<?php
include 'conn.php';
require('../form_registro/usuario-registro.php');
// require('../form_registro/usuario-registro.php');
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
    background-image: linear-gradient(to bottom right, #262a2e, #798b9e);

    /* viewport heigth/width (se ajusta al tamaño de la ventana o dispositivo) */
    height: 100vh;
    width: 100vw;
    margin: 0;

    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

    </style>
</head>
<body>
    <h2>Registrate</h2>
    <div>
        <!-- <form action="usuario-registro.php" method="post"> -->
        <form action="form-registro.php" method="post">

            <input type="text" placeholder="Usuario" name="usuario" required>

            <input type="email" placeholder="Correo" name="correo" required>

            <input type="password" placeholder="Contraseña" name="contrasena" required>

            <!-- <input type="submit" value="Enviar"> -->
            <input type="submit" name="envio" value="Enviar">
        </form>
        <p>Si ya estás registrado, pulsa <a href="form_login.php">aquí</a> para iniciar sesión</p>
    </div>
</body>
</html>


<!-- if ($result->num_rows > 0) {
    echo '<p>Este usuario ya existe</p>';
    if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin') {
        $link = "panel-edi-admin.php";
    } else $link = "form-registro.php";
    echo "<p> <a href='$link'>Regresar</a></p>";
}else { -->
