<div class="title">Arithmetic Type</div>

<?php

echo 1 + 1, '<br>';
var_dump(1 + 1);
echo'<br>';
echo 1 + 2.5,'<br>';
echo 10-2,'<br>';
echo 2 * 5, '<br>';
echo 7/4, '<br>';
echo intdiv(7,4), '<br>';
echo round(7,4), '<br>';
echo 7 % 4, '<br>';
echo 7 / 0.1, '<br>';
// echo intdiv(7, 0), '<br>'; #error.
echo 4 ** 2, '<br>';

/* operator precedence type:

first parentheses () => second, exponenciation ** => in third division, multiplication, and module
/ * % => and last sum and subtraction + - */

echo '<p class="title">Arithmetic Precedence</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;