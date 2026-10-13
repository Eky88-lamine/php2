<?php

echo "Exercicio 3<br>";

$cavalos = array(
    "cavaloA" => 88,
    "cavaloB" => 28,
    "cavaloC" => 38,
    "cavaloD" => 22,
    "cavaloE" => 11,
    "cavaloF" => 56,
    "cavaloG" => 66,
    "cavaloH" => 77,
    "cavaloI" => 28,
    "cavaloJ" => 33
);

asort($cavalos);

$a = 1;

foreach ($cavalos as $chave => $valor)
{
    if ($a == 1)
    {
        echo "O vencedor é: $chave com $valor segundos.";
        break;
    }
}

?>