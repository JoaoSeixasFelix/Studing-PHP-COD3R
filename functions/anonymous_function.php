<div class="title">
    Anonymous Function
</div>

<?php

$sum = function($a, $b){
    return $a + $b;
};

echo $sum(11, 2) . '<br>';

function execution($a, $b, $param, $fn){
  $result = $fn($a, $b);
  echo "$a $param $b = $result<br>";
};

echo execution(2, 3, "+", $sum);


$multiplication = function ($a, $b){
    return $a * $b;
};

echo execution(2, 3, "*", $multiplication);

$division = function ($a, $b):float {
    return $a / $b;
};

echo execution(2, 3, "/", $division);
