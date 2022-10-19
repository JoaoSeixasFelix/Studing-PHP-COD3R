<div class="title">
    String Type
</div>

<?php

echo 'I am a string';
var_dump('I am a string');
echo '<br>';
var_dump("Me Too");
echo '<br>';

// Concatenation

echo "We Too" . ' are';
echo '<br>', "I also accept", ' commas';

echo '<br>';
echo "'Test' " . '"Test" ' . '\'Test\' ' . "\"Test\" ";

print("<br>There is also the print function");
print"<br>There is also the print function";

echo '<br>' . strtoupper('maximized');
echo '<br>' . strtolower('maximized');
echo '<br>' . ucfirst('maximized');
echo '<br>' . ucwords('maximizing the other letters');
echo '<br>' . strlen('maximizing the other letters');
echo '<br>' . mb_strlen('maximizing the other letters', 'utf-8');
echo '<br>' . substr('maximizing the other letters', 11, 10);
echo '<br>' . str_replace('this', 'that', 'Change this!');
