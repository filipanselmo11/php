
<!DOCTYPE html>
<html>
<head>
	<title>IF,ELSE,ELIF</title>
</head>
<body>

<?php

$t = date("H");

if($t > "10"){
	echo "Tenha um bom dia";
}elseif($t > "20"){
	echo "Tenha uma boa noite";
}else{
	echo "Thanos";
}

?>
</body>
</html>