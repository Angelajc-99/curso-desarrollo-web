<?php
session_start();

?> 
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
<body>
   

   <?php
if ($_SERVER['REQUEST_METHOD'] = 'POST') {
   include 'conn.php';

   // Recibimos las variables del form
   $dni = $_POST['dni'];
   $usuario = $_POST['usuario'];
   $correo = $_POST['correo'];
   $contrasena = $_POST['password'];



   // Hacemos la query para buscar si existe un usuario con estos datos
   $sql = "SELECT * FROM usuario WHERE dni = '$dni' AND usuario = '$usuario' AND correo = '$correo' AND contrasena = '$contrasena'";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
      echo '<p>Has iniciado sesión con 
              éxito</p>';
      echo "<p>Bienvenido $usuario.";

      $_SESSION['logged'] = true;
      while ($row = $result->fetch_assoc()) {
         $_SESSION['id'] = $row['id'];
         $_SESSION['name'] = $row['usuario'];
         $_SESSION['usertype'] = $row['usertype'];
      }

      //    redirigir 
      echo '<a href="principal.php">
                    <button class="btn">Volver a la página 
                     principal</button>
                 </a>';
      $conn->close();
   } elseif ($result->num_rows === 0) {
      $_SESSION["fallo"] = true;
      header("Location: login.php?fallo=true");

      exit();
   }
}
   ?>

</body>

</html>