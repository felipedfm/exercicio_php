<!DOCTYPE html>
<html>
<body>

<?php

$frase1 = $_POST['palavra1'];
$frase2 = $_POST['palavra2'];

if ($frase1 && $frase2){
echo "são iguais";
} 
else 
{
echo "são diferentes";
}
?>

<?php
$frase1 = $_POST['palavra1'];
$frase2 = $_POST['palavra2'];

if ($frase1 == $frase2) {
    echo "são iguais";
} else {
    echo "são diferentes";
}
?>

</body>
</html>