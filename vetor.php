<?php
$carros = array("volvo", "BMW", "Mercedez","Mustang");
echo "Carros". $carros[0] ",". $carros[1] ",". $carros[2] ",". $carros[3] ".";
echo count($carros);

$mulheres = array("Maria","Julia","Ana","Luna");
echo "Mulheres". $mulheres[0] ",". $mulheres[1] ",". $mulheres[2] ",". $mulheres[3] ".";
echo count($mulheres);

$numeros = array(1,2,3,4);
$tamNumeros = count($numeros);

for($i = 0; $i < $tamNumeros; $i++){
	echo $numeros[$i];
	echo "<br>";
}
echo "<br";

$times = array("barcelona","liverpool","borusia","vasco");
$tamTimes = count($times);

for($i = 0; $i <= $tamTimes; $i++){
	echo $times[$i];
	echo "<br>";

}

?>