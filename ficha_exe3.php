<?php

function raizes($a, $b, $c) {

    $delta = ($b * $b) - (4 * $a * $c);

    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);

        return "x1 = $x1 e x2 = $x2";
    }
    elseif ($delta == 0) {
        $x = -$b / (2 * $a);

        return "x = $x";
    }
    else {
        return "Não existem raízes reais.";
    }
}

echo raizes(1, -5, 6);

?>




