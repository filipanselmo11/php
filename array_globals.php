<!DOCTYPE html>
<html>
<head>
	<title>Arrays Globals</title>
</head>
<body>

<?php
$x = 5;
$y = 10;

function meuTeste(){
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

meuTeste();
echo $y;
?>
</body>
</html>