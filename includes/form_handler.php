<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "kk";

    // prevent code injection inside input field
    $firstname = htmlspecialchars($_POST["firstname"]);

    $lastname = htmlspecialchars($_POST["lastname"]);

    $favPet = htmlspecialchars($_POST["favPet"]);

    if (empty($firstname)) {
        exit();
    }

    // display data
    echo "Firstname: " . $firstname . "<br>";
    echo "lastname: " . $lastname . "<br>";
    echo "favPet: " . $favPet . "<br>";

    // after submitting, redirect user to form page
    header("Location: ../user_form.php");
} 

else {
    header("Location: ../user_form.php");
}


?>
