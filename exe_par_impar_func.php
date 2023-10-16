<?php
//criar uma função que recebe um numero como argumento e verifica se ele é par ou impar
function par_ou_impar($n1){
if ($n1%2==0){
$resultado = "$n1 é par" ;
}
else {
$resultado = "$n1 é impar";
}
return $resultado;
}
echo par_ou_impar(random_int(0, 999));
?>