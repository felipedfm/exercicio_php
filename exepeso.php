<form action="atividade7.php" method="post">
<p><input type="text" name="altura" placeholder="insira sua altura"></p>
<p><input type="text" name="sexo" placeholder="qual seu  sexo"></p>
<button type ="submit">saiba qual é o seu peso ideal</button></form>

<?php
$alt = $_POST['altura'];
$sex = $_POST['sexo'];
$for = 0.0;

if ($sex == "m" || $sex == "m" || $sex == "homem"){
	$for = (72.7*alt)-58;
echo $for ;
}
else {
	$for = (62.1*alt)-44.7;
echo  $for;
}
?>