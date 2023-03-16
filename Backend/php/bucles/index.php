<?php
echo "<h3>1.Crear un bucle que imprima los números del 1 al 10</h3>";
// $num=10;
for ($i=1; $i <= 10; $i++) {
      echo $i  ;
}
echo '<br>';
// 1.1 
//  1-2-3-4-5-6-7-8-9-10
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i != 10) echo "-";
}


echo "<h3>2. Crear un bucle que sume todos los números del 0 al 30</h3>";
$suma = 0;
for ($i = 0; $i <= 30; $i++) {
    $suma += $i;
}
echo $suma;

echo "<h3>3. Crear un script que imprima el siguiente patrón:</h3>";
// *
// * *
// * * *
// * * * *
// * * * * *
$num_astericos = 5;
for ($i = 1; $i <= $num_astericos; $i++) {
    for ($j = 0; $j < $i; $j++) echo "* ";
    echo "<br>";
}
echo "<hr>";
$tamaño = 5;
for ($i = 1; $i <= $tamaño; $i++) {
    echo str_repeat("* ", $i) . "<br>";
}
echo "<hr>";
// 3.1
// * * * * *
// * * * *
// * * *
// * *
// *
for ($i = $num_astericos; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) echo "* ";
    echo "<br>";
}

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
        if ($i != 9 || $j != 9) echo ", ";
    }
}


echo "<h3>7. Escribir un programa que cuente el número de 'r' de un string dado</h3>";
$text = "rarito";
$contador = 0;
for ($i = 0; $i < strlen($text); $i++) {
    // if (substr($text, $i, 1) == 'r') $contador++;
    if ($text[$i] == 'r') $contador++;
}
echo "El string '$text' contiene $contador r";




echo "<h3>8. Escribir un programa que cree automáticamente una tabla con las tablas de multiplicar con 
// el alcance que nosotros le indiquemos
// Ejemplo: Alcance 6. Primera celda de la tabla 
// | 1 * 1 = 1 | 1 * 2 = 2 | 1 * 3 = 3... | 1 * 6 = 6 |
// ...
// | 6 * 1 = 6 | 6 * 2 = 12 | 6 * 3 = 18... | 6 * 6 = 36 |</h3>";
echo "<style>
body {
    font-family: Arial, Helvetica, sans-serif;
}
table {
    border: 3px solid black;
    border-collapse: collapse;
}
th {
    background-color: #aabbcc;
    border: 2px solid black;
    padding: 2px 5px;
}
td {
    border: 1px solid black;
    padding: 2px 5px;
}
.tablero {
    width: 270px;
}
.tablero td {
    height: 30px;
    width: 30px;
}
.negro{
    background-color: black;
}
</style>";

$alcance = 9;

echo "<table>";
for ($fila = 1; $fila <= $alcance; $fila++) {

    echo "<tr>";
    for ($celda = 1; $celda <= $alcance; $celda++) {
        echo "<td>";
        echo "$fila * $celda = " . $fila * $celda;
        echo "</td>";
    }
    echo "</tr>";
}

echo "</tr>";
echo "</table>";


echo "<h3>9. Crear un programa de PHP que imprima un tablero de ajedrezz
Pista: Usar una tabla con 270px de ancho y 30px como medida para las celdas</h3>";

$alcance = 8;
$negra = "<td class='negro'></td>";
$blanca = "<td></td>";

echo "<table class= 'tablero'>";
for ($fila = 1; $fila <= $alcance; $fila++) { 

    echo "<tr>";
    for ($celda = 1; $celda <= $alcance / 2; $celda++) { 
        if ($fila % 2 == 0) {
            echo $blanca;
            echo $negra;
        } else {
            echo $negra;
            echo $blanca;
        }
    }
    echo "</tr>";
}

echo "</tr>";
echo "</table>";



// $negro = "<td class = 'negro'>";
// echo "<table class='tablero'>";
// for ($a = 1; $a <= 4; $a++) {
//     echo "<tr>";
//     for ($i = 1; $i <= 4; $i++) {
//         echo "<td></td>";
//         echo $negro;        
//     }
//     echo "</tr>";
//     echo "<tr>";
//     for ($j=1; $j < 4; $j++) { 
//         echo $negro;
//         echo "<td></td>";
//     }
//     echo "</tr>";
// }

// echo "</table>";

echo "<h3> 11. Escribir un programa de PHP que itere los números del 1 al 50. Al imprimirlos, los múltiplos de 3 se sustituirán por 'Fizz', los múltiplos de 5 por 'Buzz' y los que sean múltiplos de 3 y 5 por FizzBuzz </h3>";
 
for ($i = 1; $i <= 50; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    } elseif ($i % 3 == 0) {
        echo "Fizz";
    } elseif ($i % 5 == 0) {
        echo "Buzz";
    } else echo $i;

    echo "<br>";
}

echo "<hr>";

// 11.3

for ($i=1; $i <= 50; $i++) { 
    switch ($i) {
        case $i % 3 == 0 && $i % 5 == 0:
            echo "FizzBuzz";
            break;
        case $i % 3 == 0:
            echo "Fizz";
            break;      
        case $i % 5 == 0:
            echo "Buzz";
            break;  
        default:
            echo $i;
            break;
    }
    echo "<br>";
}

echo "<hr>";

echo "<h3> 12. Escribir un programa capaz de imprimir un triangulo de Floyd con tantas filas como le indiquemos</h3>";

$alcance = 12;
$contador = 1;
$espacio = "&nbsp;&nbsp;";

for ($fila=1; $fila <= $alcance; $fila++) { 

    for ($col=1; $col <= $fila; $col++) { 
        if ($contador < 10) echo 0;
        echo $contador;
        echo $espacio;
        $contador++;
    }
    echo "<br>";
}

echo "<h3>13. Escribir un bucle de PHP que imprima una A</h3>";

for ($i=1; $i <= 8; $i++) { 
    if ($i <= 1) echo "&nbsp;&nbsp;&nbsp;* * *&nbsp;";
    if ($i == 4) echo "* * * * *";
    if ($i != 1 && $i !=4) echo "*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*";
    echo "<br>";
}

echo "<hr>";
//   * * *
// *       *
// *       *
// * * * * *
// *       *
// *       *
// *       *
// *       *

$espacios = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<pre>";
for ($i=1; $i <= 8; $i++) { 
    
    if ($i != 1) {
        echo "* ";
    } else echo "&nbsp;&nbsp;";

    if ($i == 1 || $i == 4) {
        echo "* * *";
    } else echo $espacios;

    if ($i != 1) echo " *";
    echo "<br>";
}
echo "</pre>";

echo "<h3>14. Escribir un bucle de PHP que sea capaz de imprimir este patrón</h3>";
// 1 5 9
// 2 6 10
// 3 7 11
// 4 8 12


$n = 5;

for ($i = 1; $i <= $n; $i++) {
    echo $i . " ";
    for ($j = 1; $j < $n; $j++) {
        echo ($i + $n * $j) . " ";
    }
    echo '<br>';
}


