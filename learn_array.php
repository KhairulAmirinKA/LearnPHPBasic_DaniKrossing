<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Array</title>
</head>
<body>
    
<?php 

$fruits = array("apple", 'oren', "pisang");

$newFruits = array_splice($fruits, 0, 1);

echo "fruits: ";
foreach ($fruits as $fruit){
    echo $fruit . ",";
}

echo "<br>new Fruits: ";
foreach ($newFruits as $fruit){
    echo $fruit;
}

echo "<br>";

// add new element
array_push($fruits, "mango");

print_r($fruits);


echo "<h2>Assosiative Array</h2>";

$subjects = [
    "WIA1002" => "FOP",
    "WIA1006" => "ML",
    "WIA1007" => "IDS",
    "WIA1005" => "NTF"
];

$subjects["GIG1012"] = "Falsagag";

// print info about variable
print_r($subjects);



echo "<h2>Array Splice</h2>";

$fruits = ["Apple", "Orange", "Banana"];
$test = ["Mango", "straweberi"];

echo "Original fruits: ";
print_r($fruits);

// 0- remove 0 element from original array
array_splice($fruits, 2,0, $test);

echo "<br>";

echo "New fruits: ";
print_r($fruits);



echo "<h2>Complex Array</h2>";

$arr = [
    "fruits" => array("Limau", "Oren", "Epal"),
    "student" => array("Josh", "Liza", "Kelsey"),
    "vehicle" => array("Car", "Lorry")
];

print_r($arr["fruits"]);

?>
</body>
</html>