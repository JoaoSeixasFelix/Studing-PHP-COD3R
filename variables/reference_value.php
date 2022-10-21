<div class="title">
    Reference vs Value
</div>

<?php

$variable = 'Initial Value';
echo $variable;

$variableValue = $variable; //Attribution by value
echo "<br>$variableValue";
$variableValue = 'New Value';
echo "<br>$variable";
echo "<br>$variableValue";

//Now is Using Attribution by reference

$variableReference = &$variable; //Attribution by Reference.
$variableReference = 'Same Reference'; //Attribution by Reference.
echo "<br>$variableReference / $variable"; // Now both variables have the same value storage location.
