<?php
    session_start();
    include 'conn.php';

    $usuario = $_session['id'];

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

<div class="cont">
      <?php
          if ($result->num_rows > 0) {
            echo "<table>
              echo '<h1>Bienvenido user</h1>'
              <tr>
                 
                 <th> Correo</th>
                 <th> Contraseña</th>
                 <th> DNI</th>
                 <th> Mac_orden</th>
                 <th> Biometrica </th>
                 <th> Actualizar</th>

              </tr>";

              while ($row = $result->fetch_assoc()) {
                  $usuario = $row['email'];
                  $contrasena = $row['contrasena'];
                  $dni = $row['dni'];
                  $biometria = $row['biometria'];
                  $mac_orden = $row['mac_orden'];


                  echo "<tr>
                  <h2>Datos</h1>
                  
                  <form action='arch-user.php' method='post'>
                  <tr>
                  <td>
                    <input type='text' placeholder='Usuario' name='usuario' value='$usuario'>
                  </td>
                  <td>
                    <input type='password' placeholder='contrasena' hidden name='contrasena' value='$contrasena'>
                  </td>
                  <td>
                    <input type='text' placeholder='dni' name='dni' value='$dni'>
                  </td>                 
                  <td>
                    <input type='text' placeholder='Mac_orden' name='mac_orden' value='$mac_orden'>
                  </td>
                  <td>
                    <input type='text' placeholder='Foto del documento...' name='biometria' value='$biometria'>
                  </td>
                  <td>
                     <input class='btn' type='submit' name='update' value='Actualizar'>
                  </td>
                  </form>
                  </tr>";

              }
              echo "</table>";
            }
            mysqli_close($conn);
          ?>
    
     
    <a href="principal.php"><input type="button" class="btn" value="inicio"></a>
</div>
    
</body>
</html>