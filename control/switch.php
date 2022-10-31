<div class="title">
    Switch
</div>

<?php

$category = 'luxury';
$price = 0.0;
$car = '';

if ($category = 'luxury'){
    $car = 'Mercedes';
    $price = 250000;
} else if ($category === 'SUV'){
    $car = 'Renegade';
    $price = 80000;
} else if ($category === 'Sedan'){
    $car = 'Etios';
    $price = 55000;
} else {
    $car = 'Mobi';
    $price = 33000;
}


$formattedPrice = number_format($price, 2, '.', ',');

echo "<p>Using If and Else</p>";
echo "Your new car will be $car, and this car only costs R$ $formattedPrice";



$newCategory = '???';

switch($newCategory){
    case 'Luxury': 
        $car = 'Mercedes';
        $price = 250000;
        break; 
    case 'Basic SUV':
    case 'SUV':
        $car = 'Renegade';
        $price = 80000;
        break;
    case 'Sedan':
        $car = 'Etios';
        $price = 55000;
        break;
    default:
        $car = 'Mobi';
        $price = 33000;
        break;
};

$formattedPrice = number_format($price, 2, '.', ',');

echo "<p>Using Switch</p>";
echo "<p>Your new car will be $car, and this car only costs R$ $formattedPrice</p>";