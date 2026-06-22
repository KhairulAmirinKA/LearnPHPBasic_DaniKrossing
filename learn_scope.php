<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Scope</title>
</head>

<body>

    <?php

echo "<h2>Global</h2>";
    $num = 90;

    function showNumber()
    {

        global $num;
        return $num;
    }

    function showNumber2(){
        return $GLOBALS['num'];
    }

    echo showNumber();
    echo "<br>";
    echo showNumber2();


    echo "<h2>Static</h2>";

    function increment(){
        static $num = 0;
        $num++;
        return $num;
    }

    for ($i=0; $i<5; $i++){
        echo increment();
        echo "<br>";
    }
    


    ?>
</body>

</html>