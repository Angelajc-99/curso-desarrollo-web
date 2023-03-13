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
    <link rel="stylesheet" href="../css/general.css">

</head>
<body>
    <div class="cont">
        <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $usuario = $_POST['email'];
                $contrasena = $_POST['contrasena'];
                
                include 'conn.php';
// query para iniciar sesión ya seas usuario, admin o caloborador
                $sql = "SELECT * FROM usuarios WHERE email = '$usuario' AND contrasena = '$contrasena'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    echo" <br><p>Bienvenido $usuario</p>";

                    $_SESSION['logged'] = 'true';
                    while ($row = $result->fetch_assoc()) {
                        $_SESSION['Id'] = $row['Id'];
                        $_SESSION['user_type'] = $row['user_type'];
                    }

                    $link = 'usuario.php'; 
                    if ($_SESSION['user_type'] == 'admin') $link = 'admin.php';
                    if ($_SESSION['user_type'] == 'colab') $link = 'colab.php';

                     echo " <a href='$link'>
                                Cuenta
                            </a>";
                     $conn->close();
                     
                    } elseif ($result->num_rows === 0) {
                        $_SESSION['fallo'] = true;

                        header('Location: principal.php');

                        exit();
                }

            }

            
        ?>
    </div>
</body>
</html>