<div class="title">
Assignments
</div>

<?php

$title = 'Assignments';
$number = 10;
echo '<br>' . $number;
$number = $number -3;
echo '<br>' . $number;
$number = $number + 1.5; //infix
echo '<br>' . $number;
$number--; //postfix
echo '<br>' . $number;
$number = $number -3;
echo '<br>' . $number;
$number--; //postfix
echo '<br>' . $number;
--$number; //prefix
echo '<br>' . $number;
$number++; //postfix
echo '<br>' . $number;
++$number; //prefix
echo '<br>' . $number;

$number -= 3;
echo '<br>' . $number;
$number += 3;
echo '<br>' . $number;
$number *= 20;
echo '<br>' . $number;
$number /= 3;
echo '<br>' . $number;
$number %= 1;
echo '<br>' . $number;
$number **= 2;
echo '<br>' . $number;

// $nonExistentVariable = 'Existing Value';

echo '<br>' . $nonExistentVariable;

$value = $nonExistentVariable ?? 'Default Value';

echo '<br>' . $value;
