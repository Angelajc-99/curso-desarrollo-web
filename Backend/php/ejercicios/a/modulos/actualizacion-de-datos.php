<?php
session_start();
include 'conn.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$dni = $_POST['dni'];
$mac_orden = $_POST['mac_orden'];
$usertype = $_POST['usertype'];

$user= $_POST['user'];
// CREAMOS LA QUERY PARAR ACTUALIZAR LOS DATOS
$sql = "UPDATE usuario
SET  correo ='$usuario', contrasena='$contrasena', dni='$dni', mac_orden ='$mac_orden', usertype='$usertype'
WHERE nombre='$user'";

if ($conn->query($sql) === TRUE) {
    $_SESSION['update']=TRUE;
    header("Location: datos-usuarios.php");
}

?>