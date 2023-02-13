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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sassy+Frass&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(90deg, #ffffff 0, #cdcdf2 25%, #8e95ca 50%);
            background-size: 100% 100%;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .btn {
            cursor: pointer;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 90vh;
        }

        .boton{
            height: 80px;
            width: 100px;
            cursor: pointer;
          border-radius: 8px;
        }

        .inicio {
            background-color: #94bde6;
            cursor: pointer;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 15vh;
            box-shadow: 2, 3 black;
            
        }
    </style>
</head>

<body>
    <div class="btn">
   

        <?php
        // Este if pregunta si el usuario está logeado
        if (isset($_SESSION['logged'])) {
            // aquí va el panel/botón/contenido del usuario
            echo '<a href="panel-user.php"><button class="boton">Ir a mi cuenta</button></a>';
            echo "<form action='principal.php' method='post'>
                <br>
                <input class='boton' type='submit' value='Cerrar sesión' name='logout'>
                </form>";
        } else {
            // Si no está logeado, mostramos el botón de iniciar sesión
            echo '<a href="form_login.php">
                        <button class= "inicio">Iniciar sesión</button>
                     </a>';
                    //  echo '<a href="form-registro.php">
                    //  <button">Registrate</button>
                        
                    //  </a>';
        }
        ?>
    </div>

</body>

</html>