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
    <style>
        body{
            background: linear-gradient(0deg, rgba(8,9,14,1) 3%, rgba(53,115,184,1) 96%);
            height: 100vh;
        }
        .datos {
            justify-content: center;
        }
        
        
    </style>
</head>
<body>
    <div class="datos">
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
           </form> <br>";
           echo '<a href="panel-user.php"><button>Volver</button></a>';
           
        }
    ?>
    </div>
    
</body>
</html>