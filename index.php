<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learning</title>
</head>

<body>
    <?php

    function consoleLog($argc)
    {
        echo "$argc<br>";
    }

    // consoleLog(123);
    // consoleLog("text");
    // consoleLog(54.23);
    // consoleLog(true);

    function math($x, $y)
    {
        return $x + $y;
    };

    $res1 = math(12, 12);
    $res2 = math(10, 15);

    // consoleLog($res1);
    // consoleLog($res2);

    function summ($arr) {
        $sum = 0;
        foreach ($arr as $value) {
            $sum += $value;
        }

        return $sum;
    }

    $list1 = [5,7,3];
    $list2 = [23.345,7.56,10];

    echo consoleLog(summ($list1));
    echo consoleLog(summ($list2));

    ?>
</body>

</html>