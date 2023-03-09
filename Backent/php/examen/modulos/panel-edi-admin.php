<!-- revisar usuario login tengo que crear un tabla donde me ponga que todo esta correcto -->
<?php
session_start();

include 'conn.php';


if ($_SESSION['user_type'] == 'admin') {
    $sql = 'SELECT * FROM usuarios';
} elseif($_SESSION['user_type'] == 'user'){
    $user = isset($_SESSION['id']);
    $sql = "SELECT * FROM usuarios WHERE Id = '$user'";
} elseif($_SESSION['user_type'] == 'colab'){
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

</head>

<body>
    <br>
    <!-- Creamos la cajita de búsqueda -->
    <!-- <div>
       
       <div class="container">
          <form action="">
                <div>
                  <input type="text" name="user" onkeyup="showUser  (this.value, 'usuario')" placeholder="Buscar   usuario o correo...">
                </div>
              
              <select onchange="showUser(this.value, 'usertype')">
                  <option value="" disabled selected>Filtrar por permisos</option>
                  <option value="admin">Mostrar administradores</option>
                  <option value="user">Mostrar usuarios</option>
                  <option value="colab">Mostrar colaboradores</option>
              </select>
            </form>        
    </div> -->

    <div class="tabla2">
        <table>
            <?php
            if ($result->num_rows > 0) {
                // echo "<h1> Edición de datos de usuarios</h1>
                //     <tr>
                //        <th> Nombre</th>
                //        <th> Apellido</th>
                //        <th> Correo</th>
                //        <th> Contraseña</th>
                //        <th> User_type</th>
                //        <th> Opciones</th>
                //        <th> Borrar </th>
                //     </tr>";
                while ($row = $result->fetch_assoc()) {
                    $Id = $row['Id'];
                    $usuario = $row['email'];
                    $contrasena = $row['contrasena'];
                    $user_type = $row['user_type'];

                    echo $usuario;
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
        // echo '<a href="panel-user.php"><button class="formulario1">Atrás</button></a>';
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
<!-- <script>
    function showUser(text, filtro) {
        display = document.getElementById('display');

        // Si el input está vacio , el div tb se vacía 
        if (text == ' ') {
                display.innerHTML = '@';
                return;
                // text = 'all';
            
        } else {
                let ajax = new XMLHttpRequest();
                ajax.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        display.innerHTML = this.responseText;
                    }
                };
                ajax.open('GET', 'tabla-get.php?value=' + text + '&filtro=' + filtro, true);
                ajax.send();
            }
        
    }
</script> -->

</html>