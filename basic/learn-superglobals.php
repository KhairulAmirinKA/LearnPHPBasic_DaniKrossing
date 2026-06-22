<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobal</title>
</head>

<body>
    <h1>Superglobal Variables</h1>
    
    <?php

    echo "DOCUMENT_ROOT: " . $_SERVER["DOCUMENT_ROOT"];

    echo "<br><br>";

    echo "PHP_SELF: " . $_SERVER["PHP_SELF"];

    echo "<br><br>";

    echo "SERVER_NAME: " . $_SERVER["SERVER_NAME"];
    echo "<br><br>";

    echo "REQUEST_METHOD: " . $_SERVER["REQUEST_METHOD"];
    echo "<br><br>";

    ?>
</body>

</html>