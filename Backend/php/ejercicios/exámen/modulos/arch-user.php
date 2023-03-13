<?php
    session_start();
    include 'conn.php';

    $usuario = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $dni = $_POST['dni'];
    $biometría = $_POST['biometría'];
    $mac_ordenardor = $_POST['mac_ordenardor'];
    $Id = $_SESSION['Id'];


    $sql = "UPDATE usuarios SET email = '$usuario', contrasena ='$contrasena', dni ='$dni', biometría = '$biometría', mac_ordenardor = '$mac_ordenardor', user_type = '$user_type' WHERE id = '$id'";
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
            echo $_POST['email'];
            echo '<a href="user.php"><button>Atrás</button></a>';
            ?>
        </p>
    </div>
</body>
</html>