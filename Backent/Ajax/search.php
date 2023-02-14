<?php 

require('conn.php');



// Voy hacer una busqueda de todos los usuarios
// $text = '%' . $_REQUEST['term'] . '%';
$text = '%' . $_REQUEST['term'] . '%';
// $sql = "SELECT usuario FROM user WHERE usuario LIKE '$text' ORDER BY usuario ASC";
$sql = "SELECT usuario FROM user WHERE usuario = 'text';
$result = $conn->query($sql);

// declaro un array en el que guardar la lista de los usuarios
$array[] = '';

if ($result -> num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
        // Relleno el array con los datos del resultado d ela query
        $array[] = $row['usuario'];
    }
}

foreach ($array as $user ) {
    // Cada ítem del array se imprirá seguido de un br, formando una lista
    echo $user . '<br>';
}

?>
