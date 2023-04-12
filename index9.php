<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php

    for ($i = 0; $i < 10; $i++)
        echo $i . ",";

    echo "<br>";

    $i = 1; // Створення змінної
    while ($i <= 10) { // Тільки умова
        echo $i . ",";
        $i++; // Збільшення змінної
    }

    echo "<br>";

    $x = 13;
    do {
        $x--;
        echo $x . ",";
    } while ($x > 10);

    echo "<br>";

    // Оператори в циклах
    for ($el = 100; $el > 10; $el /= 2) {
        if ($el < 15)
            break;

        if ($el % 2 == 0)
            continue;

        echo $el . "<br>";
    }

    $list = [5, 7, 3, 8, "some", 45.7];

    for ($i = 0; $i < count($list); $i += 1) {
        echo "Element $i: $list[$i]" . "<br>";
    }

    echo "<br>";

    $asList = ["age" => 45, "name" => "Alex", "hobby" => "football"];

    foreach ($asList as $item => $value) {
        echo "Key: $item, Value: $value <br>";
    }

    ?>

</body>

</html>