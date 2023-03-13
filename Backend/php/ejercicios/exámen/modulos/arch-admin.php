<?php
    session_start();
    include 'conn.php';

    $user_type = $_POST['user_type'];
    $id= $_POST['id'];

    if (isset($_POST['update'])) {
        $sql = "UPDATE usuarios SET user_type = '$user_type' WHERE Id = '$Id'";
        echo "
        <div class='cont'>
            <p>Usuario eliminado
                <a href='admin.php'>
                    <button>Regresar</button>
                </a>
            </p>
        </div>";
    }

    if (isset($_POST['delete'])) {
        $sql = "DELETE FROM usuarios WHERE Id = '$Id'";

        echo '<div class="container">
        <p>Usuario eliminado<a href="admin.php"> 
        <button>Regresar</button></a></p>
        </div>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/arch-admin.css">

</head>
<body>
    
</body>
</html>