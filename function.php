<?php

function escreveMensagem(){
	echo "Olá meu nome é Fílip<br>";
}

//chamando a função//
escreveMensagem();
echo "<br>";

function escreveOutraMensagem(){
	echo "Freash meat<br>";
}

escreveOutraMensagem();
echo "<br>";

function Nome($nome){
	echo "Nome: $nome <br>";
}

Nome("Filip");
Nome("Julia");
Nome("Lenira");
Nome("Ingrid");
echo "<br>";

function nomeIdade($nome, $idade){
	echo "Nome: $nome | Idade: $idade<br>";
}

nomeIdade("Filip", 21);
nomeIdade("Julia",22);
nomeIdade("Lenira",23);
nomeIdade("Ingrid",19);
echo "<br>";

function soma($valor1, $valor2){
	$s = $valor1 + $valor2;
	return $s;
}

echo "1 + 2 =". soma(1,2) . "<br>";
echo "2 + 3 =". soma(2,3) . "<br>";
echo "3 + 4 =". soma(3,4) . "<br>";
echo "<br>";

function setTamanho($tam = 50){
	echo "O tamanho é: $tam <br>";
}

setTamanho();
setTamanho(2);
setTamanho(456);



?>