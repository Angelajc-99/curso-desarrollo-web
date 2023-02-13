<?php
session_start();
include 'conn.php';

$user = $_SESSION['id'];

if (isset($_SESSION['logged']) && $_SESSION['usertype'] == 'admin') {

    $sql = 'SELECT * FROM user';
    $result = $conn->query($sql);
}
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

    <table>
        <?php
        if ($result->num_rows > 0) {
            echo "<h1> Edicion de datos de usuarios</h1>
                <tr>
                   <th> usuario</th>
                   <th> correo</th>
                   <th> contraseña</th>
                   <th> usertype</th>
                   <th> opciones</th>
                   <th> borrar </th>
                </tr>";

            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $usuario = $row['usuario'];
                $correo = $row['correo'];
                $contrasena = $row['contrasena'];
                $usertype = $row['usertype'];

                echo "<form action='archivo-edi-admin.php' method='post'>
                            <tr>
                            <td>
                            <input type='text' placeholder='ID' name='id' hidden value='$id'>
                            <input type='text' placeholder='Usuario' name='usuario' value='$usuario'>
                            </td>
                            <td>
                            <input type='text' placeholder='Email' name='correo' value='$correo'>
                            </td>
                            <td>
                            <input type='text' placeholder='Contraseña' name='contrasena' value='$contrasena'>
                            </td>
                            <td>
                            <input type='text' placeholder='usertype' name='usertype' value='$usertype'>
                            </td>
                            <td>
                            <input type='submit' name='update' value='Actualizar datos del usuario'>
                            </td>
                            <td>
                            <input type='submit' name='delete' value='Borrar datos'>
                            </td>
                            </form>
                            </tr>";
            }
        }


        ?>
    </table>
    <?php
    echo '<a href="pagina-principal.php"><button>Ir a mi cuenta</button></a>';
    ?>

</body>

</html>