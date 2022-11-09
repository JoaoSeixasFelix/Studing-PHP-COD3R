<div class="title">
    Return Argument
</div>

<?php

function getMessage() {
    return "Welcome Back!";
}

getMessage();

$m = getMessage();

echo $m . '<br>';

function getMessageWithName($name){
    return "Congratulations $name!!";
}

$hello = getMessageWithName("Tinowns");
echo $hello . '<br>';
$hello = getMessageWithName("Oliver");
echo $hello . '<br>';
$hello = getMessageWithName("Pedrinho");
echo $hello;

function sum ($a, $b){
    return $a + $b;
}

echo '<br>', sum(4,5);
$x = 20;
$y = 15;
echo '<br>', sum($x, $y);
echo '<br>', sum(8,5);

function valueChange ($a, $newValue){
    $a = $newValue;
}

$variable = 1;
valueChange($variable, 3);
echo '<br>' . $variable;

function newValueChange (&$a, $newValue){
    $a = $newValue;
}

$variable = 10;
newValueChange($variable, 500);
echo '<br>' . $variable;