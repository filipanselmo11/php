

<!DOCTYPE html>
<html>
<head>
	<title>Variavek de escopo global</title>
</head>
<body>
<?php
$x = 5; //Escopo global//
$y = 4;
function meuTeste(){
    echo "A variavel x é de escopo global";
    echo "A variavel y tambem é de escopo global";
}

meuTeste();

?>
</body>
</html>
