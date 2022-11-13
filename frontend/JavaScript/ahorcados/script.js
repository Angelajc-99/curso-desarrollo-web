const abecedario = [
    "A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","U","V","W","X","Y","Z"
];
 
   let contenedorBotones = document.getElementById('botones');
   
   for (let i = 0; i < abecedario.length; i++) {
    console.log (abecedario[i] ); 
    contenedorBotones.innerHTML += `<button>${abecedario[i]}</button>`
}

const palabras = [
    "lagarto",
    "pájaro",
    "árbol",
    "iguana",
    "conejo",
    "paisaje",     
    "léon",
    "atardecer",
]

const iguana = [
    "i",
    "g",
    "u",
    "a",
    "n",
    "a",
]

let diplayPalabra =document.getElementById('palabra');

let random = Math.random();
random = Math.random() * palabras.length;

// math.floor sirve para las palabras flotantes
random = Math.floor(Math.random() * palabra.length);

let palabra = palabras[random];

let longitud = palabra.length;

let texto = "";

for (let i = 0; i < array.length; i++) {
    
    
}