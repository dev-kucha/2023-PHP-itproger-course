<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lesson 10</title>
</head>

<body>
    <?php

    function info($word)
    {
        echo $word . "<br>";
    }

    info("print test");
    info(258);
    info(-273.456);

    function math($x, $y)
    {
        $res = $x + $y;
        info($res);
    }

    math(5, 10);


    function test2($some_number)
    {
        $some_number *= 2;
        return $some_number;
    }

    echo test2(2.2) . "<br>";


    $some = "Тест";

    function getValue()
    {
        // echo $some; // Ничого не виведе
        global $some;
        echo $some . "<br>"; // Виведе слово "Тест"
    }
    getValue();

    function getNewValue()
    {
        // Створюємо статичну змінну
        static $count = 0;
        $count += 4;
        echo $count . "<br>";
    }

    getNewValue(); // Виведе 4
    getNewValue(); // Виведе 8
    getNewValue(); // Виведе 12
// и так далі
    

    function summary($arr)
    {
        $summa = 0;
        foreach ($arr as $value) {
            $summa += $value;
        }
        return $summa;
    }

    $list = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    echo summary($list) . "<br>";

    echo summary([5, 7, 9]) . "<br>";

    $var = "global";

    function infovar()
    {
        global $var;
        $var = "non local";
    }
    ;

    echo $var . "<br>";
    echo infovar();
    echo $var . "<br>";

    function click()
    {
        // $count = 1;
        static $count;
        $count++;
        echo $count . "<br>";
    }

    click();
    click();
    click();
    click();

    ?>

</body>

</html>