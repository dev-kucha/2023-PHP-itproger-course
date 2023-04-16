<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lesson 6</title>
</head>

<body>
    <?php

    $a = 5;
    $str = "Hello";

    $iWantWalk = true;
    $isWeatherGood = false;


    if ($a == 5) {
        echo "$a = 5" . "<br>";
    }

    if ($str != "Hello") {
        echo "YES!" . "<br>";
    } else if ($str == 0) {
        echo "I DO NON KNOW!" . "<br>";
    } else {
        echo "NO!" . "<br>";
    }

    if ($iWantWalk == true && $isWeatherGood == true) {
        echo "I GO WALK!" . "<br>";
    } else if ($iWantWalk && !$isWeatherGood) {
        echo "IT'S RAINED :-(" . "<br>";
    } else {
        echo "some else" . "<br>";
    }


    ?>



</body>

</html>