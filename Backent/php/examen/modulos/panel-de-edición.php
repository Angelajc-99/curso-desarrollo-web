<?php
session_start();
include 'conn.php';

$user = $_SESSION['id'];

$sql = "SELECT * FROM usuario WHERE Id = '$user";

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
    <div class="datos">
        <?php
            while ($row = $result->fetch_assoc()) {
                $usuario = $row['email'];
                $contrasena = $row['contrasena'];

                echo "<form action='edicion.php' method='post'> <h1> Edición de datos</h1> <input type='text' placeholder='usuario' name='usuario' value='$email'
                <input type='text' placeholder='Contraseña' name='contrasena' value='$contrasena'>
                <input type='submit' value='actualizar'>
                </form> <br>";
                
            }
        ?>
    </div>
</body>
</html>