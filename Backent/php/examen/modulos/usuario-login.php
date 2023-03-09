<?php
session_start();
include 'conn.php';

?> 
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="../css/usuario_login.css">


</head>

<body>
<?php

if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    include 'conn.php';
 
    // Recibimos las variables del form
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
 
 
 
    // Hacemos la query para buscar si existe un usuario con estos datos
    $sql = "SELECT * FROM usuarios WHERE email = '$usuario' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
       echo '<p>Has iniciado sesión con 
               éxito</p>';
       echo "<p>Bienvenido $usuario.";
 
       $_SESSION['logged'] = true;
       while ($row = $result->fetch_assoc()) {
          $_SESSION['id'] = $row['Id'];
          $_SESSION['name'] = $row['email'];
          $_SESSION['user_type'] = $row['user_type'];
       }
 
       //    redirigir 
       echo '<a href="principal.php">
                     <button class="btn">Volver a la página 
                      principal</button>
                  </a>';
       $conn->close();
     }elseif ($result->num_rows === 0) {
       $_SESSION["fallo"] = true;
       header("Location: form_login.php?fallo=true");
 
       exit();
    }
 }
?>
</body>

</html>