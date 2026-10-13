```php
<?php

$vetor = array(1, 2, 3, 4, 5, 6, 7);

echo "O elemento mínimo é: " . min($vetor);

$media = array_sum($vetor) / 7;
echo "<br>A média é: " . $media;

$somap = 0;
$soman = 0;

foreach ($vetor as $a)
{
    if ($a > 0)
        $somap = $somap + $a;

    if ($a < 0)
        $soman = $soman + $a;
}

echo "<br>A soma dos positivos é: " . $somap;
echo "<br>A soma dos negativos é: " . $soman;

echo"<br> exercicio 2 <br>";

$chave=array();
for($i=0;$i<=5;$i++)
{
    $num=rand(1,50);
    if(in_array($num,$chave)==0)
            {$chave[$i]=$num; echo $chave[$i].","; }  
    else$i--;



}

?>
