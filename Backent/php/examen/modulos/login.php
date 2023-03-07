<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario login</title>
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form action="usuario-login.php" class="login" method="post">
            <div>
              <input name="usuario" type="text" placeholder="Usuario" required>
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
        <a href="registro.php">Registrate ahora</a>

    </div>

    
</body>

</html>


