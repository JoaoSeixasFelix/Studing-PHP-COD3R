<div class="title">
Challenge
</div>

<div center>
    
    <ul></ul>
        <li>
            <?php
            $firstNumber = 1;
            $secondNumber = 2;
            $sum = $firstNumber + $secondNumber;
            echo "$firstNumber + $secondNumber = $sum"; 
            ?>
        </li>
        <li>
        <?php
            $firstNumber = 4;
            $secondNumber = 4;
            $sum = $firstNumber + $secondNumber;
            echo "$firstNumber + $secondNumber = $sum";
            ?>
        </li>
        <li>
        <?php
            $firstNumber = 8;
            $secondNumber = 8;
            $sum = $firstNumber + $secondNumber;
            echo "$firstNumber + $secondNumber = $sum";
            ?>
        </li>
    </ul>
</div>

<style>
    [center] {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 80%;
        justify-content: center;
    }
    [azul]{
        color: #4286f4;
    }
    [dobro]{
        font-size: 2rem;
        
    }
</style>