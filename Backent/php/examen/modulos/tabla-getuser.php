<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla-getuser</title>
    <link rel="stylesheet" href="../css/tabla-getuser.css">
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

    mysqli_select_db($conn, 'base');
    $sql = "SELECT * FROM usuarios WHERE email LIKE '$q' OR nombre LIKE '$q' ORDER BY id ASC";
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
    echo "<td>" . $row['user_type'] . "</td>";
    echo "<tr>";
}

echo "</table>";

mysqli_close($conn);
    ?>
</body>

</html>