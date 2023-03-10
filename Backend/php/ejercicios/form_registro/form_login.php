<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario login</title>
    <style>
       body {
    background-image: linear-gradient(to bottom right, #262a2e, #798b9e);

    height: 100vh;
    width: 100%;

    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

       .container {
        background: #798b9e;
        height: 25%;
        width: 25%;
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
    <div class="container">
        <h2>Login</h2>
        <form action="usuario-login.php" class="login" method="post">
            <div>
              <input name="usuario" type="text" placeholder="Usuario" required>
            </div>

            <div>
              <input name="correo" type="email" placeholder="Correo" required>
            </div>
            
            <div>
              <input name="password" type="password" placeholder="Contraseña" required>
            </div>
            
            <div>
              <input type="submit" value="Acceder">
            </div>  
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


