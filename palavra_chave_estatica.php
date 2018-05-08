
<!DOCTYPE html>
<html>
<head>
	<title>Palavra chave estática</title>
</head>
<body>

<?php

function meuTeste(){
    static $x = 10;
    echo $x;
    $x++;
}
meuTeste();
meuTeste();
meuTeste();
?>
</body>
</html>