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
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="intro.js"></script>
    <link rel="stylesheet" href="..//style.css">

    <style>

        table {
            border: none;
            border-collapse: collapse;
            padding: 5px 2px;
            height: 25%;
            width: 25%;  
            justify-content: center;
            display: flex;
            position: absolute;
                top: 35%;
                left: 50%;
                transform: translate(-50%, -50%);  
            /* display: none; */

        }
        th {
            background-color: #6c92b8;
            border: none;
            padding: 2px 5px;
            /* cursor: pointer; */
        }
        td {
            border: none;
            padding: 2px 5px;
            /* cursor: pointer; */
        }
        input {
            border: none;
            /* background: pack; */
            /* cursor: pointer; */
        }
        tr {
            border: none;
            /* cursor: pointer; */
        }

        select {
            width: 100%;
        }
        .formulario {
            justify-content: center;
            display: flex;
            position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
        }
        .formulario1 {
            /* height: 5%;*/
            width: 5%;
            cursor: pointer;
            border-radius: 8px;
            border-bottom: #6c92b8;
            border: none;
            font-size: medium;
            justify-content: center;
            display: flex;
            box-shadow: 2, 3 darkmagenta;
            position: absolute;
                top: 80%;
                left: 50%;
                transform: translate(-50%, -50%);
        }
        .container {
            
    display: flex;
    justify-content: center;
    align-items: center;
    width: 15%;
    
    flex-direction: column;
    text-align: center;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .tabla2 {
            background: #6c92b8;
            width: 100%;
            height: 50vh;
        }
        
    </style>
</head>

<body>
<br>
    <!-- Creamos la cajita de búsqueda -->
    <div>
       
       <div class="container">
          <form action="">
                <!-- <select name="" id=""></select> -->
                <div>
                  <input type="text" name="user" onkeyup="showUser  (this.value, 'usuario')" placeholder="Buscar   usuario o correo...">
                </div>
              
              <select onchange="showUser(this.value, 'usertype')">
                  <option value="" disabled selected>Filtrar por permisos</option>
                  <option value="admin">Mostrar administradores</option>
                  <option value="user">Mostrar usuarios</option>
              </select>
            </form>
  
            <div id="display">
                <!-- <table>
                     <tr><th> Usuario</th>
                <th> Correo</th>
                <th> Contraseña</th>
                <th> Usertype</th>
                <th> Opciones</th>
                 <th> Borrar </th></tr>
                </table></div> -->
            </div>        
    </div>
    
    <div class="tabla2">
        <table>
            <?php
            // echo "<h1> Edición de datos de usuarios</h1>";
            if ($result->num_rows > 0) {
                echo "<h1> Edición de datos de usuarios</h1>
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
    </div>
    <br>
    <div class="formulario">
        <form action="usuario-registro.php" method="post">
            <div class="search-box">            
               <input type="text" autocomplete="off"  placeholder="Usuario" name="usuario" required>
               <div class="display"></div>
            </div>
            <div>
              <input type="email" placeholder="Correo" name="correo" required>
            </div>
            <div>
              <input type="password" placeholder="Contraseña" name="contrasena" required>
            </div>
            <div>
              <input type="submit" value="Crear">
            </div>
        </form>
    </div>
    <br>

    <div >
    <?php
    // echo '<a href="panel-user.php"><button class="formulario1">Atrás</button></a>';
    if (isset($_SESSION['logged'])){
        if ($_SESSION['usertype'] == 'admin'){
            echo '<a href="pagina-principal.php"><button class="formulario1">Atrás</button></a>';
        }else{
            echo '<a href="panel-user.php"><button class="formulario1">Atrás</button></a>';

        }
    }
    ?>
    </div>

</body>
<script>
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
            // con el que estamos consiguiendo la variable, la q va a ser igual a los datos que se consiguen 
        
    }
    // showUser('@', 'tabla-getuser.php')
</script>

</html>

