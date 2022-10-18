<div class="title">Arithmetic Type</div>

<?php

echo '<p>What value will be printed from the expression below?</p> <br>';
echo '2 + 5 * 3 + (12 / 6) / ( - 8 + 2 ** 3) = ';

function calc () {

    $a = 2 + 5 * 3;
    $b = (12 / 6);
    $c = ( - 8 + 2 ** 3);

    if ($c === 0){
        echo 'The result will tend to infinity.';
    } else {
        echo ($a + $b / $c);
    };
};

calc();

echo '<p> Which expression prints the value 100? </p>';

echo 'a) ', (1 + 2) * 20 - 15 . '<br>';
echo 'b) ', 4 * 5 ** 2 . ' - Right answer!'. '<br>';
echo 'c) ', 2 ** 3 ** 4 / 1e25 . '<br>';
echo 'd) ', 3 + (3 * 8) / 2 - 3 . '<br>';
