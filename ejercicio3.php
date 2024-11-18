<?php 
function frecuenciaCaracteres($cadena){
    $frecuencia = [];
    $longitud = strlen($cadena);

    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $cadena[$i];
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }

    return $frecuencia; 
}
//prueba del ejercio
$texto = "comencesomos en la programacion con php";
$resultado = frecuenciaCaracteres($texto);
echo "La frecuencia de cada caracter es:\n"; 
print_r($resultado);






?>