// const y let
const precio1 = 5;        // Esta variable nunca va a cambiar
const precio2 = 6;
let total = precio1 +  precio2; //res = 11
console.log(total);
// Esta variable puede cambiar
total = precio1 * 2 + precio2;  //res = 16
console.log(total);

// si tratamos de asignar nuevos valores a las variables constantes, nos dará un error y código se detendrá
// precio1 = 10;
// console.log('hola');


// números y strings
const pi = 3.14;    // sabemos que esta variable contendrá un valor constante
let nombre = 'Alan';
let edad = 19;

console.log(edad + pi); //suma de dos números res = 37.14
edad = '19'; //ahora estoy escribiendo el número como un string
console.log(edad + pi); //suma de número y string res = 343.14 


// valor undefined
let coche;  // Hemos declarado la variable pero no le hemos asignado ningún valor

console.log(coche);