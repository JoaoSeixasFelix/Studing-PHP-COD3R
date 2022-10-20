<div class="title">
    Equation Challenger
</div>

<?php

$numeratorA = ((6 * (3 + 2)) ** 2);
$denominatorA = (3*2);

$numeratorB = ((1 - 5) * (2-7));
$denominatorB = 2;

$denominator = 10**3;

$equationPartA = $numeratorA/$denominatorA;
$equationPartB = (($numeratorB/$denominatorB)**2);
$equation = ((($equationPartA - $equationPartB) ** 3)/$denominator);

var_dump($equationPartA);
echo '<br>';
var_dump($equationPartB);
echo '<br>';
echo 'The final value of the Equation will be: ';
echo ($equation);