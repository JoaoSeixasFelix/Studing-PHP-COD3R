<div class="title">
    Relation Operator
</div>

<style>
    p{
        margin-bottom: -10px;
    }
</style>

<?php

var_dump(1 == 1); //true
echo "<br>";
var_dump(1 > 3); //false
echo "<br>";
var_dump(1 <= 5); //true
echo "<br>";
var_dump(1 != 1); //false
echo "<br>";
var_dump(1 <> 0); //true


echo "<br> <br>Comparison with string";

echo "<br>";
var_dump(1 == '1'); //true
echo "<br>";
var_dump(111 === '111'); //false
echo "<br>";
var_dump(111 != '111'); //false
echo "<br>";
var_dump(111 !=='111'); //true


echo "<p>Using Relationals in If/Else</p><hr>";

$age = 25;

if($age<18){
    echo "You still can't drive";
} else if ($age>=18){
    echo "Cool, you can drive!!";
} else if ($age > 65){
    echo"You are old for drive!";
} else{
    echo"Unexpected age. Insert your age again!";   
};

echo "<p>Spaceship</p><hr>";
