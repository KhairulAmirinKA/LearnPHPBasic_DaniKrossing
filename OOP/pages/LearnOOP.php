<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    
<?php 

require_once __DIR__ . "/../classes/Car.php";

$car1 = new Car("BMW", "Green");

$car1 -> set_brand("VOLVO");
$car1 -> set_color("Red");

echo $car1 -> get_brand() . " ";
echo $car1 -> get_color();

?>
</body>
</html>