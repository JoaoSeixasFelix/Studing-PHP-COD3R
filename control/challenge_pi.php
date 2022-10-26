<div class="title">
    Challenge PI
</div>

<?php

$pi = 3.14;
$invalidNumber = pi() - $pi;


if ($invalidNumber <= 0.01){
      echo "<br> Equals";
} else {
    echo "<br> Not Equals";
};