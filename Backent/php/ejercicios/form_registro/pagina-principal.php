<?php
// es una forma de hacer que los datos estén disponibles en varias páginas de la web.
session_start();

if (isset($_POST['logout'])) {
    // session_destroy destruye los datos
    session_destroy();
    // header localiza los datos de la pagina
    header('Location: pagina-principal.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        body{
            background-image: linear-gradient(90deg, #ffffff 0, #cdcdf2 25%, #8e95ca 50%);
            background-size: 100% 100%;
            margin: 0;
            padding: 0;
            text-align: center; 
            
        }
        .btn {
            text-align: center;
            height: 25%;
            width: 25%;
        }
    </style>
</head>
<body>
    <div>
    <h1>Bienvenido</h1>

        <?php
            // Este if pregunta si el usuario está logeado
            if (isset($_SESSION['logged'])) {
                // aquí va el panel/botón/contenido del usuario
                echo '<a href="panel-user.php"><button>Ir a mi cuenta</button></a>';
                echo "<form action='pagina-principal.php' method='post'>
                <br>
                <input type='submit' value='Cerrar sesión' name='logout'>
                </form>";
            } else {
                // Si no está logeado, mostramos el botón de iniciar sesión
                echo '<a href="form_login.php">
                        <button>Iniciar sesión</button>
                     </a>';
            }
            ?>
    </div>
    <div class="btn">
        <!-- <button>Cuenta</button>
        <button></button> -->

    </div>
    
</body>
</html>