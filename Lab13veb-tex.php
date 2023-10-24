<!DOCTYPE html>
<html>
    <head>
        <title>Lab13_Chorniy</title>
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
            <p>Дата створення документу 29/09/2023</p>
            <p>Створити web-документ для вирішення задачі з використанням PHP оператора switch-case згідно варіанту.</p>
            <p><a>11.</a> За номером дня в тижні вивести повідомлення „робочий, вихідний”.</p>
           
        </center>
        <?php
        $x = rand(1,7);

        switch($x){
        case 1:
            echo "<div>Понеділок: Робочий</div>";
            break; 
        case 2:
            echo "<div>Вівторок: Робочий</div>";
            break; 
        case 3:
            echo "<div>Середа: Робочий</div>";
            break; 
        case 4:
            echo "<div>Четверт: Робочий</div>";
            break; 
        case 5:
            echo "<div>П'ятніця: Робочий</div>";
            break;
        case 6:
            echo "<div>Субота: Вихідний</div>";
            break;
        case 7:
            echo "<div>Неділя: Вихідний</div>";
            break; 
        }
        ?>
    </body>
</html>
