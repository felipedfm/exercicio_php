<?php
$salario = $_POST['salario'];
$novosalario = 0.0;
if ($salario<= 1000.00){
$novosalario = ($salario * 0.5) + $salario;
echo "Seu novo salario agora é : $novosalario Reais";
}
else {
$novosalario = ($salario *0.3) + $salario;
echo "Seu novo salario agora é : $novosalario Reais";
}/>