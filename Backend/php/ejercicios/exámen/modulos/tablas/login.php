<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('conn.php');

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM usuarios WHERE email = '$user' AND dni = '$pass'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $_SESSION['logged'] = true;

        while ($row = $result->fetch_assoc()) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['user_type'] = $row['tipo_usuario'];
        }

        header('Location: ./tabla.php');
        echo "funciona";
    } else echo "error";
}