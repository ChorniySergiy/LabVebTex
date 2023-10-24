<!DOCTYPE html>
<html>
    <head>
        <title>Lab15_Chorniy</title>
        <style>
            div{ 
                margin: 0 auto;
                display: flex;
                text-align: center;
                background-color: aquamarine;
                border: 5px solid;
                height: 100px;
                width:  400px;
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
            <p><a>11.</a> У масиві D знайти максимальні і від’ємні елементи якщо цей елемент більший від – 10, то <br>
            кожний елемент масиву D піднести до квадрата, а якщо навпаки то з кожного елемента масиву добути <br>
            корінь кубічний. Обчислити добуток перших п’яти елементів і суму та координати перших семи елементів <br>
            нового масиву. Визначити з них мінімальне значення і піднести їх до п’ятого степеня..</p>
            <p>D = {6; 8; 12; -5; 4; 3; -8; 1; 8; 5};</p>
            <p><font  color="red" >Оскільки в масив присутні від'ємні масив то при обчислення не даст відповідь отже я зміну на новий маисв 0!</font></p>
        </center>
        <?php
            $D = [6, 8, 12, -5, 4, 3, -8, 1, 8, 5];

            $max_negative = [];
        ?>
        <div>
        <?php 
            echo "Максимальні і від’ємні елементи якщо елемент більший від – 10: " . implode(", ", $max_negative) . "\n";
        ?>
        </div>
        <?php 

            $new_D = [];
        

            foreach ($D as $elem) {
                if ($elem < 0 && $elem > 10) {
                    $max_negative[] = $elem;
                }
            }
            foreach ($D as $elem) {
                if ($elem > 10) {
                    $new_D[] = pow($elem, 2);
                } 
                else if($elem < 0){
                    $new_D[] = 0;
                }
                else {
                    $new_D[] = pow($elem, 1 / 3);
                }
            }

        ?>
        <div>
        <?php 
            echo "Новий масив D: " . implode(", ", $new_D) . "\n";
        ?>
        </div>
        <?php 

            $Dobytoc = array_product(array_slice($new_D, 0, 5));
        
        ?>
        <div>
        <?php 
            echo "Добуток перших п'яти елементів: " . $Dobytoc . "\n";
        ?>
        </div>
        <?php 

            $Sum = array_sum(array_slice($new_D, 0, 7));

        ?>
        <div>
        <?php 
            echo "Сума перши семи елемент: " . $Sum . "\n";
        ?>
        </div>
        <?php

            $Cordinat = array_slice($new_D, 0, 7);
        
        ?>
        <div>
        <?php 
            echo "Координат перших семи елементів: " . implode(", ", $Cordinat) . "\n";
        ?>
        </div>
        <?php

            $Min = min($new_D);
            $Min_do_five = pow($Min, 5);
        
        ?>
        <div>
        <?php 
            echo "Мінімальне значення (".$Min.") до п'ятого ступеня: " . $Min_do_five . "\n";
        ?>
        </div>  
    </body>
</html>