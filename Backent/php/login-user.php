<?php

if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    // Recibimos las variables del form
    $user = $_POST['name'];
    $email = $_POST['email'];

    include 'conn.php';

    // Hacemos la query para buscar si existe un usuario con estos datos
    $sql = "SELECT * FROM usuario WHERE name = '$name' AND email = '$email'";
    $result = $sconn->query($sql);

    if ($result->num_rows > 0) {
    //    Si hay un resultado, es que hay un usuario con esos datos
    echo '<p>Has iniciado sesión con éxito</p>';
    echo "<p>Bienvenido $user.";
    }
}
?>
