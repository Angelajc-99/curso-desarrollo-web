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
    echo "<table id='tabla'>
<tr>
    <th>Nombre de usuario</th>
    <th>Email</th>
    <th>Permisos</th>
</tr>";
// Contenido de la tabla 
while ($row = mysqli_fetch_array($result)) {
    $fila = "<tr>";
    if ($row['active'] == 1 && $row['usertype'] != 'admin') {
        $fila = "<tr style='background-color: aqua;' >";
    }
    echo "<tr>";
    echo "<td>" . $row['usuario'] . "</td>"; 
    echo "<td>" . $row['correo'] . "</td>";
    echo "<td>" . $row['usertype'] . "</td>";
    echo "<tr>";
}

echo "</table>";

mysqli_close($conn);
    ?>



<script>
   let boton = document.getElementById('tabla');
//    let div = document.getElementById('div');
//    let icono = document.getElementById('img6');
   
   boton.addEventListener('mouseover', function() {
     div.style.display = "block"; //Puedes usar inline o cualquier    otro
     icono.style.display = "none"; 
   });
   
//    boton.addEventListener('mouseout', function() {
//      div.style.display = "none";
//      icono.style.display = "block"; 
//    });
</script>