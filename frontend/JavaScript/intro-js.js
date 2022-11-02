<script>
    function colorChange() {
        // Una función es un bloque de código que se puede reutilizar

        // Para cambiar el párrafo de color lo primero es identificar y apuntar al párrafo
        document.getElementById('pColor').style.color = '#aabbcc';
    document.getElementById('pColor').style.backgroundColor = 'rgb(60,60,60)';

    }

    function showDate() {

        document.getElementById('pDate').innerHTML = new Date();
        // Date() es un objeto predefinido de JS, contiene todos los datos referentes a la fecha actual (día de la semana, fecha, hora, año..)
        // Cada vez que pulsamos el botón la hora se actualiza. Esto es gracias a la palabra new, que genera un nuevo objeto fecha cada vez que ejecuta.
    }

    function hideShow() {

        var condition = document.getElementById('pHide').style.visibility;
    // condition es una variable y guarda un dato. En este caso guarda el valor de la visibilidad del párrafo. Puede ser 'hidden' o 'visible'
    // El símbolo = (igual) significa que le estamos asignando un valor

    if (condition == 'hidden') {
        // si la condición se cumple (el elemento es invisible) se ejecuta el código contenido en las llaves
        document.getElementById('pHide').style.visibility = 'visible';
        } else {
        // si la condicióm de arriba no se cumple (es decir, que el objeto es visble) el if es ignorado y en cambio, se ejecuta el else
        document.getElementById('pHide').style.visibility = 'hidden';
        }
     }



    // Interruptor de la luz

    // declaramos las variables y guardamos los datos
    // esto ocurrirá cuando se cargue el documento en el navegador
    var bombilla = document.getElementById('bulb');
    var estado = "apagada";
    // estado me sirve para hacer un seguimiento del estado de la bombilla
    var encendida = "../recursos/bombilla-encendida.gif";
    var apagada = "../recursos/bombilla-apagada.gif";
    // estas dos variables guardan una cadena de texto para ahorrar tiempo

    function lightSwitch() {
        if (estado == "apagada") {
        bombilla.src = encendida;
    estado = "encendida";
        } else {
        bombilla.src = apagada;
    estado = "apagada";
        }
    }

    // function encender() {
    //     document.getElementById('bulbOn').style.display = "block";
    //     document.getElementById('bulbOff').style.display = "none";
    // }
    // function apagar() {
    //     document.getElementById('bulbOn').style.display = "none";
    //     document.getElementById('bulbOff').style.display = "block";
    // }


</script>