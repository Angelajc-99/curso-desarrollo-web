<?php

require('conn.php');

// Voy hacer una busqueda de todos los usuarios
// $text = '%' . $_REQUEST['term'] . '%';
$text = $_REQUEST['term'];
// $sql = "SELECT user FROM user WHERE usuario LIKE '$text' ORDER BY user ASC";
$sql = "SELECT usuario FROM user WHERE userio = '$text'";

$result = $conn->query($sql);

//declaro un array en el que guardar la lista de los usuarios
$array[] = '';

if ($result->num_rows > 0) {
    // while ($row = $result->fetch_assoc()) {
    //     // relleno el array con los datos del resultado de la query
    //     $array[] = $row['usuario'];
    // }


    // en css ponemos el css en js y en el php ponemos el color que elijamos

    echo "red";
} else echo "green";

//{ se vacia la lista
    // resultList.empty(); }

/*foreach ($array as $user ) {
    // Cada ítem del array se imprirá seguido de un br, formando una lista
    echo $user . '<br>';
}*/
/* if (el usuario no existe) {
    echo "<script>
    colorChange('green')
    </script>";
    else colorChange('blue');
*/
?>