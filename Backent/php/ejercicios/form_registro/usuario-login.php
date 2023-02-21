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
      .divBtn button {
    background-color: rgb(92, 122, 138);
    color: white;
    border-radius: 5px;
    border: none;
    transition: all .5s;
    padding: 5px;
}

.divBtn button:hover {
    box-shadow: inset 0 0 2px 2px rgb(220, 213, 217);
    cursor: pointer;
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