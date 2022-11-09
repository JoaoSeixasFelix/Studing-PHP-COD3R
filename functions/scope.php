<div class="title">
    Functions and Scopes
</div>

<?php

function printMensage (){
    echo "E o Jhonny?";
    echo '<br>';
    echo "O Jhonny eu Solo.";
}

printMensage();

$variable = 1;

function changeValue(){
    $variable = 2;
    echo "Before the execution of the function, the variable receives the value: {$variable}";
}

echo '<br>';
echo "During the execution of the function, the variable receives the value: {$variable}";

echo '<br>';
changeValue();

function valueChangeReal(){
    global $variable;
    $variable = 3;
    echo "<br> During the execution of the function, the variable receives the value: {$variable}";
};

var_dump(valueChangeReal());