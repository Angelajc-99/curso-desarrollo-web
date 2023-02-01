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
       while ($row = $result->fetch_assoc()) {
         $_SESSION['id'] = $row['id'];
         $_SESSION['usertype'] = $row['usertype'];
       }

    //    redirigir 
       echo '<a href="pagina-principal.php">
                    <button>Volver a página 
                     principal</button>
                 </a>';
     $conn->close();

   } elseif ($result->num_rows === 0){
      $_SESSION["fallo"] = true;
      header("Location: form_login.php?fallo=true");

      // header('Location: form_login.php?fallo=true');
      
      exit();
      
}
}

?>