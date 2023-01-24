<?php
include '../../conn.php';
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];


// Creamos la query para guardar los datos 
$sql = "INSERT INTO user (usuario, correo, contrasena)
   VALUES ('$usuario',' $correo','$contrasena')";

// ejecutamos la query y comprobamos si ha sido exitosa
if ($conn->query($sql) === TRUE) {
    echo 'Datos guardados con éxito';
} else {
    echo "Error: " . $sql . "<br>" .$conn->error;
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
    <title>Registrarse</title>
</head>
<body>
      <h1>Formulario</h1>
       <form action="ejercicio_de_clase.php" method="post">

            <input type="text" placeholder="usuario" 
             name="usuario" required>

            <input type="correo" placeholder="correo" name="correo" 
             required > 
 
            <input type="password" placeholder="Contraseña" 
             name="contrasena" required>
            
            <input type="submit" value="Enviar">
        </form>
    
</body>
</html>