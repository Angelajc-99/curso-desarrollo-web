<?php
    session_start();
    include 'conn.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $dni = $_POST['dni'];
    $biometria = $_POST['biometria'];
    $mac_orden = $_POST['mac_orden'];
    $id = $_SESSION['id'];


    $sql = "UPDATE usuarios SET email = '$usuario', contrasena ='$contrasena', dni ='$dni', bometria = '$biometria', mac_orden = '$mac_orden', user_type = '$user_type' WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($conn->query($sql)) {
        $_SESSION['user_type'] = $user;
    } else {
        echo "error:" .$sql . '<br>' . $conn->error;
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/arch-user.css">

</head>
<body>
    <div class="cont">
        <p>Datos actualizados
            <?php 
            echo $_POST['usuario'];
            echo '<a href="user.php"><button>Atrás</button></a>';
            ?>
        </p>
    </div>
</body>
</html>