// forma distinta para no hacer muchos button
// const abecedario = [
//     "A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","U","V","W","X","Y","Z"
// ];

//    let contenedorBotones = document.getElementById('botones');

//    for (let i = 0; i < abecedario.length; i++) {
//     console.log (abecedario[i] ); 
//     contenedorBotones.innerHTML += `<button>${abecedario[i]}</button>`
// }

// Creamos un array con las distintas palabras del juego
const palabras = [
    "perro",
    "conejo",
    "gato",
    "oso",
    "pollo",
    "langostino",
    "murcielago",
    "playa",
    "atardecer",
    "luna",
]

const pollo = [
    "p", 
    "o",
    "l",
    "l",
    "o"
]

// Imprimir la palabra en pantalla
// Guardo el contenedor donde la vamos a mostrar
let displayPalabra = document.getElementById('palabra');

// Elegimos una palabra del array
// Escojer un número al azar
let random = Math.random(); // 0 - 1 incluyendo decimales 
random = Math.random() * palabras.length; // 0 - 6 incluyendo decimales
// redondeamos el valor de random para eliminar los decimales, creando así un número válido para el índice del array
random = Math.floor(Math.random() * palabras.length); // 0 - 5 sin decimales

// Cada vez que se carga la página, se selecciona un ítem del array con el índice aleatorio
let palabra = palabras[random];

// Imprimimos la palabra
// Contamos la longitud de la palabra (número de letras que tiene)
let longitud = palabra.length;
// console.log(longitud);

// Declaro una variable para imprimir los guiones
let texto = "";
for (let indice = 0; indice < longitud; indice++) {

    // Guardo un guión en la variable por cada letra que tiene nuestra palabra
    texto += "_";
}

// Se imprimen los guiones, ocultando la palabra de juego
displayPalabra.innerHTML = texto;



// BOTONES
// Vamos a asignar el evento click a cada botón desde js 
// Así nos ahorramos tener que escribir en cada botón en HTML un "onclick"

// con clases
// Seleccionamos todos los elementos que tengan una clase
// Al guardar elementos por clase, me los devuelve en un ARRAY  
// const botones = document.getElementsByClassName('btn');

// Seleccionamos los HIJOS del div "tablero"
// Los hijos son todos los botones que contiene el div
const botones = document.getElementById('tablero').childNodes;

// Vamos a añadir en Event Listener a cada botón
// Event Listener es asignarle un tipo de evento al elemento HTML que ejecutará un bloqque de código cuando el evento se cumpla
// Por ejemplo, al hacer click sobre un botón o cuando pasemos el cursor por encima (hover)

for (let i = 0; i < botones.length; i++) {
    botones[i].addEventListener("click", juego)
}

// Comprobamos si la letra de la palabra coincide con la letra del btn
// Declaramos un array en el que iremos guardando los aciertos
let aciertos =[];

// Contador aciertos
let contador = 0;

// Contador de vidas, si se agotan pierde el usuario
let vidas = 5;

// digamos que tenemos la palabra "perro" y pulsamos la o
//  Queremos guardar aquella letras que hemos acertado
let ejemplo = [
    "_",   //p
    "_",   //e
    "_",   //r
    "_",   //r
    "o",
]
// Entonces seguidamente mostramos  al usuario el cambio en pantalla podemos imprimir el contenido del array
// "_ _ _ _ o"

// Si luego pulsamos la "r" el resultado en pantalla sería "_ _ r r o"
ejemplo = [
    "_",   //p
    "_",   //e
    "_",   
    "_",   
    "o",
]

function juego() {
    console.log("Has pulsado un botón");

    // Tomamos el contexto del botón con this
    // Guardamos la letra que contiene el botón en una variable
    let letra = this.innerHTML;
    // Transformo la letra en minúscula
    letra = letra.toLowerCase();

    let exitos = 0;

    // No da error por que está en otro bloque diferente
    let texto = "";

    // Recorremos la palabra, caracter a caracter, en busca de coincidencias con la letra pulsada
    for (let i = 0; i < palabra.length; i++) {
        console.log(palabra[i]);

        // Comprobamos si la letra de la palabra coincide con la letra del btn
        if (palabra[i] == letra) {
            console.log("Hay una coincidencia!");
            // Guardamos la letra acertada en el array  de aciertos en la misma posición
            aciertos[i] = letra;
            texto += letra;

            // Cada vez que hay un acierto , el contador aumenta
            contador++;
            exitos++;
        } else if (!aciertos[i]) {
            // Si entra en el else, es que no han habido coincidencias
            // La condición if() sólo se cumple cuando la posicion i del array no tiene ningún valor 
            aciertos[i]  = "_";
        }
        console.log(texto);
        console.log(aciertos);
    }

    // Si no hay éxitos al pulsar el botón me eresto una vida
    if (exitos == 0) {
        vidas++;
        this.style.backgroundColor = "red";

    }

    // Creamos el string para imprimir en pantalla y le quitamos las comas del array
    // Sin el join la palabra "conejo" se vería "c,o,n,e,j,o"
    texto = aciertos.join("");
    displayPalabra.innerHTML = texto;

    console.log(letra);

    // Al final comprobamos si hemos ganado
    ganar();

    }

    // Creamos una función donde comprobemos si hemos ganado la partida y en ese caso, mostrar un mensaje 
    function ganar() {
        // Comprobar que el nu´mero de acierto   es igual a la longitud de la palabra
        if (contador == palabra.length) {
            // mensaje de has ganado
            setTimeout(function() {
                // Le ponemos un retardo para que se puedan visualizar el resultado antes de mostrar el mensa
                window.alert('has ganado');
                location.reload();
            }, 1000);
        }



        // Comprobar que ya no hay guiones en el array aciertos
        // Contador de los guiones
        let guiones =0;

        // Recorremos el array de aciertos en busca de guiones
        for (let i = 0; i < aciertos.length; i++) {
            if (aciertos[i] == "_") {
                guiones++;
            //    console.log("aqui",aciertos[i])
            
           }
            
        }
        // Si hemos contado los guiones y no hay, es porque la palabra está completa y, por tanto hemos ganado
        if (guiones == 0) {
            setTimeout(function () {
            // window.alert('has ganado');
            // location.reload();
        }, 1000)
    }
}
