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
     background-color: rgba(1, 8, 12, 0.77);
     color: white;
      
    
    
     height: 100vh;
     width: 100vw;
     margin: 0;
     padding: 0;

     display: flex;
     justify-content: center;

     font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

    </style>

</head>
<body>
    
<div class="btn">
        <?php
        // Este if pregunta si el usuario está logeado
        if (isset($_SESSION['logged'])) {
            
            if ($_SESSION['usertype'] == 'admin'){
                echo '<h1>Bienvenido</h1>';
                echo '
                <a href="panel-edi-admin.php"><button class="boton">Ir al panel de administración</button>
                </a>';
                echo "<form action='pagina-principal.php' method='post'>               
                <input class='boton' type='submit' value='Cerrar sesión' name='logout'>
                </form>";
            }else{
                echo '<h1>Bienvenido</h1>';
                echo '<a href="panel-user.php"><button class="boton">Ir a mi cuenta</button></a>';
                echo "<form action='pagina-principal.php' method='post'><input class='boton' type='submit' value='Cerrar sesión' name='logout'>
                </form>";
            }
            // aquí va el panel/botón/contenido del usuario
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