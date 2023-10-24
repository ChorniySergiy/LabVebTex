<!DOCTYPE html>
<html>
    <head>
        <title>Lab16_Chorniy</title>
        <style>
            div{ 
                margin: 0 auto;
                display: flex;
                text-align: center;
                background-color: aquamarine;
                border: 5px solid;
                height: 200px;
                width:  600px;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <center>
            <a href="Index.html">
                Назад <br>
            </a>
            <p>Група СПс-41, Чорний Сергій Сергійович</p>
            <p>Дата створення документу 17/10/2023</p>
            <p>Створити web-документ для вирішення задачі з використанням PHP оператора switch-case згідно варіанту.</p>
            <p><a>11.</a>У матриці А знайти значення максимального додатного елемента. Обчислити нову матрицю, елементи якої дорівнюють часткам від ділення елементів матриці А на знайдене значення максимального додатного елемента. У новій матриці обчислити добуток елементів першого і другого рядків та суму від’ємних елементів. Визначити в них більше значення в добути з нього корінь кубічний. </p>
            <p>    [2.5, -7.2,  8.1, 4.2]</p>
            <p>A = [3.5, -3.2, -1.2, 2.1]</p>
            <p>    [6.1,  5.1, -2.1, 5.2]</p>
        </center>
        <?php
        $A = [[2.5, -7.2, 8.1, 4.2],
            [3.5, -3.2, -1.2, 2.1],
            [6.1, 5.1, -2.1, 5.2] ];

        $max = 0;
        foreach ($A as $row) {
            foreach ($row as $elem) {
                if ($elem > 0 && $elem > $max) {
                    $max = $elem;
                }
            }
        }

        ?>
        <div>
        <?php 
            echo "Максимальне додатнє значення A : ".$max."\n";
        ?>
        </div>
        <?php 

        $A_new = [];
        foreach ($A as $row) {
            $new_row = array();
            foreach ($row as $elem) {
                $new_row[] = $elem / $max;
            }
            $A_new[] = $new_row;
        }


        ?>
        <div>
        <?php 
            echo "Нова матриця A:\n";
            echo "\n";
            foreach ($A_new as $row) {
                foreach ($row as $elem) {
                    echo $elem . ";   ";
                }
                echo "\n";
            }    
        ?>
        </div>
        <?php 

        $product = $A_new[0][0] * $A_new[1][0];

        ?>
        <div>
        <?php 
           echo "Добуток елементів першого і другого рядків: ".$product."\n";
        ?>
        </div>
        <?php 

        $sum = 0;
        foreach ($A_new as $row) {
            foreach ($row as $elem) {
                if ($elem < 0) {
                    $sum += $elem;
                }
            }
        }
        
        ?>
        <div>
        <?php 
            echo "Сума від'ємних елементів: ".$sum."\n";
        ?>
        </div>
        <?php 

        $cubic = pow($product, 1 / 3);
        
        ?>
        <div>
        <?php 
           echo "Кубічний корінь з добутку: ".$cubic."\n";
        ?>
        </div>
    </body>
</html>