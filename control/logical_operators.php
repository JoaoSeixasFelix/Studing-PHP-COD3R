<div class="title">
    Logical Operators
</div>


<?php

echo "<p> True or False </p>";

echo "<br> true = ";
var_dump(true);
echo "<br> false = ";
var_dump(false);
echo "<br> logical negation !true = ";
var_dump(!true);
echo "<br> logical double negation !!true = ";
var_dump(!!true);

echo "<p> True Table using the operator AND (&&) </p>";

echo "<br> Using true && true = ";
var_dump(true && true);
echo "<br> true && false = ";
var_dump(true && false);
echo "<br> false && true = ";
var_dump(false && false);
echo "<br> false && false = ";
var_dump(false && false);

echo "<p> Using the AND operator </p>";

echo "<br> Using true && true = ";
var_dump(true and true);
echo "<br> true and false = ";
var_dump(true and false);
echo "<br> false and true = ";
var_dump(false and false);
echo "<br> false and false = ";
var_dump(false and false);


echo "<br> <br> if a value is false, the entire sentence will be nullified, since both requests must be respected.";

echo "<p> True Table using the operator OR ( || ) </p>";

echo "<br> Using true || true = ";
var_dump(true || true);
echo "<br> true || false = ";
var_dump(true || false);
echo "<br> false || true = ";
var_dump(false || true);
echo "<br> false || false = ";
var_dump(false || false);

echo "<p> True Table using the operator OR ( || ) </p>";

echo "<br> Using true or true = ";
var_dump(true or true);
echo "<br> true or false = ";
var_dump(true or false);
echo "<br> false or true = ";
var_dump(false or true);
echo "<br> false or false = ";
var_dump(false or false);


echo "<p> True Table using the operator XOR ( Exclusive OR ) </p>";

echo "<br> Using true xor true = ";
var_dump(true xor true);
echo "<br> true xor false = ";
var_dump(true xor false);
echo "<br> false xor true = ";
var_dump(false xor true);
echo "<br> false xor false = ";
var_dump(false xor false);


echo "<p division> Example </p>";

$age = 65;
$gender = "M";

if ($age >= 60 && $gender === "F"){
    echo "You can retire because your gender is -> $gender";
} else if($age >= 65 && $gender === "M"){
    echo "You can retire because your gender is -> $gender ";
} else {
    echo "You'll need to work a little harder";
}

?>

<style>

    p.division {
        margin-bottom: -10px;
        font-weight: bold;
    }

</style>