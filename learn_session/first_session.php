<?php

session_start();

$_SESSION["nama"] = "Bruyne";

unset($_SESSION["nama"]);

session_unset();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn Session</title>
</head>
<body>
    

<?php 
echo $_SESSION["nama"];
?>
</body>
</html>