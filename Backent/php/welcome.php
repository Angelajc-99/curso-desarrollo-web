<?php
include 'conn.php';
$user = $_POST['user'];
$email = $_POST['email'];

// Creamos la query para guardar los datos 
$sql = "INSERT INTO usuario (name, email)
   VALUES ('$user',' $email')";

// ejecutamos la query y comprobamos si ha sido exitosa
if ($conn->query($sql) === TRUE) {
    echo 'Datos guardados con éxito';
} else {
    echo "Error: " . $sql . "<br>" .$conn->error;
}
// Cerramos la conexión con la BD
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <p>Bienvenido<?php echo $_POST['name'];?>.</p>
    <p>Tu email es <?php echo $_POST['email'];?>.</p>
    
</body>
</html>
