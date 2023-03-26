<div class="title">
    Returning Functions
</div>

<?php

function sum ($a){
    return function($b) use ($a){
        return $a + $b;
    };
}

echo sum(4)(5);