<?php
echo"1. <h3> Crear un bucle que imprima los números del 1 al 10</h3>";
// $num=10;
for ($i=0; $i < 0; $i++) {
    for ($i=0; $i <= 10; $i++) ;
      echo $num  ;
}
// numero=0

// while numero<100:
//     numero= numero+1
//     if numero%2:
//         print(numero)


// 1.1 
//  1-2-3-4-5-6-7-8-9-10


echo "<h3> 2. Crear un bucle que sume todos los números del 0 al 30 </h3>";


echo "<h3> 3. Crear un script que imprima el siguiente patrón: </h3>";
// *
// * *
// * * *
// * * * *
// * * * * *


echo "<h3> 4. Crear un script que imprima el siguiente patrón:</h3>";

// *
// * *
// * * *
// * * * *
// * * * * *
// * * * *
// * * *
// * *
// *
for ($i=1; $i <= $num_astericos; $i++){ 
    for ($j=1; $j < $i ; $j++) echo "* ";
        echo "<br>";
}
for ($i= $num_astericos; $i > 0; $i--) { 
    for ($j =1; $j < $i; $j++) echo "* ";
    echo "<br>";
}


echo "<h3> 5. Crear un bucle que calcule el factorial de un número dado. El factorial de un número 
// es el producto de todos los naturales hasta llegar a dicho número
// 4! = 4*3*2*1 = 24 </h3>";
$producto = 1;
$factorial = 4;
for ($i = $factorial; $i > 0; $i--) {
    $producto *= $i;
}
echo $producto;

echo "<h3> 6. Crear un programa que muestre todas las potenciales combinaciones de dos dígitos decimales,
impresos separados por coma </h3>";
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        echo $i . $j;
        // if ($i != 9 || $j ! = 9) echo ", ";
    }
}


// 7. Escribir un programa que cuente el número de "r" de un string dado


// 8. Escribir un programa que cree automáticamente una tabla con las tablas de multiplicar con 
// el alcance que nosotros le indiquemos
// Ejemplo: Alcance 6. Primera fila de la tabla 
// | 1 * 1 = 1 | 1 * 2 = 2 | 1 * 3 = 3... | 1 * 6 = 6 |
// ...
// | 6 * 1 = 6 | 6 * 2 = 12 | 6 * 3 = 18... | 6 * 6 = 36 |


// 9. Crear un programa de PHP que imprima un tablero de ajedrez
// Pista: Usar una tabla con 270px de ancho y 30px como medida para las celdas

