
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario login</title>
    <style>
        body {
            background: linear-gradient(0deg, rgba(70, 53, 184, 1) 3%, rgba(202, 184, 237, 1) 96%);
            height: 100vh;
            text-align: center;

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
        <h2>Login</h2>
        <!-- <form action="usuario-login.php" class="login" method="post"> -->
        <form action="usuario-login.php" class="login" method="post">
            <input name="usuario" type="text" placeholder="Usuario" required>
            <br>
            <input name="correo" type="email" placeholder="Correo" required>
            <br>
            <input name="password" type="password" placeholder="Contraseña" required>
            <br>
            <input type="submit" value="Acceder">
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