<div class="title">
    Challenge PI
</div>

<?php

$pi = 3.14;
$invalidNumber = pi() - $pi;
echo pi();

/*It was considered in the creation of the parameters, 
a percentage factor of 5% for the informed values of PI */

if ($invalidNumber < 0.157079633 && $invalidNumber > -0.157079633 ){
      echo "<br> Equals";
} else {
    echo "<br> Not Equals";
};