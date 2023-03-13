<?php
    session_start();
    include 'conn.php';
    $status = $_POST['status'];
    $Id = $_POST['Id'];

    if (isset($_POST['updatecolab'])) {
        $sql = 'UPDATE usuarios SET status = ? WHERE Id = ?';

        $status = $conn->prepare($sql);
        $status->bind_param('si',$status, $Id); 
        $status->execute(); 
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/general.css">

</head>
<body> 
    <div> 
        <p>Datos actualizados
            <?php
                echo '<a href="colab.php"><button>Regresar</button></a>'
            ?>
        </p>
    </div>

</body>
</html>