<!DOCTYPE html>
<html>
    <head>
        <title>Lab14_Chorniy</title>
        <style>
            div{ 
                margin: 0 auto;
                display: flex;
                text-align: center;
                background-color: aquamarine;
                border: 5px solid;
                height: 100px;
                width:  200px;
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
            <p>Дата створення документу 5/10/2023</p>
            <p>Створити web-документ для вирішення задачі з використанням PHP оператора switch-case згідно варіанту.</p>
            <p><a>11.</a> y = a/b/c/x + tan(x^3)+ 1/tan(a*max(a,b,c));.</p>
           
        </center>
        <?php

        $a = 1;
        $b = 2;
        $c = 46;
        $x = 4;

        for($i = 0; $i < 10; $i++){

            $y = $a/$b/$c/$x + tan($x^3)+ 1/tan($a*max($a,$b,$c));
            ?>
            <div>
            <?php
            echo "Змінні на цій ітерації \n";
            echo "a=",$a," b=",$b," c=",$c," x=",$x,"\n";
            echo "Значення функції \n";
            echo $y,"\n";
            ?>
            </div>
            
            <?php
            
            $a += 2;
            $b += 4;
            $c -= 5;
            $x += 3;

        }
        ?>
    </body>
</html>