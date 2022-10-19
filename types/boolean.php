<div class="title">
    Boolean Type
</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('False');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

echo '<p>Conversation Rules</p>';

echo '<br>' . var_dump((bool) 0); //only zero will be converted to false
echo '<br>' . var_dump((bool) 1);
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0001);
echo '<br>' . var_dump((bool) ""); //empty string will also be treated as false
echo '<br>' . var_dump((bool) " "); //Now, if the string has at least one character, it will be true
echo '<br>' . var_dump((bool) "0"); //The return will be false.
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false"); 
echo '<br>' . var_dump(!!"false"); 
