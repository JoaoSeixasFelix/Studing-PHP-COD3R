<div class="title">
    $_POST
</div>


<form action="#" method="post">
<input type="text" name="name">
<input type="text" name="lastname">

    <button>
        Send
    </button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

print_r($_GET);
echo '<br>';
print_r($_POST);