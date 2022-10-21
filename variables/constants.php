<div class="title">
    Constants
</div>

<?php

define ('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>' . $TAXA_DE_JUROS.'!'; //This is an invalid method to access the constant


const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valueVariable = 2.8;
//const NOVISSIMA_TAXA = $valorVariavel; #It is not possible to pass the value of a variable into another using the conste statement
// define('NOVISSIMA_TAXA', $valueVariable);
const NOVISSIMA_TAXA  = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA.'!'; //This is an invalid method to access the constant

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;
echo '<br>' . PHP_INT_MIN;
