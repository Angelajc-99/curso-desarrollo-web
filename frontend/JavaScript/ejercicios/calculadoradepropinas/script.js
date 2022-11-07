

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

//function test() {
// function calcularPropina() {
    // Tomamos los datos que ha introducido el usuario
//     var cuenta = document.getElementById('cuentaTotal').value;
//     var servicio = document.getElementById('calidadServ').value;
//     var personas = document.getElementById('numPersonas').value;
   // Calculo la propina que debe pagar cada uno y lo guardo en una variable
//     var resultado = cuenta * servicio / personas;
   // Accedo al elemento donde quiero imprimir el resultado
//     var parrafo = document.getElementById('pResultado');
   // Lo muestro porque está oculto por defecto
//     parrafo.style.display = 'block';
//     parrafo.style.visibility = 'visible';
  // Y lo relleno con el texto que quiero mostrar
//     parrafo.innerHTML = resultado + "€ por persona";

    // Imprimimos los datos en la consola
//     console.log(cuenta + " €"); 


// Para obtener la propina hay que multiplicar el gasto `pr ña cañidad de servicio para obtener el correspondiente porcentaje y, por lo tanto, la propina total
// seguidamente dividir la propina entre el número de comensales para obtener lo que debe pagar cada uno