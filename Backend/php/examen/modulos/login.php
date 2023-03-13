<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] = 'POST') {
            include 'conn.php';

            $usuario = $_POST['email'];
            $contrasena = $_POST['contrasena'];

            $sql = "SELECT * FROM usuarios WHERE email = '$usuario' AND contrasena = '$contrasena'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<p>Has iniciado sesión con éxito</p>';
                echo "Bienvenido $usuario.";

                $_SESSION['logged'] = true;
                while ($row = $result->fetch_assoc()) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['email'];
                    $_SESSION['user_type'] = $row['user_type'];
                }

                // se redirige a..
                echo '<a href="principal.php">
                <button class="btn"></button>
                </a>';
                
             $conn->close();
            } elseif ($result->num_rows === 0) {
                $_SESSION["fallos"] = true;
                header("Location: form_login.php?fallo=true");
                exit();
            }
        }
    ?>
</body>
</html>
