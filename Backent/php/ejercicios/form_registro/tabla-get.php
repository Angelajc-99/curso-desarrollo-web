
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla-getuser</title>
    <style>
        .tabla1 {
          /* display: none; */
          z-index: 35px;
        }
        tr:hover {
            background-color: rgb(94, 99, 101);
        }
    </style>
</head>
<body>
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
    echo "<table class='tabla1'>
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

// if ($result->num_rows > 0) {
    
//     echo "<h1> Edición de datos de usuarios</h1>";
//     echo "<table class='tabla1'>
//         <tr>
//            <th> Usuario</th>
//            <th> Correo</th>
//            <th> Contraseña</th>
//            <th> Usertype</th>
//            <th> Opciones</th>
//            <th> Borrar </th>
//         </tr>";
//     while ($row = $result->fetch_assoc()) {
//         $id = $row['id'];
//         $usuario = $row['usuario'];
//         $correo = $row['correo'];
//         $contrasena = $row['contrasena'];
//         $usertype = $row['usertype'];
//         $usertype1 = 'user';
//         $usertype2 = 'admin';
//         if ($usertype == 'admin') {
//             $usertype1 = 'admin';
//             $usertype2 = 'user';
//         }
//         echo "<form action='archivo-edi-admin.php' method='post'>
//                     <tr>
//                     <td>
//                       <input type='text' placeholder='ID' name='id' hidden value='$id'>
//                       <input type='text' placeholder='Usuario' name='usuario' value='$usuario'>
//                     </td>
//                     <td>
//                       <input type='text' placeholder='Email' name='correo' value='$correo'>
//                     </td>
//                     <td>
//                       <input type='text' placeholder='Contraseña' name='contrasena' value='$contrasena'>
//                     </td>
//                     <td>
//                       <select  name='usertype'>
//                          <option value='$usertype1'>$usertype1</option>
//                          <option value='$usertype2'>$usertype2</option>
//                       </select>
//                     </td>
//                     <td>
//                        <input type='submit' name='update' value='Actualizar'>
//                     </td>
//                     <td>
//                       <input type='submit' name='delete' value='Eliminar'>
//                     </td>
//                     </form>
//                     </tr>";
//     }
//     echo "</table>";
// }

mysqli_close($conn);
    ?>
</body>

</html>