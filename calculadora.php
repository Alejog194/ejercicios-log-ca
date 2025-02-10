<?php
function calculator(){
    $valor1 = 8;
    $valor2 = 6;
    $suma = $valor1 + $valor2;
    $resta = $valor1 - $valor2;
    $multiplicacion = $valor1 * $valor2;
    $division = $valor1 / $valor2;  
    
    echo "Addition: "; 
    print_r($suma);
    echo "<br>";

    echo "Subtraction: ";
    print_r($resta);
    echo "<br>";

    echo "Multiplication: ";
    print_r($multiplicacion);
    echo "<br>";

    echo "Division: ";
    print_r($division);
    echo "<br>";
}

calculator();
?>