<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    include 'conn.php';

    // Recibimos las variables del form
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['password'];


    // Hacemos la query para buscar si existe un usuario con estos datos
    $sql = "SELECT * FROM user WHERE usuario = '$usuario' AND correo = '$correo' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       echo '<p>Has iniciado sesión con 
              éxito</p>';
       echo "<p>Bienvenido $usuario.";

       $_SESSION['logged'] = true; 
    //    redirigir 
       echo '<a href="pag-principal.php">
                    <button>Volver a página 
                     principal</button>
                 </a>';
     $conn->close();
   }
   //  else ($result->num_rows === 0){

    } elseif ($result->num_rows === 0){
      $_SESSION["fallo"] = true;
      header("Location: form_login.php");

      // header('Location: form_login.php?fallo=true');
      
      exit();
      
}

?>