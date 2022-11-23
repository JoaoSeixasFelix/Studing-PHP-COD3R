<div class="title">
    Declaring Types
</div>

<?php

//No Type
echo "<p>No Type in Variables</p>";
echo "<hr>";

function sum1 ($a, $b){
    echo "<span>Adding $a + $b = </span>";
    return $a + $b;
}

echo sum1(20, 10) . '<br>';
echo sum1(2.35, 10.5) . '<br>';
echo sum1(20, 10) . '<br>';
echo sum1(20, "4dois") . '<br>';

echo "<p>Using Type in Variables</p>";
echo "<hr>";

function sum2 (int $a, int $b){
    echo "<span>Adding $a + $b = </span>";
    return $a + $b;
}

echo sum2(20, 10) . '<br>';
echo sum2(2.35, 10.5) . '<br>';
echo sum2(20, 10) . '<br>';
// echo sum2(20, "4dois") . '<br>';+

echo "<p>Using Type on Function Return</p>";
echo "<hr>";

function sum3 ($a, $b): int {
    echo "<span>Adding $a + $b = </span>";
    return $a + $b;
}

echo sum3(20, 10) . '<br>';
echo sum3(2.35, 10.5) . '<br>';
echo sum3(20, 10) . '<br>';
echo sum3(20, "4dois") . '<br>';
