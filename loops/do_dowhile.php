<div class="title">
    While/DoWhile
</div>

<?php

const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE){
    echo "While $contador <br>";
    $contador++;
}

do {
    echo "While $contador <br>";
    $contador++;
} while($contador < VALOR_LIMITE);
