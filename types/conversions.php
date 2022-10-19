<div class="title">
    Conversions
</div>

<?php

echo is_int(PHP_INT_MAX); //For validate whether the type of a variable is integer 
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';

echo '<p>Implicit and Explicit Casting</p>';

var_dump((float) 3);
echo '<br>';
// To convert integers to decimals, there is a risk of losing information, since the casting will not consider the values after the comma.
var_dump((int) 3.5); 
echo '<br>';
var_dump((bool) 3);
echo '<br>';
var_dump((array) 3);
echo '<br>';
var_dump((array) (float) 3);
echo '<br>';
var_dump(intval(4.8));
echo '<br>';
var_dump((int) round(2.8));

echo '<p>String Operation</p>';

var_dump(3 + "2");
echo '<br>';
var_dump("3" . 2);
echo '<br>';
var_dump(3 . "2");
echo '<br>';
var_dump((string) 3);
echo '<br>', is_string("3". 2);
// echo '<br>', is_string("3" + 2);
// var_dump(1 + "cinco");
// echo '<br>';
echo '<br>';
var_dump(1 + "5 cinco");
echo '<br>';
var_dump(1 + "2+5");
echo '<br>';
var_dump(1 + "3.5");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");