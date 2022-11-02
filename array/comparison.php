<div class="title">
    Array Comparison
</div>

<?php

$arr1 = ['name' =>'Marie', 'age' => 20];
$arr2 = ['name' =>'Marie', 'age' => 20];

var_dump($arr1 == $arr2);
echo '<br>';
var_dump($arr1 === $arr2);
echo '<br>';

$arr3 = ['age' => 20, 'name' =>'Marie'];

var_dump($arr1 == $arr3);
echo '<br>';
var_dump($arr1 === $arr3);
echo '<br>';

$arr4 = ['age' => '20', 'name' =>'Marie'];

var_dump($arr1 == $arr4);
echo '<br>';
var_dump($arr1 === $arr4);
echo '<br>';