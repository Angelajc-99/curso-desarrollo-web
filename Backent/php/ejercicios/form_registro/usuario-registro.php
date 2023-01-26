<?php
include 'conn.php';
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];


// Creamos la query para guardar los datos 
$sql = "INSERT INTO user (usuario, correo, contrasena)
     VALUES ('$usuario','$correo','$contrasena')";

// ejecutamos la query y comprobamos si ha sido exitosa
if ($conn->query($sql) === TRUE) {
    echo '<p>Datos guardados con éxito</p>';
    echo '<p>Pulsa <a href="form_login.php">aquí</a> para iniciar sesión</p>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Cerramos la conexión con la BD
$conn->close();

?>