<?php 
    session_start();

    include "conn.php";

    $usuario = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $id = $_POST['id'];

    $sql = "UPDATE usuario SET usuario = '$email', contrasena = '$contrasena' WHERE Id = '$id'";
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
                    Datos de los usuarios <?php echo $email;?> Actualizados con exito <?php echo '<a href="principal.php"><button>Volver</button></a>';?>

                    <?php echo '<a    href="pagina-principal.           php"</p></a>'; ?>
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