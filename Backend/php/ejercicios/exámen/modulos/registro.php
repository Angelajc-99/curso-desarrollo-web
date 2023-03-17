<?php
session_start();
include 'conn.php';
if ($_POST) {
$usuario = $_POST['email'];
$contrasena = $_POST['contrasena'];

// ejecutamos la query y comprobamos si ha sido exitosa
$sql = "SELECT * FROM usuarios WHERE email ='$usuario'";
$result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<p>Este usuario ya existe</p>';
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin') {
            $link = "admin.php";
        } else $link = "registro.php";
        if(!isset($_POST['envio'])) echo "<p> <a href='$link'>Regresar</a></p>";
    }else {

// Creamos la query para guardar los datos 
$sql = "INSERT INTO usuarios (email, contrasena)
     VALUES ('$usuario','$contrasena')";
}

if ($conn->query($sql) == TRUE) {
    echo '<p>Datos guardados con éxito</p>';
    // echo '<p>Pulsa <a href="login-user.php">aquí</a> para iniciar sesión</p>';
} 
// Cerramos la conexión con la BD
$conn->close();

}
?>