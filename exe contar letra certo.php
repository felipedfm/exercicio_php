<?php
if (isset($_POST['palavra']) && isset ($POST ['letra'])){
$frase =$_POST['palavra'];
$frase =$_POST['letra'];
}
else {
echo "dados não recebidos";
}
$cont = substr_count($frase, $letra);
echo $cont;
?>