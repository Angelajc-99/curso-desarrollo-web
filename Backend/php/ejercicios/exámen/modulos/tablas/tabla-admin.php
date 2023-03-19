<?php
if ($_SESSION['logged'] == true) {
    require("conn.php");

    $sql = "SELECT * FROM empleados WHERE tipo_usuario NOT IN ('admin')";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<form action='' method='post'>";
        echo "<table><tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Tipo de Usuario</th>";
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {

            $id = $row['id'];
            $name = $row['name'];
            $user_type = $row['tipo_usuario'];

            if ($user_type == 'usuario') {
                $user_type2 = 'colaborador';
            } else $user_type2 = 'usuario';



            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$name</td>";
            echo "<td>
            <select name='tipo'>
                <option value='$user_type'>$user_type</option>
                <option value='$user_type2'>$user_type2</option>
            </select>
            </td>";
            echo "<td></td>";
            echo "</tr>";
        }
    }
} else header('Location: ../index.php');