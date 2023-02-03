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
</head>

<body>

    <?php
    if ($result->num_rows > 0) {
        echo "<h1> Edicion de datos de usuarios</h1>
                <tr>
                   <th> 'usuario'</th>
                   <th> 'correo'<th>
                   <th> 'usertype'</th>
                </tr>";
      
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $usuario = $row['usuario'];
        $correo = $row['correo'];
        $contrasena = $row['contrasena'];
        $usertype = $row['usertype'];

            echo "<form action='archivo-edi-admin.php' method='post'>
                            
                            <input type='text' placeholder='ID' name='id' hidden value='$id'>
                            <input type='text' placeholder='Usuario' name='usuario' value='$usuario'>
                            <input type='text' placeholder='Email' name='correo' value='$correo'>
                            <input type='text' placeholder='Contraseña' name='contrasena' value='$contrasena'>
                            <input type='text' placeholder='usertype' name='usertype' value='$usertype'>
                            <input type='submit' value='Actualizar datos del usuario'>
                            </form>";
           
        }
    }


    ?>
    <?php
     echo '<a href="pagina-principal.php"><button>Ir a mi cuenta</button></a>';
     ?>

</body>

</html>