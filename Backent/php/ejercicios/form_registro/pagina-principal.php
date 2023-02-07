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
    

        h1 {
            position: absolute;
            z-index: -2;
            top: 0;
            width: 100%;
            font-size: 50vh;
            font-family: 'Sassy Frass', cursive;
            margin-top: 0;
            
        }
        .boton{
            height: 80px;
            width: 100px;
            cursor: pointer;
            /* border-radius: 8px; */
        }
        .inicio {
            background-color: #94bde6;
            cursor: pointer;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 5vh;
            box-shadow: 2, 3 black;
            
        }
    </style>
</head>

<body>
<h1>Bienvenido</h1>
   
    <div class="btn">
   

        <?php
        // Este if pregunta si el usuario está logeado
        if (isset($_SESSION['logged'])) {
            // aquí va el panel/botón/contenido del usuario
            echo '<a href="panel-user.php"><button class="boton">Ir a mi cuenta</button></a>';
            echo "<form action='pagina-principal.php' method='post'>
                <br>
                <input class='boton' type='submit' value='Cerrar sesión' name='logout'>
                </form>";
        } else {
            // Si no está logeado, mostramos el botón de iniciar sesión
            echo '<a href="form_login.php">
                        <button class= "inicio">Iniciar sesión</button>
                     </a>';
        }
        ?>
    </div>

</body>

</html>