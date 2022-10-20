<div class="title">
    Variables
</div>

<?php

$numberA = 13;
echo $numberA, '<br>';
var_dump($numberA);

echo '<br>';
$a = 3;
$b = 16;
$sum = $a + $b;
echo $sum;

echo '<br>';
echo isset($sum);

unset($sum);
var_dump($sum);

$variable = 10;
echo '<br>' . $variable;

$variable = "Now I'm a string";


echo '<p> Variables Names</p>';

$var    = 'valid';
$var2   = 'valid';
$var2   = 'valid';
$VAR3   = 'valid';
$_var_4 = 'valid';
$vâr5   = 'valid'; //It is not recommended to use special characters, as errors may occur depending on the encoding used.
// $6var   = 'invalid';
// $%var7  = 'invalid';
// $var8%  = 'invalid';