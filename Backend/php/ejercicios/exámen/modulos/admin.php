<?php
    session_start();
    include 'conn.php';

    $usuario = $_SESSION['Id'];

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
                          <select  name='user_type'>
                             <option value='$user_type'>$user_type</option>
                             <option value='admin'></option>
                             <option value='user'></option>
                             <option value='colab'></option>
                             
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
        
        

                
            <a href="principal.php"><input type="button" class="btn" value='Cerra sesión'></a>

    </div>
    
</body>
</html>