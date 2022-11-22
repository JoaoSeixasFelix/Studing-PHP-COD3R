<div class="title">
Variable Arguments
</div>

<?php

//using the spreed operator

function completeSum (...$args) {
    $sum=0;
     foreach ($args as $value){
        $sum += $value;
     }
     return $sum;
}

echo completeSum(4, 5, 6 ,99 ,8, 2,3);

//using the rest operator

$array = [1, 15, 25];
echo '<br>' . completeSum(...$array) . '<br>';

function members ($holder, ...$dependents){
   echo "Holder: $holder" . "<br>";
   if ($dependents){
      foreach ($dependents as $dep){
         echo "Dependent: $dep <br>";
      }
   }
}

members("Bruce Wayne", "Alfred", "Robin", "Night Wing");
