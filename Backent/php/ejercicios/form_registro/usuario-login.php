
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

   <style>
      body {
         background-color: #8EC5FC;
         background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);

         height: 100vh;
         text-align: center;

      }
      button {
         margin-right: 10px;
    color: rgb(73, 71, 71);
    box-shadow: 2px 2px 4px 3px #20212447;
    border-color: #c4c5c6;
    background-color:#8eaafc;
      }
   </style>
</head>

<body>
   

   <?php
if ($_SERVER['REQUEST_METHOD'] = 'POST') {
   include 'conn.php';

   // Recibimos las variables del form
   $usuario = $_POST['usuario'];
   $correo = $_POST['correo'];
   $contrasena = $_POST['password'];



   // Hacemos la query para buscar si existe un usuario con estos datos
   $sql = "SELECT * FROM user WHERE usuario = '$usuario' AND correo = '$correo' AND contrasena = '$contrasena'";
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
      echo '<a href="pagina-principal.php">
                    <button class="btn">Volver a la página 
                     principal</button>
                 </a>';
      $conn->close();
   } elseif ($result->num_rows === 0) {
      $_SESSION["fallo"] = true;
      header("Location: form_login.php?fallo=true");

      exit();
   }
}
   ?>

</body>

</html>