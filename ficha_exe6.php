
<?php

function trianguloFloyd($n) {
    $numero = 1;

    for ($linha = 1; $linha <= $n; $linha++) {

        for ($i = 1; $i <= $linha; $i++) {
            echo $numero . " ";
            $numero++;
        }

        echo "<br>";
    }
}

trianguloFloyd(5);

?>

