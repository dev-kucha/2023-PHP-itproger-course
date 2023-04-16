<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lesson 8</title>
</head>

<body>
    <?php

    $some = array(); // Створення порожнього масива
    $some[0] = '1'; // Додавання 1 елемента
    $some[1] = 2; // Додавання 2 елемента
    echo $some[0] . "<br>"; // Вивід першого елемента
    $array = array(1, 5, 2, "Some", true); // Створення масива зі значеннями одразу
    
    $elements = [23, 6, 0, true, "Первый"];
    // Виведе кількість елемнтів у масиві
    echo count($elements) . "<br>";

    $list = array("first" => 1, "second" => "2");
    // Асоціативний масив дозволяє використовувати імена ключів елементів замість цифр
    echo $list["second"] . "<br>";

    $x = array(array(0, 34, 2), array(3, 4, 5)); // Багатомірний масив
    echo $x[0][1] . "<br>"; // Виведе 34
    
    // Можно их сразу не присваивать
    $symbols = array(array(), array());
    $symbols[0][1] = 'A';

    $arr = []

        ?>

</body>

</html>