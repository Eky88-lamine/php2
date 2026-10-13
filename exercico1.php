<?php

$x=34;
echo $x;
if ($x==34)
    echo" <br> o valor e 34";
else
    echo " o valor nao e 34";
funtion paridade($x)
{
    if ($x%2==0)
        echo "$x e par!";
    else
         echo "$x e impar!";
}

paridade(300);
?>