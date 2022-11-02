<div class="title">
    Array Constants
</div>

<?php

const FRUITS = array('Orange', 'Pineapple');
// FRUITS = 'TEST';
// FRUITS[0] = 'Apple';
// FRUITS[] = 'banana';
echo FRUITS[0];

Const CAR = ["Porshe" => "Cayenne", "Ford" =>"Ka"];

// CAR["BMW"] = '325i';
echo '<br>' . CAR['Porshe'];


define('CITY', array('Belo Horizonte', 'Sao Paulo'));
// CITY [] = 'CURITIBA';
echo '<br>' . CITY[0];