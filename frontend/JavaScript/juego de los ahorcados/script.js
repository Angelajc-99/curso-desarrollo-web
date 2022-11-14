const abecedario = [
    "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "U", "V", "W", "X", "Y", "Z"
];
let contenedorBotones = document.getElementById('contenedorBtn');
for (let i = 0; i < abecedario.length; i++) {
    console.log('abecedario'[i]);
    contenedorBotones.innerHTML += `<button>${abecedario[i]}</button>`

}
const palabras = [
    "atardecer",
    "iguana",
    "lechuza",
    "amanecer",
    "árbol",
    "musgo",
]
const atardecer = [
    "a",
    "t",
    "a",
    "r",
    "d",
    "e",
    "c",
    "e",
    "r",
]


let displayPalabra = document.getElementById('palabra');

let random = Math.random();
random = Math.random() * palabras.length;
random = Math.floor(Math.random() * palabras.length);

let palabra = palabras[random];

let longitud = palabra.length;

let texto = "";

for (let indice = 0; indice < longitud; indice++) {

    texto += " _ ";

}

displayPalabra.innerHTML = texto;

const botones = document.getElementById('contenedorBtn').childNodes;

for (let i = 0; i < botones.length; i++) {
    botones[i].addEventListener('click', juego)
}



let aciertos = [];

let contador = 0;

let vidas = 5;

let ejemplo = [
    "_",   //a
    "_",   //t
    "_",   //a
    "_",   //r
    "_",   //d
    "_",   //e
    "_",   //c
    "_",   //e
    "r",
]

function juego() {
    console.log("Has pulsado el botón")
    let letra = this.innerHTML;

    // tolowerCase: es para poner las letras mayusculas en minúsculas
    letra = letra.toLowerCase();

    console.log(letra)

    let exitos = 0;

    let texto = "";

    for (let i = 0; i < palabra.length; i++) {
        console.log(palabra[i]);

        if (palabra[i] == letra) {
            console.log("Hay una coincidencia!");
            aciertos[i] = letra;
            texto += letra;
        } else if (!aciertos[i]) {
            aciertos[i] = "_";
        }
        console.log(texto);
        console.log(aciertos);

    }
    if (exitos == 0) {
        vidas++;
        this.style.backgroundColor = "pink";
        this.style.backgroundColor = "green";
    }

    texto = aciertos.join("");

    displayPalabra.innerHTML = texto;

    console.log(letra);

}