<?php
session_start();
include 'conn.php';

$user = $_SESSION['id'];

$sql = "SELECT * FROM user WHERE id = '$user'";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    while ($row = $result->fetch_assoc()) {
        $usuario = $row['usuario'];
        $correo = $row['correo'];
        $contrasena = $row['contrasena'];

        echo "<form action='archivo-de-edicion.php' method='post'>
        <h1> Edicion de datos</h1>
       <input type='text' placeholder='Usuario' name='usuario' value='$usuario'>
       <input type='text' placeholder='Email' name='correo' value='$correo'>
       <input type='text' placeholder='Contraseña' name='contrasena' value='$contrasena'>
       <input type='submit' value='actualizar'>
       </form>";
    }
    ?>
    
</body>
</html>