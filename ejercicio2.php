<?php
function sumaNumerosPares($array) {
    $suma = 0;
    foreach ($array as $num) {
        if ($num % 2 == 0) {
            $suma += $num;
        }
    }
    return $suma;
}
//prueva del ejercio
$listaNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "La suma de los números pares es: " . sumaNumerosPares($listaNumeros);

?>