<?php
session_start();
include 'conn.php';
if ($_POST) {
$dni = $_POST['dni'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// ejecutamos la query y comprobamos si ha sido exitosa
$sql = "SELECT * FROM usuarios WHERE usuario ='$usuario'";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     echo '<p>Este usuario ya existe</p>';
//     echo '<p> <a href="panel-edi-admin.php">Regresar</a></p>';
    if ($result->num_rows > 0) {
        echo '<p>Este usuario ya existe</p>';
        if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'admin') {
            $link = "panel-edi-admin.php";
        } else $link = "registro.php";
        if(!isset($_POST['envio'])) echo "<p> <a href='$link'>Regresar</a></p>";
    }else {
// }else {
// Creamos la query para guardar los datos 
$sql = "INSERT INTO usuarios (dni, usuario, correo, contrasena)
     VALUES ('$dni','$usuario','$correo','$contrasena')";
}

if ($conn->query($sql) === TRUE) {
    echo '<p>Datos guardados con éxito</p>';
    echo '<p>Pulsa <a href="form_login.php">aquí</a> para iniciar sesión</p>';
} 
// Cerramos la conexión con la BD
$conn->close();

}
?>