<?php
session_start();

include 'conn.php';


if (isset($_SESSION['user_type']) == 'admin') {
    $sql = 'SELECT * FROM usuarios';
} elseif (isset($_SESSION['user_type']) == 'user') {
    $user = isset($_SESSION['id']);
    $sql = "SELECT * FROM usuarios WHERE Id = '$user'";
} elseif (isset($_SESSION['user_type']) == 'colab') {
    $sql = "SELECT * FROM usuarios WHERE user_type != 'admin'";
}
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="intro.js"></script>
    <link rel="stylesheet" href="../css/panel-edi-admin.css">
    <!-- link de los iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <br>

    <div class="tabla2">
        <table>
            <?php
            if ($result->num_rows > 0) {
                echo "<h1> Edición de datos de usuarios</h1>
                    <tr>
                       
                       <th> Correo</th>
                       <th> Contraseña</th>
                       <th> DNI</th>
                       <th> Mac_orden</th>
                       <th> Biometrica </th>
                       <th> User_type</th>
                       <th> Estado</th>
                       <th> Actualizar</th>
                       <th> Borrar </th>
                       
                    </tr>";
                while ($row = $result->fetch_assoc()) {
                    $Id = $row['Id'];
                    $usuario = $row['email'];
                    $contrasena = $row['contrasena'];
                    $dni = $row['dni'];
                    $mac_orden = $row['mac_orden'];
                    $biometria = $row['biometria'];
                    $user_type = $row['user_type'];
                    $status = $row['status'];

                    $input = NULL;

                    if($status == 'correcto'){
                        $input = "<td class='td1' type='submit' name='completo'><i class='bi bi-clipboard-x'></i> ";
                    }elseif($status == 'incorrecto'){
                        $input = "<td class='td2' type='submit' name='incorrecto'><i class='bi bi-dash'></i>";
                    }elseif($status == 'incompleto'){
                        $input = "<td class='td3' type='submit' name='incompleto' ><i class='bi bi-check-lg'></i>";
                    }


                    echo "<form action='edicion-admin.php' method='post'>
                    <tr>
                    <td>
                      <input type='text' placeholder='ID' name='id' hidden value='$Id'>
                      <input type='text' placeholder='Usuario' name='usuario' value='$usuario'>
                    </td>
                    <td>
                      <input type='text' placeholder='contrasena' name='contrasena' value='$contrasena'>
                    </td>
                    <td>
                      <input type='text' placeholder='dni' name='dni' value='$dni'>
                    </td>
                    
                    <td>
                      <input type='text' placeholder='Mac_orden' name='mac_orden' value='$mac_orden'>
                    </td>
                    <td>
                      <input type='text' placeholder='Biometria' name='biometria' value='$biometria'>
                    </td>
                    <td>
                      <select  name='user_type'>
                         <option value='$user_type'>$user_type</option>
                         <option value='admin'></option>
                         <option value='user'></option>
                         <option value='colab'></option>
                         
                      </select>
                    </td>
                    $input
                      <select name='status'>
                         <option value='$status' disabled selected>$status </option>
                         <option value=''></option>
                         <option value=''></option>
                         <option value=''></option>
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
    </div>
    <br>
    <!-- <div class="formulario">
        <form action="usuario-registro.php" method="post">
            <div class="search-box">            
               <input type="text" autocomplete="off"  placeholder="Usuario" name="usuario" required>
               <div class="display"></div>
            </div>
            <div>
              <input type="password" placeholder="Contraseña" name="contrasena" required>
            </div>
            <div>
              <input type="submit" value="Crear">
            </div>
        </form>
    </div> -->
    <br>

    <div>
        <?php
        echo '<a href="panel-user.php"><button class="formulario1">Atrás</button></a>';
        if (isset($_SESSION['logged'])) {
            if ($_SESSION['user_type'] == 'admin') {
                echo '<a href="principal.php"><button class="formulario1">Atrás</button></a>';
            } else {
                echo '<a href="panel-user.php"><button class="formulario1">Atrás</button></a>';
            }
        }
        ?>
    </div>

</body>


</html>
