 <div class="title">
    Variables Variables
 </div>

 <?php

  $a = 'valueA';
  $$a = 'valueAA';

  echo "$a ${$a}";
  
  echo'<br>';
  
  $epa = 'opa';
  $$iopa = 'vish';
  
  echo "$epa {$$opa}";
