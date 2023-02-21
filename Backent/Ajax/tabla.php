<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Ajax</title>
    <style>
        body {
            background: linear-gradient(to right, transparent, mistyrose);
    /* url("critters.png"); */
    /* viewport heigth/width (se ajusta al tamaño de la ventana o dispositivo) */
    height: 100vh;
    width: 100vw;
    margin: 0;

    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
    </style>
</head>
<body>
    <div class="container">
        <form action="">
            <!-- <select name="" id=""></select> -->
            <input type="text" name="user" onkeyup="showUser(this.value)">
        </form>

        <div id="display">Los datos de las personas se mostrarán aquí...</div>
    </div>
    
</body>
<script>
    function showUser(text) {
        display = document.getElementById('display');

        // Si el input está vacio , el div tb se vacía 
        if (text == '') {
                display.innerHTML = '';
                return;
            
        } else {
                let ajax = new XMLHttpRequest();
                ajax.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        display.innerHTML = this.responseText;
                    }
                };
                ajax.open('GET', 'tabla-getuser.php?q=' + text, true);
                ajax.send();
            }
        
    }
</script>
</html>