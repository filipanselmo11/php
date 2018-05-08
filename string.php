<!DOCTYPE html>
<html>
<head>
	<title>String</title>
</head>
<body>

<?php
$x = "Meu nome é Filip";
$y = "Politico só faz merda";

echo "<h2>" . $y . "<h2>";
echo $x;

echo strlen("FILIP");
echo str_word_count("FILIP");
echo strrev("FILIP");

echo strlen("Thanos");
echo str_word_count("Thanos");
echo strrev("Thanos");
?>
</body>
</html>