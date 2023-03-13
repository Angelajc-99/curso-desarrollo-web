<?php
    session_start();
    include 'conn.php';

    $usuario = $_SESSION['Id'];
// inicio de sesión para el admin
    if (isset($_SESSION['logged']) && $_SESSION['user_type'] == 'admin') {
        $sql = "SELECT * FROM usuarios";
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
    <link rel="stylesheet" href="../css/admin.css">

</head>
<!-- tabla del administrador -->
<body>
    <div>
   
    <br>
            <?php
                if ($result->num_rows > 0) {
                    echo "<h1> Bienvenido Administrador </h1>
                        <table>
                        <tr>
                           
                           <th> Correo</th>
                           <th> Contraseña</th>
                           <th> DNI</th>
                           <th> Mac_orden</th>
                           <th> Biometrica </th>
                           <th> User_type</th>
                           <th> Actualizar</th>
                           <th> Borrar </th>
                           
                        </tr>";
                    while ($row = $result->fetch_assoc()) {
                        $Id = $row['Id'];
                        $usuario = $row['email'];
                        $contrasena = $row['contrasena'];
                        $dni = $row['dni'];
                        $mac_ordenardor = $row['mac_ordenardor'];
                        $biometría = $row['biometría'];
                        $user_type = $row['user_type'];
                    $user_type1 = 'user';
                    $user_type2 = 'admin';
                    $user_type3 = 'colab';
                    if ($user_type == 'admin') {
                        $user_type1 = 'admin';
                        $user_type2 = 'user';
                        $user_type3 = 'colab';
                    }  
    
                        echo "<form action='arch-admin.php' method='post'>
                        <tr>
                        <td>
                          <input type='text' placeholder='ID' name='Id' hidden value='$Id'>
                          <input type='text' placeholder='Usuario' name='email' value='$usuario'>
                        </td>
                        <td>
                          <input type='text' placeholder='contrasena' name='contrasena' value='$contrasena'>
                        </td>
                        <td>
                          <input type='text' placeholder='dni' name='dni' value='$dni'>
                        </td>
                        
                        <td>
                          <input type='text' placeholder='Mac_orden' name='mac_ordenardor' value='$mac_ordenardor'>
                        </td>
                        <td>
                          <input type='text' placeholder='Biometria' name='biometría' value='$biometría'>
                        </td>
                        <td>
                         <select  name='usertype'>
                            <option value='$user_type1'>$user_type1</option>
                            <option value='$user_type2'>$user_type2</option>
                            <option value='$user_type3'>$user_type3</option>
                         </select>
                       </td>
                        <td>
                           <input type='submit' name='update' value='Actualizar'>
                        </td>
                        <td>
                          <input class='btn' type='submit' name='delete' value='Eliminar'>
                        </td>
                        </form>
                        </tr>";
    
                    }
                    echo '</table>';

                }

                mysqli_close($conn);
                ?>
    <!-- formulario de registro -->

    <div class="formulario">
        <form action="registro.php" method="post">
            <div>
               <input type="email" placeholder="Correo" name="email" required>
            </div>

            <div>   
               <input type="password" placeholder="Contraseña" name="contrasena" required>
            </div>

            <div>
               <input type="submit" name="envio" value="Enviar">
            </div>
        </form>
             

    </div>

    <a href="principal.php"><input type="button" class="btn" value='Cerrar sesión'></a>
    
</body>
</html>