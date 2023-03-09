<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    include 'conn.php';
    if (isset($_POST['user'])) {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];


        //Con la query vermos si existe un usuario con estos datos
        $sql = "SELECT * FROM usuario
     WHERE correo = '$usuario' AND contrasena ='$contrasena'";
        $result = $conn->query($sql);

        echo '<div>';
        if ($result->num_rows > 0) {
            $_SESSION['logged'] = true;
            while ($row = $result->fetch_assoc()) {
                //Creamos una array $row con los resultados de la query del usuario
                $_SESSION['correo'] = $row[''];
                $_SESSION['usertype'] = $row['usertype'];
                $_SESSION['dni'] = $row['dni']; 

            }
            
        } else {
            header("Location: login.php?fallo=true");
        }
    }
    include 'panel_type.php';
}
if (isset($_SESSION['update'])) {
    echo "<p style='color:green; font-weight: bold;'>Datos Actualizados con exito</p>";
    unset($_SESSION['update']);
}
?>
<link rel="stylesheet" href="">
<table>
    <tr>
        <th>Usuario</th>
        <th>DNI</th>
        <th>Contraseña</th>
        <th>MAC</th>
        <th>Biometrica</th>
        <th>Tipo de usuario</th>
    </tr>

    <?php
    //contenido de la tabla
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr> <td>" . $row['dni'] . "</td>" .
                "<td>" . $row['nombre'] . "</td>" .
                "<td>" . $row['contrasena'] . "</td>" .
                "<td>" . $row['mac_orden'] . "</td>" .
                "<td>" . $row['biometrica'] . "</td>" .
                "<td>" . $row['usertype'] . "</td>" .
                "<td>" . "<form action='datos-actualizados.php' method='post'>
                        <input type='hidden' name='user' value='" . $row['nombre'] . "'>
                        <button class='option' type='submit'><span class='material-symbols-outlined'>
                        drive_file_rename_outline
                        </span></button></form>" . "</td> </tr>";
        }
    }
    ?>
</table>
<a href="login.php">
    <button class="btn">Cerrar Sesión</button>
</a>