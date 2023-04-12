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

    $i = 1; // Создание переменной
    while ($i <= 10) { // Здесь только условие
        echo $i . ",";
        $i++; // Увеличение переменной
    }

    echo "<br>";

    $x = 13;
    do {
        $x--;
        echo $x . ",";
    } while ($x > 10);
    ?>

</body>

</html>