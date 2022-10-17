<div class="title">
    CSS Integration
</div>

<h1>
    <?php
    echo 'Hello';
    echo '<small>';
    echo ' World';
    echo '</small>'
    ?>
</h1>

<?= '<div center azul>This is the other way of expressing myself.</div>'?>

<br>

<div center>
    <button dobro><?= "Cool Cool Cool"?></button>
</div>

<style>
    button{
        padding: 5px 20px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: <?= 2 * 5?>px;
    }
    [center] {
        display: flex;
        justify-content: center;
    }
    [azul]{
        color: #4286f4;
    }
    [dobro]{
        font-size: 2rem;
        
    }
</style>