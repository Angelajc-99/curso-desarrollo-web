const display = document.getElementById('display');
const displayLetras = document.getElementById('display');
let texto = "";
let arrayNumeros = [];

// Queremos imprimir todos los números del 1 al 20
for (let i = 0; i < 20; i = i +2) {
   texto += i + " ";
   
}


display.innerHTML = texto;
console.log(arrayNumeros)

const letras = [

   "a",
   "e",
   "i",
   "o",
   "u"

]

texto = "";

for (let i = 0; i < letras.length; i++) {
   texto += letras[i] + " ";
   
}