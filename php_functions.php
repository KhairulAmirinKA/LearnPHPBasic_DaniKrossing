<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function</title>
</head>

<body>

    <?php

    display_string_functions();
    display_array_functions();
    display_date_functions();


    function display_string_functions()
    {
        echo "<h2>String functions</h2>";

        $sentence = "I am learning PHP";

        echo "Sentence: " . $sentence . "<br>";
        echo "Length: " . strlen($sentence);
        echo "<br>";

        echo "Position of char a: " . strpos($sentence, 'a');
        echo "<br>";

        echo "Replace: " . str_replace("learning", "studying", $sentence);
        echo "<br>";

        echo $sentence;
        echo "<br>";

        echo "Substring: " . substr($sentence, 2, 2);
        echo "<br>";


        echo "split(explode) into array: ";
        print_r(explode(" ", $sentence));
        echo "<br>";
    }


    function display_array_functions()
    {

        echo "<h2>Array functions</h2>";

        $fruits = ["Apple", "Orange", "Banana"];

        print_r($fruits);
        echo "<br>";

        echo "Count: " . count($fruits);
        echo "<br>";

        echo "Is array? " . is_array($fruits);
        echo "<br>";

        echo "Reverse array: ";
        print_r(array_reverse($fruits));
        echo "<br>";

        print_r($fruits);
        echo "<br>";

        $test = ["Mango", "straweberi"];
        echo "Merge array: ";
        print_r(array_merge($fruits, $test));
        echo "<br>";
    }


    function display_date_functions()
    {

        echo "<h2>Date functions</h2>";

        echo "Date: " . date("Y-m-d H:i:s");
        echo "<br>";
    }


    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";



    ?>
</body>

</html>