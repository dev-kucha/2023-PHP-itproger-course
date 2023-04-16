<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lesson 5</title>
</head>

<body>
    <?php
    $str = "Hello";

    echo 'VAR: ' . $str . '!' . "<br>"; // об'єднання аргументів(параметрів)
    echo "VAR: $str" . "<br>"; // змінна в середині стрінги
    echo "<input type='text'>" . "<br>"; // чередування лапок
    echo "<input type=\"text\">" . "<br>"; // екранування
    
    $length = strlen($str);
    echo $length . "<br>";

    echo trim(" Hi, there are no yet. ") . "<br>";

    echo strtolower("ThE wAtHeR iS rAiNeD") . "<br>";
    echo strtoupper("ThE wAtHeR iS rAiNeD") . "<br>";

    echo mb_strtolower("ПоГоДа ДоЩоВа") . "<br>"; // для кирилиці md_
    echo mb_strtoupper("ПоГоДа ДоЩоВа") . "<br>"; // для кирилиці md_
    
    echo strlen(trim(mb_strtoupper(" ПоГоДа ДоЩоВа "))) . "<br>"; // вкладеність
    
    echo md5($str); // хешування
    ?>



</body>

</html>