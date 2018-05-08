<!DOCTYPE html>
<html>
<head>
	<title>Variavel de escopo local</title>
</head>
<body>

<?php

function meuTeste(){
    $x = 5; //Escopo local//
    echo "A variavel x é de escopo global";
}
meuTeste();

?>
</body>
</html>