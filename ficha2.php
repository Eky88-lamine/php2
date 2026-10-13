<?php
function retangulo($altura)
{
    for($i=1; $i<=$altura; $i++)
    echo "**********<br>";
}
retangulo(20);



echo "<br>exercicio2<br>";
function trocar ($a,$b)
{
echo " Recebi em A=$a e em b=$b";
$aux=$a;
$a=$b;
$b=$aux;

echo '<br>Depois de trocar a=$a e b=$b';
}
trocar (5,7);
echo "<br>grupo2 exercicio1<br>";
function inverter ($string)
{
    $tamanho=strlen($string);
    for($i=$tamanho-1;$i>=0;$i--)
        echo $string[$i];
}
   inverter("david");
?>