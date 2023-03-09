<?php 

require('conn.php');


$text = $_REQUEST['term'];
$sql = "SELECT email FROM usuarios WHERE usuario = '$text'";
$result = $conn->query($sql);

// Declaro un array en el que guardar la lista de los usuarios
$array[] = '';

if ($result->num_rows > 0) {

    echo "red";
} else echo "green";

?>