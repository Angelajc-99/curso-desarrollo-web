<?php 
    session_start();

    include "conn.php";

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $id = $_POST['id'];

    $sql = "UPDATE usuarios SET email = '$usuario', contrasena = '$contrasena' WHERE Id = '$id'";
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
    <div>
        <?php 
            if ($conn->query($sql) == TRUE) {
                 ?>
                <p>
                    Datos de los usuarios <?php echo $usuario;?> Actualizados con exito <?php echo '<a href="principal.php"><button>Volver</button></a>';?>

                    <?php echo '<a href="principal.php"</p></a>'; ?>
                </p>
                <?php
            } else {
                echo 'error: ' . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        ?>
    </div>
</body>
</html>