<?php
    session_start();
    include 'conn.php';

    $user = $_SESSION['Id'];

    $sql = "SELECT * FROM usuarios WHERE Id = '$user'";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/user.css">

</head>
<body>

<!-- página del usuario -->
<div class="cont">
      <?php
          if ($result->num_rows > 0) {
            echo "<table>
              echo '<h1>Bienvenido Usuario</h1>'
              <tr>
                 
                 <th> Correo</th>
                 <th> Contraseña</th>
                 <th> DNI</th>
                 <th> Mac_orden</th>
                 <th> Biometrica </th>

              </tr>";

              while ($row = $result->fetch_assoc()) {
                  $usuario = $row['email'];
                  $contrasena = $row['contrasena'];
                  $dni = $row['dni'];
                  $biometría = $row['biometría'];
                  $mac_ordenardor = $row['mac_ordenardor'];


                  echo "<tr>
                  <h2>Datos</h1>
                  
                  <form action='arch-user.php' method='post'>
                  <tr>
                  <td>
                    <input type='text' placeholder='Usuario' name='email' value='$usuario'>
                  </td>
                  <td>
                    <input type='password' placeholder='contrasena' hidden name='contrasena' value='$contrasena'>
                  </td>
                  <td>
                    <input type='text' placeholder='dni' name='dni' value='$dni'>
                  </td>                 
                  <td>
                    <input type='text' placeholder='Mac_orden' name='mac_ordenardor' value='$mac_ordenardor'>
                  </td>
                  <td>
                    <input type='text' placeholder='Foto del documento...' name='biometría' value='$biometría'>
                  </td>
                  </form>
                  </tr>";

              }
              echo "</table>";
            }
            mysqli_close($conn);
          ?>
    
     
    <a href="principal.php"><input type="button" class="btn" value="Cerrar sesión"></a>
</div>
    
</body>
</html>