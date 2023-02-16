<?php
include 'conn.php';
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];


// Creamos la query para guardar los datos 
$sql = "INSERT INTO user (usuario, correo, contrasena)
     VALUES ('$usuario','$correo','$contrasena')";

// ejecutamos la query y comprobamos si ha sido exitosa
if ($conn->query($sql) === TRUE) {
    echo '<p>Datos guardados con éxito</p>';
    echo '<p>Pulsa <a href="form_login.php">aquí</a> para iniciar sesión</p>';
} else {
    echo ("Este nombre ya esta siendo usado");
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo ("Este nombre ya esta siendo usado");
}
// Cerramos la conexión con la BD
$conn->close();

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
      </style>
</head>
<body>
    
</body>
</html>