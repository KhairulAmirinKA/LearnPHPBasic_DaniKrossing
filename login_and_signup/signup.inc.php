<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
        $errors = [];

        if (is_input_empty($username, $password, $email)) {
            $errors["empty_input"] = "Fill in all fields";
        }

        if (!is_email_valid($email)) {
            $errors["invalid_email"] = "Invalid email used";
        }

        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken";
        }

        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "email already registered";
        }

        // import config file to start session
        require_once __DIR__ . "/../config/session_config.php";

        // if there are errors
        if ($errors) {
            $_SESSION["errors_signup"] = $errors;

            header("Location: login_signup_page.php");

            // dont forget to exit script
            die();
        }


        // call create_user from controller
        create_user($pdo, $username, $password, $email);


        // after finish
        header("Location: login_signup_page.php?signup=success");

        $pdo = null;
        
        // exit script
        die();

    } catch (PDOException $e) {
        echo "Connection failed. " . $e->getMessage();
    }
} else {
    header("Location: login_signup_page.php");
}
