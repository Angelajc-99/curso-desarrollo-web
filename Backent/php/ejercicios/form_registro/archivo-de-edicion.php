<?php
session_start();

include "conn.php";

        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $id = $_SESSION['id'];

        // todos estos datos quedan guardados en el id del usuario
$sql = "UPDATE user SET usuario = '$usuario', correo = '$correo', contrasena = '$contrasena' WHERE id = '$id' ";


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
            Datos de los usuarios
            <?php echo $usuario;?>
            Actualizados con éxito
            <?php echo '<a href="pagina-principal.php"><button>Volver</button></a>'?>

            <?php echo '<a href="pagina-principal.php"</p></a>'; ?>

        <?php
} else {
    echo 'error: ' . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
     </div>
</body>
</html>