<?php
include 'conn.php';

$sql = 'SELECT * FROM usuario';
$result = $conn->query($sql);
// var_dump($result); - sirve para mostrar datos;

// $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con base de datos</title>
    <style>
        table {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 5px 2px;
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
    <h1>Tabla de los usuarios de la BD</h1>
    <table>
        <tr>
            <th>id</th>
            <th>usuario</th>
            <th>email</th>
        </tr>
        <i></i>
        <a href=""></a>
        <?php
        if ($result->num_rows > 0) {
            // tambien se puede poner de esta manera
            //  echo "<tr>
            // <th>id</th>
            // <th>usuario</th>
            // <th>email</th> </tr>";


            // imprimir los datos de cada fila
            while ($row = $result->fetch_assoc()) {
                echo "<tr> <td>" . $row['id']. "</td>" .
                          "<td>" . $row['name'] . "</td>" .                      
                          "<td>" . $row['email'] . "</td> </tr>";
            }
        }
        ?>
    </table>
    
</body>
</html>