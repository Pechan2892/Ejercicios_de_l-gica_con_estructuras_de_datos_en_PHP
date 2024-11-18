<?php
function  invertirLista($array){
return array_reverse($array);

}
//prueva del ejercio 
$lista = [1,2,3,4,5];
$listaInvertida = invertirLista($lista);
print_r($listaInvertida);
?>