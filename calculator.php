<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

    <style>
        .calc-error{
            color: red;
        }
    </style>
    
</head>

<body>

    <form action="<?php
                    echo htmlspecialchars($_SERVER["PHP_SELF"]);
                    ?>" method="POST">

        <label for="numOne">First Number</label>
        <input name="numOne" type="number" id="numOne" placeholder="first Number" /> <br><br>


        <label for="operator">Operator</label>
        <select name="operator" id="operator">

            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">x</option>
            <option value="divide">/</option>
        </select> <br><br>


        <label for="numTwo">2nd Number</label>
        <input type="number" name="numTwo" id="numTwo" placeholder="2nd number" /> <br><br>

        <button type="submit" name="submit">Submit</button>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // grab data from form
        // make sure the input is float
        $numOne = filter_input(INPUT_POST, "numOne", FILTER_SANITIZE_NUMBER_FLOAT);

        $numTwo = filter_input(INPUT_POST, "numTwo", FILTER_SANITIZE_NUMBER_FLOAT);

        $operator = htmlspecialchars($_POST["operator"]);


        // error handling
        $errors = false;

        if (empty($numOne) || empty($numTwo) || empty($operator)) {
            echo "<p class='calc-error'>Fill in all fields</p>";

            $errors = true;
        }

        // check numeric
        if (!is_numeric($numOne) || !is_numeric($numTwo)) {
            echo "<p class='calc-error'>Only wirte numbers</p>";
            $errors = true;
        }


        // if no error, can perform calculation
        if (!$errors) {

        $value = 0;

            switch ($operator) {

                case "add":
                    $value = $numOne + $numTwo;
                    break;

                case "subtract":
                    $value = $numOne - $numTwo;
                    break;

                case "multiply":
                    $value = $numOne * $numTwo;
                    break;

                case "divide":
                    $value = $numOne / $numTwo;
                    break;

                default:
                    echo "<p class='calc-error'>Something went wrong</p>";
            }

            // show result
            echo "<p class='calc-result'>Result= " . $value. "</p>";
        }
    }

    ?>
</body>

</html>