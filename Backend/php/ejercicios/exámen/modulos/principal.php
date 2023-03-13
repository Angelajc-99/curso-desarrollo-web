<?php
    // include 'conn.php';
    session_start();

    if (isset($_POST['logout'])) {
        unset($_SESSION['logged']);
        session_destroy();
        header('Location: principal.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/principal.css">
</head>
<body>
<!-- pagina para crear un usuario -->
<div class="cont">
    <form action="login-user.php" method="POST">
        <h1>Login</h1>
        <div>
            <input type="email" placeholder="Correo" name="email" required>
        </div>
        <div>
              <input type="password" placeholder="Contraseña" name="contrasena" required>
            </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
 <?php

    if (isset($_SESSION['fallo'])) {
        echo "Error, comprueba los datos.";


        unset($_SESSION['fallo']);
    }
 ?> 
</div>
    
</body>
</html>