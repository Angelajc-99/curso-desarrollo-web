<?php
include 'conn.php';
require('registro.php/usuario_registro.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="intro.js"></script>

</head>
<body>
    
    <div class="container">
    <h2>Registrate</h2>
        <form action="form-registro.php" method="post">
            <div class="search-box">            
               <input type="text" autocomplete="off"  placeholder="Usuario" name="usuario" required>
               <div class="display"></div>
            </div>

            <div>   
               <input type="password" placeholder="Contraseña" name="contrasena" required>
            </div>

            <div>
               <input type="submit" name="envio" value="Enviar">
            </div>
        </form>
        <div>
          <p>Si estás registrado, pulsa <a href="login.php">aquí</a> para iniciar sesión</p>
        </div>
        
    </div>
       
</body>
</html>

