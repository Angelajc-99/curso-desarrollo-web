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
            background: linear-gradient(0deg, rgba(221, 237, 237, 1) 5%, rgba(53, 181, 184, 1) 57%, rgba(202, 184, 237, 1) 91%);
            background-size: 100% 100%;
            margin: 0;
            padding: 0;
            text-align: center;
            height: 100vh;
        }

        .btn {
            border: none;
            display: flex;
            grid-area: auto;
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
            font-size: 25vh;
            font-family: 'Sassy Frass', cursive;
            margin-top: 1;

        }

        .boton {
            height: 50px;
            width: 40vh;
            cursor: pointer;
            text-align: center;
            box-shadow: 2, 3 black;
            position: relative;
            background: rgb(169, 145, 196);
            border: none;
            padding: 16px 32px;
            color: rgb(193, 217, 226);
            font-size: 15px;
            font-weight: bold;
            border-radius: 12px;
        }
    </style>
</head>

<body>
    

    <div class="btn">


        <?php
        // Este if pregunta si el usuario está logeado
        if (isset($_SESSION['logged'])) {
            // aquí va el panel/botón/contenido del usuario
            echo '<h1>Bienvenido</h1>';
            echo '<a href="panel-user.php"><button class="boton">Ir a mi cuenta</button></a>';
            echo "<form action='pagina-principal.php' method='post'>
               
                <input class='boton' type='submit' value='Cerrar sesión' name='logout'>
                </form>";
        } else {
            // Si no está logeado, mostramos el botón de iniciar sesión
           
            echo '<a href="form_login.php">
                        <button class= "inicio">Iniciar sesión</button>
                     </a>';
            echo '<a href="form-registro.php">
            <button class= "inicio">Registrarse</button>
         </a>';
        }
        ?>
    </div>

</body>

</html>