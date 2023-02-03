<?php
session_start();

include "conn.php";

        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $usertype = $_POST['usertype'];
        $id = $_POST['id'];

        // todos estos datos quedan guardados en el id del usuario
$sql = "UPDATE user SET usuario = '$usuario', correo = '$correo', contrasena = '$contrasena', usertype = '$usertype' WHERE id = '$id' ";

if ($conn->query($sql)) {

} else {
    echo 'error: ' . $sql . "<br>" . $conn->error;
    
}
$conn->close();
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
        <p>
            <?php echo $admin;?>
            Actualizados con éxito!!
            <?php echo '<a href="pagina-principal.php"><button>Salir</button></a>'?>
        </p>
    </div>
</body>
</html>