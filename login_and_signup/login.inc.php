<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        // db connection
        require_once __DIR__ . "/../includes/dbhost.inc.php";

        // model and controller
        require_once __DIR__ . "/login_controller.inc.php";
        require_once __DIR__ . "/login_model.inc.php";

        //error handlers
        $errors = [];

        if (is_input_empty($username, $password)){
            $errors['empty_inputs'] = "Please fill in all fields";
        }


        // session management
        require_once __DIR__ . "/../config/session_config.php";

        if ($errors){

            // store in session
            $_SESSION['login_errors'] = $errors;

             // go to main page
            header("Location: login_signup_page.php");

            die();
        }

    } catch (PDOException $e) {
        echo "Connection failed " . $e -> getMessage();
    }
}

else{
    header("Location: login_signup_page.php");

    die();
}