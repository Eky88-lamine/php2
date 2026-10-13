

<?php

function somaDivisores($n) {
    $soma = 0;

    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $soma = $soma + $i;
        }
    }

    return $soma;
}

function numeroPerfeito($n) {
    return somaDivisores($n) == $n;
}

// Mostrar todos os números perfeitos entre 1 e 3000
for ($n = 1; $n <= 3000; $n++) {
    if (numeroPerfeito($n)) {
        echo $n . "<br>";
    }
}

?>





