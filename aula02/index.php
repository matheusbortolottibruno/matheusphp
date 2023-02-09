<?php
echo "<h1>PHP - Aula02</h1>";
#http://localhost/matheusphp/aula02/
echo "<h2>Tipos de Dados</h2>";
echo "<hr>";
$nome = "Matheus";
$idade = 40;
$altura = 1.78;
$fumante = false;
# toda variavel começa com $

echo "Nome: " . $nome;
echo "<br>";
echo "Idade: " . $idade;
echo "<br>";
echo "Altura: " . $altura;
echo "<br>";
echo "fumante: " . $fumante;
echo "<br>";

echo $nome . " - " . $idade . " - " . $altura . " - " . $fumante;

echo "<hr>";
echo gettype($nome) . "<br>";
echo gettype($idade) . "<br>";
echo gettype($altura) . "<br>";
echo gettype($fumante) . "<br>";

echo "<h2> Operadores aritmeticos</h2>";
$n1 = 10 ; 
$n2 = 2 ; 

echo $n1 + $n2 . "<br>";
echo $n1 - $n2 . "<br>";
echo $n1 * $n2 . "<br>";
echo $n1 / $n2 . "<br>";
echo $n1 % 2 . "<br>";
echo $n1 ** 2 . "<br>";



echo "<h2> Operadores relacionais</h2>";

echo ($n1 > $n2) . "<br>";
echo ($n1 >= $n2) . "<br>";
echo ($n1 < $n2) . "<br>";
echo ($n1 <= $n2) . "<br>";
echo ($n1 != $n2) . "<br>";
echo ($n1 == $n2) . "<br>";

echo "<h2> Operadores Ligicos</h2>";

echo (20>10) && (10>5);
echo "<br>";
echo (20>10) || (10>15);
echo "<br>";
echo ! (10<5);








?>