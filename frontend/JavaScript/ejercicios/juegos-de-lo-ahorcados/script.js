// al lado del const siempre va un arride por ejemplo abecedario
// const abecedario = [
//     "A",
//     "B",
//     "C",
//     "D",
//     "E",
//     "F",
//     "G",
//     "H",
//     "I",
//     "J",
//     "K",
//     "L",
//     "M",
//     "N",
//     "Ñ",
//     "O",
//     "P",
//     "Q",
//     "R",
//     "S",
//     "T",
//     "U",
//     "V",
//     "W",
//     "X",
//     "Y",
//     "Z",

// ]

// creamos el array con las distintas palabras del juego
const palabras = [
    "perro",
    "gato",
    "conejo",
    "gato",
    "oso",
    "pollo",
    "langostino",
    "murcielago",
]

const pollo = [
    "P",
    "O",
    "L",
    "L",
    "O",
]

// Imprimir la palabra en pantalla
// Guardo el contenedor donde la vamos a mostrar
let displayPalabra = document.getElementById('palabra');

// Elegimos una palabra del array
// Escoger un número al azar
let random = Math.random();  //0 - 1 incluyendo decimales
random = Math.random() * palabras.length;    //0 - 6 incluyendo decimales
// Redondeamos  el valor de random para eliminar los decimales, creando así un número válido para el indice del array
random = Math.floor(Math.random() * palabras.length);   // 0 - 5 sin decimales

// cada vez que se carga la página, se selecciona un ítem del array con el índice aleatorio
let palabra = palabras[random];

// Imprimimos la palabra
// Contamos la longitud de la palabra (número de letras que tiene)
let longitud = palabra.length;
// console.log(longitud);

// Declaro una variable para imprimir los guiones
let texto = "";
// control f2 para escribir en las mismas palabras
for (let indice = 0; indice < longitud; indice++) {
    
    // Guardo un guióm en la variable por cada letra que tiene nuestra palabra
    texto += indice + " _ ";
    // console.log(texto)
    }




// console.log(texto);

// Se imprime los guiones, ocultando la palabra del juego
displayPalabra.innerHTML = palabra;


// BOTONES
// Vamos asignar el evento click a cada botón desde js
// Asínos ahorramos tener que escribir en cada botó en HTML un "onclick"

// con clases
// seleccionamos todos los elemntos que tengan una clase
// Al guardar elemntopor clase, me los devuelve en un ARRAY
// const botones = document.getElementsByClassName('btn');

// Seleccionamos los hijos del div "tablero" los hijos son todos los botones que contiene el div
const botones = document.getElementById('tablero').childNodes;

// Vamos añadir un Event Listener a cada botón
// Event Listener es asignarle un tipo de eventoal elemento HTML que ejecutará un bloque del código cuando el elemnto se cumpla 
// Por ejemplo, al hacer click sobre un botón o cuando pasemos el cursor por encima (hover)

for (let i = 0; i < botones.length; i++) {
    botones[i].addEventListener('click', test)
}

function test() {
    console.log('Has pulsado un botón')

    // Tomamos el contexto del botón con this
    // Guardamos la letra que contiene el botón en una variable
    let letra = this.innerHTML;
    // Transfromo la letra en minúscula
    letra = letra.toLowerCase();

    let texto = "";

    // Recorremos la palbra carácter a caracter, en busca de concidencias con la letra pulsada
    for (let i = 0; i < palabra.length; i++) {
        console.log(palabra[i]);

        // Comprobamos si la letra de la palabra coincide con la letra del btn
        if (palabra[i] == letra) {
            console.log("Hay una coincidencia!");
            texto += letra;
        } else{
            // Si entra en el else, es que no han habido coincidencias
            texto += "_";
        }
        
    }

    displayPalabra.innerHTML = texto;

    console.log(letra);
}
