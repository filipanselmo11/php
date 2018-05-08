<!DOCTYPE html>
<html>
<head>
	<title>Palavra reservada global</title>
</head>
<body>

<?php
$x = 10;
$y = 5;

function meuTeste(){
    global $x,$y;
    $y = $x + $y;
}

meuTeste();
?>
</body>
</html>
