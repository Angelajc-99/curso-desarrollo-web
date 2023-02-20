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
    <style>
        .tabla {
            justify-content: center;
            display: flex;
            position: absolute;
                top: 35%;
                left: 50%;
                transform: translate(-50%, -50%);
                border-radius: 8px;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px 2px;
            height: 25%;
            width: 25%;            
        }
        th {
            background-color: #6c92b8;
            border: 1px solid rgb(43, 42, 42);
            padding: 2px 5px;
        }
        td {
            border: 1px solid rgb(43, 42, 42);
            padding: 2px 5px;
        }
    </style>
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

            if (isset($_SESSION['logged'])){
                if ($_SESSION['usertype'] == 'user'){
                    // echo '<a href="pagina-principal.php"><button class="formulario1">Atrás</button></a>';
                }
            }
            ?>


        </table>
    </div>
</body>
</html>