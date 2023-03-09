<?php
include 'conn.php';
if (isset($_SESSION['logged']) && $_SESSION['usertype'] == 'admin') {


    echo "<form action='actualizacion-de-datos.php' method='post'>
                    <input class='data' type='text' readonly onmousedown='return false;' name='user' value='$user'>
                    <input class='data' type='text' name='password' value='$password'>
                    <input class='data' type='text' readonly name='mac_orden' maxlength='12' value='$mac_orden'>
                    <input class='data' type='text' readonly name='bio' value='$bio'>
                    <input class='data' type='text' readonly name='foto' value='$foto'>
                    <select name='usertype'>
                        <option value='$user1' selected>$user1</option>
                        <option " . $disabled . " value='$user2'>$user2</option>
                    </select>
                    <input type='hidden' name='modiuser' value='$user'>
                    <button class='update' type='submit'><span>Actualizar</span></button>
                </form><br>";

    
}elseif (isset($_SESSION['logged']) && $_SESSION['usertype'] == 'colab') {
    echo "<form action='actualizacion-de-datos.php' method='post'>
                    <input class='db' type='text' readonly onmousedown='return false;' name='user' value='$user'>
                    <input class='db' type='text' name='contrasena' value='$contrasena'>
                    <input class='db' type='text' readonly name='mac_ordenador' maxlength='12' value='$mac_ordenador'>
                    <input class='db' type='text' readonly name='bio' value='$bio'>
                    <input class='db' type='text' readonly name='foto' value='$foto'>
                    // <select name='usertype' disabled>
                    //     <option value='$user1' selected>$user1</option>
                    //     <option " . $disabled . " value='$user2'>$user2</option>
                    // </select>
                    <input type='hidden' name='modiuser' value='$user'>
                    <button class='update' type='submit'><span>Actualizar</span></button>
                    <input type='radio' name='revisar' id='' value='1'>correct
                    <input type='radio' name='revisar' id='' value='2'>incorrect
                    <input type='radio' name='revisar' id='' value='3'>empty
                </form><br>";
}elseif (isset($_SESSION['logged']) && $_SESSION['usertype'] == 'user') {
    
    echo "<form action='actualizacion-de-datos.php' method='post'>
                    <input class='db' type='text' readonly onmousedown='return false;' name='user' value='$user'>
                    <input class='db' type='text' name='contrasena' value='$contrasena'>
                    <input class='db' type='text' name='mac' maxlength='12' value='$mac'>
                    <input class='db' type='text' name='bio' value='$bio'>
                    <input class='db' type='text' name='foto' value='$foto'>
                    <select name='usertype'>
                        <option value='$user1' selected>$user1</option>
                        <option " . $disabled . " value='$user2'>$user2</option>
                    </select>
                    <input type='hidden' name='user' value='$user'>
                    <button class='update' type='submit'><span>Actualizar</span></button>
                </form><br>";
}

?>
