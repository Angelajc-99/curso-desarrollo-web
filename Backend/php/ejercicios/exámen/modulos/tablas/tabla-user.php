<?php
if ($_SESSION['logged'] == true) {
    require("conn.php");

    $sql = "SELECT * FROM usuarios WHERE id = $id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {

            $name = $row['name'];
            $dni = $row['dni'];
            $dato_dni = $row['dato_dni'];
            $dato_bio = $row['dato_bio'];
            $dato_mac = $row['dato_mac'];
            $estado = $row['estado'];

            echo "<form action='' method='post'>";
            echo "<table><tr>";
            echo "<th>Nombre</th>";
            echo "<th>nº DNI</th>";
            echo "<th>Documento de identidad</th>";
            echo "<th>Prueba Biométrica</th>";
            echo "<th>PC MAC</th>";
            echo "<th>Estado</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$dni</td>";
            echo "<td><input value='$dato_dni' name='dato_dni'></td>";
            echo "<td><input value='$dato_bio' name='dato_bio'></td>";
            echo "<td><input value='$dato_mac' name='dato_mac'></td>";
            echo "<td>$estado</td>";
            echo "</tr>";

        }
    }

} else header('Location: ../index.php');
