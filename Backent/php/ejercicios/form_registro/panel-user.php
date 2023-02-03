<?php
session_start();
include 'conn.php';

if (isset($_SESSION['logged']) && $_SESSION['usertype'] == 'admin') {
    $sql = 'SELECT * FROM user';
    echo '<a href="panel-edi-admin.php"><button>Cambiar datos</button></a>';
} elseif ($_SESSION['usertype'] == 'user') {
    $userid = $_SESSION['id'];
    // cuando se utiliza una variable siempre se pone con comillas dobles ""
    $sql = "SELECT * FROM user WHERE id = '$userid'";
    echo '<a href="panel-de-edicion.php"><button>Cambiar datos</button></a>'; 
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
    <style>
        body {
            background: rgb(129, 208, 227);
            background: -moz-radial-gradient(circle, rgba(129, 208, 227, 1) 0%, rgba(228, 177, 199, 1) 100%, rgba(111, 140, 145, 1) 100%);
            background: -webkit-radial-gradient(circle, rgba(129, 208, 227, 1) 0%, rgba(228, 177, 199, 1) 100%, rgba(111, 140, 145, 1) 100%);
            background: radial-gradient(circle, rgba(129, 208, 227, 1) 0%, rgba(228, 177, 199, 1) 100%, rgba(111, 140, 145, 1) 100%);
        }

        h1 {
            text-align: center;
        }

        .tabla {
            justify-content: center;
            display: flex;
            position: absolute;
                top: 35%;
                left: 50%;
                transform: translate(-50%, -50%);
        }

        table {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 5px 2px;
            height: 25%;
            width: 25%;            
        }

        th {
            background-color: #aabbcc;
            border: 2px solid black;
            padding: 2px 5px;
        }

        td {
            border: 1px solid black;
            padding: 2px 5px;

        }
    </style>
</head>

<body>

    <h1>Tabla de usuarios en la BD</h1>
    <div class="tabla">
        <table>
            <tr>
                <th>id</th>
                <th>usuario</th>
                <th>email</th>
            </tr>
            <?php

            if ($result->num_rows > 0) {
                            
                while ($row = $result->fetch_assoc()) {
                    echo"<tr> <td>" . $row['id'] . "</td>" .
                             "<td>" . $row['usuario'] . "</td>" .
                             "<td>" . $row['correo'] . "</td></tr>";
                }
            }
            ?>

                      
            
             
        </table>
    </div>

</body>

</html>