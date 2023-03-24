<div class="title">
    Clousure And Callable
</div>


<?php


$sum1 = function ($a, $b){
    return $a + $b;
};

function sum2 ($a = 0, $b = 0){
    return $a + $b;
};


echo $sum1(5, 5) . ' '; //This is a Callable!
echo (is_callable($sum1) ? 'Yes, this is a callable function' : 'No, this is a non-callable function') . '<br>';

echo sum2(1, 3) . ' ';
echo (is_callable(sum2(1,3)) ? "Yes, this is a callable function" : "No, this is a non-callable function.") . '<br>';

var_dump($sum1);
echo "<br>";

function execution($a, $b, $param, Closure $fn){
    $result = $fn($a, $b);
    echo "$a $param $b = $result ". "<br>";
};

execution(5, 4, '+', $sum1);