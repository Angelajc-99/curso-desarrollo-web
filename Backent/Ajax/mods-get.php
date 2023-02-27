<!DOCTYPE html>
<html lang="en">

<?php

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Ajax</title>
    <?php
    require 'tabla-style.php';
    ?>
</head>

<body>
    <div class="container">
        <form action="">
        
        
        <select name="" id="list" onchange="buildTable(this.value)"></select>
        </form>

        <div id="display">Los datos de la persona se mostrarán aquí...</div>
    </div>


</body>
<script>
    function buildTable(id) {
        let display = document.getElementById('display');


        let ajax = new XMLHttpRequest();
            ajax.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    display.innerHTML = this.responseText;
                }
            };
            ajax.open('GET', 'mods-get.php?id=' + id, true);
            ajax.send();
            console.log("tabla");
    }

    function buildSelector() {
        let display = document.getElementById('list');

        let ajax = new XMLHttpRequest();
            ajax.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    display.innerHTML = this.responseText;
                }
            };
            ajax.open('GET', 'mods-get.php', true);
            ajax.send();
            console.log("selector");
    }

    // Si llamamos a la funcion. La tabla se muestra al cargar la página
    buildTable(1);
    buildSelector();
</script>

</html>