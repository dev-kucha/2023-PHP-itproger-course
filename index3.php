<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lesson 3</title>
</head>

<body>
    <?php
    $number = 1;
    // // echo $number;
    $number = 45;
    // // echo $number;
    $num = 0;
    $str = "Змінна";
    // echo $str . ": " . $number . $num;
    $a = 0.5;
    $b = "0.5";
    // echo $a + $b;
    echo $a + floatval($b);

    define('CONST_NUMBER', 24);

    echo CONST_NUMBER;

    ?>

</body>

</html>