<?php
    session_start();
    include 'conn.php';

    $user = $_SESSION['Id'];
    if (isset($_SESSION['logged']) && $_SESSION['user_type'] == 'colab') {
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
    <!-- icinos de bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/colab.css">

</head>
<body>
<div>
    
      <?php
          if ($result->num_rows > 0) {
              echo "<h1> Bienvenido Colaborador </h1>
              <table>
              <tr>

                 <th> Id</th>
                 <th> Correo</th>
                 <th> DNI</th>
                 <th> Mac_orden</th>
                 <th> Biometrica </th>
                 <th> Estado</th>
                 <th> Actualizar</th>
                 
              </tr>";

              while ($row = $result->fetch_assoc()) {
                  $Id = $row['Id'];
                  $usuario = $row['email'];
                  $dni = $row['dni'];
                  $mac_ordenardor = $row['mac_ordenardor'];
                  $biometría = $row['biometría'];
                  $status = $row['status'];
                  $status1 = 'completo';
                  $status2 = 'incompleto';
                  $status3 = 'incorrecto';
                  
                  $input = NULL;

                  // otra forma para poner con iconos
                  if($status == 'completo'){
                      $input = "<td class='td1' type='submit' name='completo'><i class='bi bi-clipboard-x'></i> ";
                  }elseif($status == 'incorrecto'){
                      $input = "<td class='td2' type='submit' name='incorrecto'><i class='bi bi-dash'></i>";
                  }elseif($status == 'incompleto'){
                      $input = "<td class='td3' type='submit' name='incompleto' ><i class='bi bi-check-lg'></i>";
                  }


                  echo "<form action='arch-colab.php' method='post'>

                  <tr>
                  <td>
                    <input type='text' placeholder='ID' name='id' readonly value='$Id'>
                  </td>
                  <td>
                  <input type='text' placeholder='Usuario' name='email' readonly value='$usuario'>
                  </td>
                  <td>
                    <input type='text' placeholder='dni' name='dni' value='$dni'>
                  </td>
                  
                  <td>
                    <input type='text' placeholder='Mac_orden' name='mac_ordenardor' value='$mac_ordenardor'>
                  </td>
                  <td>
                    <input type='text' placeholder='Biometrica' name='biometría' value='$biometría'>
                  </td>
                  </td>
                  $input
                    <select name='status'>
                    name='usertype'>
                                     <option value='$status1'>$status1</option>
                                     <option value='$status2'>$status2</option>
                                     <option value='$status3'>$status3</option>
                                  </select>
                                </td>
                  <td>
                     <input class='btn' type='submit' name='updatecolab' value='Actualizar'>
                  </td>
                  </tr>
                  </form>";

              }
              echo "</table>";
              
            }else {
                echo '<p>Este usuario no esxiste</p>';

            }
                mysqli_close($conn);
          ?>
    </table>

    <a href="principal.php"><input type="button" class="btn" value='Cerrar sessión'></a>
</div>
    
</body>
</html>