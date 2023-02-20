<?php
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            background: linear-gradient(0deg, rgba(8,9,14,1) 3%, rgba(53,115,184,1) 96%);
            height: 100vh;
            text-align: center;
            display: flex-end;
            float: center;
            /* vertical-align: center; */

        }


        form {

            padding: 30px 20px;
            justify-items: flex-end;
        }

        /* .login {
            justify-content: center;
            text-align: center;
            position: absolute;
            font-size: 15px;
            font-family: 'Sassy Frass', cursive;
            margin-top: 1;
            border-radius: 12px;
        } */
    </style>
</head>

<body>
    <div>
        <form action="usuario-registro.php" method="post">

            <input type="text" placeholder="Usuario" name="usuario" required>

            <input type="email" placeholder="Correo" name="correo" required>

            <input type="password" placeholder="Contraseña" name="contrasena" required>

            <input type="submit" value="Enviar">
        </form>
        <?php

        // el get se limita enviar al url del navegador
        if (isset($_GET['fallo'])) {
            echo '<p>Error, comprueba los datos<p>';
        }

        // if (isset($_SESSION['fallo'])) {
        //     echo '<p>error, comprueba los datos<p>
        //     <a href="form-registro.php">Registrate ahora</a>';
        //     unset($_SESSION["fallo"]);
        // }
        ?>
        <a href="form-registro.php">Registrate ahora</a>

    </div>
</body>

</html>