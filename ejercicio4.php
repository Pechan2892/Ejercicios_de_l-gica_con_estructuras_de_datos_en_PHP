<?php 
function imprimirPiramide($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        //imprimir espacios
        echo str_repeat(" ", $altura - $i);
        //imprimir asteriscos
        echo str_repeat("*", $i * 2 - 1);
        //salto de linea
        echo "\n";
    }
}
//prueba del ejercicio
$alturaPiramide = 5;
imprimirPiramide($alturaPiramide);




?>