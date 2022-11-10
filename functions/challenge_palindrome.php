<div class="title">
    Palindrome Challenge
</div>

<?php


function checkPalindrome($word){
    $word = strtolower($word);
    $word = str_replace(' ', '', $word);
    $reverseWord= '';
    for ($i = strlen($word) - 1; $i >= 0; $i--) {
        $reverseWord .= $word[$i];
    }
    if ($word === $reverseWord){
        echo "Yes";
    } else {
        echo "No";
    }
};

checkPalindrome('BELEZA');


echo "<br>Using the strrev for check palindrome";

function checkPalindrome2($word){
    $word = strtolower($word);
    $word = str_replace(' ', '', $word);
    if ($word == strrev($word)){
        echo "<br> This is a Palindrome";
    } else {
        echo "<br> This is not a Palindrome";
    }
}

checkPalindrome2('LUZ AZUL');