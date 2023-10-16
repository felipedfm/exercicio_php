<?php
$n1 = random_int(-999, 999);
$n2 = random_int(-999, 999);
if ($n1 < $n2){
echo $n1.  " ". $n2 ;
}
elseif ($n1 > $n2) {
echo $n2 . " " . $n1;
}
else {
echo "numeros iguais " . $n1;
}
?>