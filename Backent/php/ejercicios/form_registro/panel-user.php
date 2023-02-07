<?php
session_start();
include 'conn.php';

if (isset($_SESSION['logged']) && $_SESSION['usertype'] == 'admin') {
    $sql = 'SELECT * FROM user';
    echo '<a href="panel-edi-admin.php"><button>Cambiar datos</button></a>';
    echo '<a href="pagina-principal.php"><button>Volver</button></a>';
} elseif ($_SESSION['usertype'] == 'user') {
    $userid = $_SESSION['id'];
    // cuando se utiliza una variable siempre se pone con comillas dobles ""
    $sql = "SELECT * FROM user WHERE id = '$userid'";
    echo '<a href="panel-de-edicion.php"><button>Cambiar datos</button></a>';
    echo '<a href="pagina-principal.php"><button>Volver</button></a>';
}
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..//style.css">
</head>

<body>

    <h1>Tabla de usuarios en la BD</h1>
    <div class="tabla">
        <table>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Contraseña</th>
            </tr>
            <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo "<tr> <td>" . $row['id'] . "</td>" .
                        "<td>" . $row['usuario'] . "</td>" .
                        "<td>" . $row['correo'] . "</td>" .
                        "<td>" . $row['contrasena'] . "</td></tr>";
                }
            }
            ?>




        </table>
    </div>

</body>

</html>