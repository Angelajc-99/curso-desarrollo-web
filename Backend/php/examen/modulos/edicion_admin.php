<?php
session_start();
include "conn.php";

if (isset($_POST['update'])) {
$usuario = $_POST['email'];
$contrasena = $_POST['contrasena'];
$user_type = $_POST['user_type'];
$id = $_POST['id'];

    $sql = "UPDATE usuarios SET email = '$usuario', contrasena = '$contrasena', user_type = '$user_type'";

    
if ($conn->query($sql)) {

} else {
    echo 'error: ' . $sql . "<br>" . $conn->error;
}

} elseif (isset($_POST['delete'])) {$sql = "DELETE FROM usuarios WHERE Id = '$id'";
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
            <?php echo $_SESSION['name'];?>
                Datos actualizados con éxito!!
            <?php echo '<a href="principal.php"><button>Volver</button></a>'?>
        </p>
    </div>
    
</body>
</html>