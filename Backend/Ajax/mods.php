<?php

// realizamos la conexión a la BD
$conn = mysqli_connect('localhost', 'root', '1234');

mysqli_select_db($conn, 'datos');

$sql = "SELECT * FROM audit";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM audit WHERE id_audit = '$id'";
}


$result = mysqli_query($conn, $sql);


// Contenido
if (isset($_GET['id'])) {
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id_audit'];
        echo "<option value='$id'>" . $id . " - " . $row['old_correo'] . "</option>";
    }
} else {
    // Imprimimos los datos en una tabla
    echo "<table>
    <tr>
        <th>Fecha</th>
        <th>Usuario antiguo</th>
        <th>Usuario nuevo</th>
        <th>Email antiguo</th>
        <th>Email nuevo</th>
    </tr>";

    // Contenido de la tabla
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['fecha_modif'] . "</td>";
        echo "<td>" . $row['old_usuario'] . "</td>";
        echo "<td>" . $row['new_usuario'] . "</td>";
        echo "<td>" . $row['old_correo'] . "</td>";
        echo "<td>" . $row['new_correo'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

mysqli_close($conn);