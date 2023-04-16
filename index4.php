<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lesson 4</title>
</head>

<body>
    <?php
    $x = 10;
    $y = 20;
    echo $x + $y . '<br>';
    echo $x - $y . '<br>';
    echo $x * $y . '<br>';
    echo $x / $y . '<br>';
    echo $x % $y . '<br>';

    $x += 10; // $x = $x + 10
    echo $x . '<br>';
    $y -= 10; // $y = $y - 10
    echo $y . '<br>';

    $x++; // $x = $x + 1
    $y--; // $y = $y - 1
    
    echo M_PI . '<br>';
    echo M_E . '<br>';

    echo abs(-22) . '<br>'; // модуль
    
    echo round(1.55555555, 3) . '<br>'; // округлення
    echo ceil(3.1) . '<br>'; // округлення до більшого
    echo floor(3.9) . '<br>'; // округлення до меншого
    
    $rand = mt_rand(1, 20); // довільне число в діапазоні
    echo $rand . '<br>';

    $min = min(10, 20, 30, 5, 3, 150);
    echo $min . '<br>';

    ?>



</body>

</html>