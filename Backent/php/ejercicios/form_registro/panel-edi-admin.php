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
    <style>
        table {
            border: none;
            border-collapse: collapse;
            padding: 5px 2px;
            height: 25%;
            width: 25%;            
        }

        th {
            background-color: #6c92b8;
            border: none;
            padding: 2px 5px;
        }

        td {
            border: none;
            padding: 2px 5px;

        }
        input {
            border: none;
            background: ;
        }
        tr {
            border: none;
        }
    </style>
</head>

<body>

    <table>
        <?php
        if ($result->num_rows > 0) {
            echo "<h1> Edicion de datos de usuarios</h1>
                <tr>
                   <th> Usuario</th>
                   <th> Correo</th>
                   <th> Contraseña</th>
                   <th> Usertype</th>
                   <th> Opciones</th>
                   <th> Borrar </th>
                </tr>";

            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $usuario = $row['usuario'];
                $correo = $row['correo'];
                $contrasena = $row['contrasena'];
                $usertype = $row['usertype'];
                $usertype1 = 'user';
                $usertype2 = 'admin';

                if ($usertype == 'admin') {
                    $usertype1 = 'admin';
                    $usertype2 = 'user';
                }

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
                              <select  name='usertype'>
                                 <option value='$usertype1'>$usertype1</option>
                                 <option value='$usertype2'>$usertype2</option>
                              </select>
                            </td>
                            <td>
                               <input type='submit' name='update' value='Actualizar'>
                            </td>
                            <td>
                              <input type='submit' name='delete' value='Eliminar'>
                            </td>
                            </form>
                            </tr>";
            }
        }
        ?>
    </table>
    <br>

    <div class="formulario">
        <form action="usuario-registro.php" method="post">

            <input type="text" placeholder="Usuario" name="usuario" required>

            <input type="email" placeholder="Correo" name="correo" required>

            <input type="password" placeholder="Contraseña" name="contrasena" required>

            <input type="submit" value="Crear">
        </form>
    </div>

    <br>

    <?php
    echo '<a href="panel-user.php"><button>Atrás</button></a>';
    ?>

</body>

</html>