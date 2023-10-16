
<?php
//criar uma função que recebe uma string como agumentos e retorna o numero de caracteres
function contar_caractere($texto){
	$num_caracteres = strlen($texto);
	return $num_caracteres;
}
$texto = "hello world";
$num_caracteres = contar_caractere($texto);
echo "o texto tem ".$num_caracteres. " caracteres.";
?>