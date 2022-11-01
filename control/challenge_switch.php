<div class="title">
    Challenge Switch
</div>

<form action="#" method="post">

<input type="text" name="param">
<select name="conversion" id="conversion">
    <option value=""></option>
    <option value="km-mile">Kilometers > Mile</option>
    <option value="mile-km">Mile > Kilometers</option>
    <option value="meter-km"> Meters > Kilometers</option>
    <option value="km-meter"> Kilometers > Meters</option>
    <option value="celcius-fahrenheit"> Celcius > Fahrenheit</option>
    <option value="fahrenheit-celcius"> Fahrenheit > Celcius</option>
</select>

<button>Conversion!</button>

</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

$name = $_POST['param'];
$conversion = $_POST['conversion'];
$result = '0';

switch($conversion){
    case 'km-mile':
        $result = $name / 1.6;
        echo "The result is: $result miles";
        break;
    case 'mile-km':
        $result = $name * 1.6;
        echo "The result is: $result kilometers";
        break;
    case 'meter-km':
        $result = $name / 1000;
        echo "The result is: $result kilometers";
        break;
    case 'km-meter':
        $result = $name * 1000;
        echo "The result is: $result meters";
        break;
    case 'celcius-fahrenheit':
        $result = $name * 1.8 + 32;
        echo "The result is: $result Fahrenheit";
        break;
    case 'fahrenheit-celcius':
        $result = (($name - 32) / 1.8);
        echo "The result is: $result meters";
        break;
    default :
    echo "Please enter a valid value.";
    break;
}