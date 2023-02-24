<?php
    //   Recogemos la variable enviada por GET
    $value = "%" . $_GET['value'] . "%";
    $filtro =  $_GET['filtro'];

    // Realizamos la conexión a la BD
    $conn = mysqli_connect('localhost', 'root', '1234');
    // if (!$conn) {
    //     die('Error de conexión' .mysqli_error($conn));

    // }

    mysqli_select_db($conn, 'datos');
    $sql = "SELECT * FROM user WHERE $filtro LIKE '$value'";

    if ($_GET['value'] == 'all') {
        $sql = "SELECT * FROM user";
    }
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