<?php
session_start();
include 'conn.php';

if (isset($_SESSION['logged']) && $_SESSION['usertype'] == 'admin') {
    $sql = 'SELECT * FROM user';
    
} elseif ($_SESSION['usertype'] == 'user') {
    $userid = $_SESSION['id'];
    // cuando se utiliza una variable siempre se pone con comillas dobles ""
    $sql = "SELECT * FROM user WHERE id = '$userid'";
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
    <style>
        h1 {
            text-align: center;
        }
        .tabla {
            justify-content: center;
            display: flex;
        }
        table {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 5px 2px;
            height: 25%;
            width: 25%;
        }
        th {
            background-color: #aabbcc;
            border: 2px solid black;
            padding: 2px 5px;
        }
        td {
            border: 1px solid black;
            padding: 2px 5px;
            
        }
    </style>
</head>

<body>

    <h1>Tabla de usuarios en la BD</h1>
    <div class="tabla">
    <table>
        <tr>
            <th>usuario</th>
            <th>email</th>
        </tr>
        <?php
        
        // if ($result->num_rows > 0) {
        //     while ($row = $result->fetch_assoc()) {
        //         echo"<tr> 
        //                  <td>" . $row['usuario'] . "</td>" .
        //                  "<td>" . $row['correo'] . "</td> 
        //             </tr>";

        //     }
        // }

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php echo $row['usuario'] ?></td>
                    <td> <?php echo $row['correo'] ?></td>
                </tr>
        <?php }
        } 
        header("Location: form_login.php?fallo=true");
        ?>

    </table>
    </div>

</body>

</html>