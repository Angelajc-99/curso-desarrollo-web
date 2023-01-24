<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" 
     content="IE=edge">
    <meta name="viewport" content="width=device-width, 
     initial-scale=1.0">
    <title>Variables globales</title>
</head>
<body>
    <h1>Variables Superglobales</h1>
    <p>
        Son accesibles desde cualquier punto del 
        código, función,
        archivo... sin necesidad de hacer nada 
         particular.
    </p>

    <h2>$GLOBALS</h2>
    <p>
        Es un array donde podemos almacenar variables 
        que queremos que tengan propiedad global.
        se puede acceder a éstas mediante 
        <code>$GLOBALS[index]</code>
    </p> 

    <?php
    $x = 75;
    $y = 25;

    function suma() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        // $z2 = $GLOBALS['x'] + $GLOBALS['y'];
    }

    suma();
    echo $z;
    // echo $z2;
    ?>

    <hr>

    <h2>$SESION</h2>
    <p>
        Array global que se usa para guardar 
        información que vamos a utilizar en 
        múltimples páginas.
        No guarda información al navegador, a 
        diferencia de las cookies.
    </p>
    <p>
        Por lo tanto, estas variables se perderán al 
        cerrar el navegador.
    </p>

    <?php

    if ($_SERVER['REQUEST_METHOD' == "POST"]) {
        $_SESSION['username'] = $_POST['user'];
    }
    ?>
    </body>
</html>