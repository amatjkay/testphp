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

    consoleLog(123);
    consoleLog("text");
    consoleLog(54.23);
    consoleLog(true);


?>
</body>

</html>
