<div class="title">
    Challenger - String
</div>


<?php

echo '<p>Evaluating the string documentation methods <br>
      what method does the position of the text \'abc\' <br>
      in the string \'!AbcaBcabc\' return 1?</p>';

echo  'Using function substr_count(This method is Case Sensitive): ' . substr_count('!AbcaBcabc', 'abc' ) . '<br>';
echo 'Using function strpos(This method is not Case Sensitive): ' . strpos('!AbcaBcabc', 'abc') . '<br>';
echo 'Using function stripos(This method is Case Sensitive): ' . stripos('!AbcaBcabc', 'abc');