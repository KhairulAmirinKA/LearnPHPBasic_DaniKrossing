<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// db connection
try {
    require_once __DIR__ . "/../includes/dbhost.inc.php";

    // model and controller
    require_once __DIR__ . "/signup_model.inc.php";
    require_once __DIR__ . "/signup_controller.inc.php";

    // error handlers
    $errors =[];

    if (is_input_empty($username, $password, $email)){
        $errors["empty_input"] = "Fill in all fields";
        echo "<h1>Empty input</h1>";
    }

    if (!is_email_valid($email)){
        $errors["invalid_email"] = "Invalid email used";
         echo "<h1>Invalid  email</h1>";
    }

    if (is_username_taken($pdo, $username)){
        $errors["username_taken"] = "Username already taken";

    }

    if (is_email_registered($pdo, $email)){
        $errors["email_used"] = "email already registered";

    }


    // if there are errors
   

} catch (PDOException $e) {
    echo "Connection failed. " . $e -> getMessage();
}
}

else{
    header("Location: login_signup_page.php");
}