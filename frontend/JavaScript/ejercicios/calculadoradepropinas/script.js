

function test() {
    // Tomamos los datos que introducido el usuario
    var cuenta = document.getElementById('cuentaTotal').value;
    var calidadServ = document.getElementById('calidadServ').value;
    var numberPersonas = document.getElementById('numberPersonas').value;

    // Imprimimos los datos en la consola
    console.log(cuenta + '€');
    console.log(calidadServ );
    console.log(numberPersonas) ;

    var resultCalidadServer = calidadServ / 100
    var propinaTotal = resultCalidadServer * cuenta
    var resultado = propinaTotal / numberPersonas

    // Imprimir resultado en pantalla
    var parrafo = document.getElementById('pResultado');
    parrafo.innerHTML = resultado + " € por persona";

    console.log(resultado)
    
}

// Para obtener la propina hay que multiplicar el gasto `pr ña cañidad de servicio para obtener el correspondiente porcentaje y, por lo tanto, la propina total
// seguidamente dividir la propina entre el número de comensales para obtener lo que debe pagar cada uno