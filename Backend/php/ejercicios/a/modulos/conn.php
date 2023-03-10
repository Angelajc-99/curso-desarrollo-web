<?php
$servername = 'localhost';
$username = 'root';
$password = '1234';
$dbname = 'dato';

//Crear la conexión a la BD
$conn = new mysqli($servername,$username,$password,$dbname);

//Comprobamos la conexión
 if ($conn->connect_error) {
    die("Fallo en la conexión: " . $conn->connect_error);
 }

?>