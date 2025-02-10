<?php
/* Las operaciones correctas para llegar a la solución son las siguientes:

(5-4) = 1 : (5+4) = 9 → 19

(8-2) = 6 : (8+2) = 10 → 610

(10-8) = 2 : (10+8) = 18 → 218

(12-9) = 3 : (12+9) = 21 → 321

(18-2) = 16 : (18+2) = 20 → 1620

(21-5) = 16 : (21+5) = 26 → 1626

Ahora que conoces las operaciones necesarias para encontrar la solución a este problema, en la próxima clase encontrarás un playground donde podrás 
traducir tu solución a código de verdad con un lenguaje de programación. ¿Te animas a intentarlo?*/
$numero1 = 5;
$numero2 = 4;
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;

$resultado = "el resultado es" + $resta + "" + $suma;


?>