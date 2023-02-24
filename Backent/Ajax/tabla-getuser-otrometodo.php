<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla-getuser</title>
    <style>
     body {
    background-image: linear-gradient(to bottom right,  #798b9e, #262a2e);

    /* viewport heigth/width (se ajusta al tamaño de la ventana o dispositivo) */
    height: 100vh;
    width: 100vw;
    margin: 0;

    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

        table {
            border: 2px solid black;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th {
            background-color: #aabbcc;
            border: 2px solid black;
            padding: 2px 5px;
        }

        td {
            border: 1px solid black;
            padding: 2px 5px;
            user-select: none;
            color: whitesmoke;
        }

        tr:hover {
            background-color: rgb(94, 99, 101);
        }
    </style>
</head>
<body>
    <?php
    //   Recogemos la variable enviada por GET
    $q = "%" . $_GET['q'] . "%";

    // Realizamos la conexión a la BD
    $conn = mysqli_connect('localhost', 'root', '1234');
    // if (!$conn) {
    //     die('Error de conexión' .mysqli_error($conn));

    // }

    mysqli_select_db($conn, 'datos');
    $sql = "SELECT * FROM user WHERE usuario LIKE '$q' OR correo LIKE '$q' ORDER BY id ASC";
    $result = mysqli_query($conn,$sql);

    // Imprimimos los datos en una tabla
    echo "<table>
<tr>
    <th>Nombre de usuario</th>
    <th>Email</th>
    <th>Permisos</th>
</tr>";
// Contenido de la tabla 
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['usuario'] . "</td>"; 
    echo "<td>" . $row['correo'] . "</td>";
    echo "<td>" . $row['usertype'] . "</td>";
    echo "<tr>";
}

echo "</table>";

mysqli_close($conn);
    ?>
</body>

</html> -->