<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

        if (is_input_empty($username, $password)) {
            $errors['empty_inputs'] = "Please fill in all fields";
        }


        // get user from DB
        $result = get_user($pdo, $username);

        // login with user not exists
        if (!is_username_exist($result)) {
            $errors['incorrect_username'] = "Username does not exist";
        }

        // correct username but wrong password
        if (
            is_username_exist($result) &&

            // password is column in DB
            !is_password_correct($password, $result['password'])
        ) {
            $errors['incorrect_password'] = "Wrong password";
        }



        // session management
        require_once __DIR__ . "/../config/session_config.php";

        if ($errors) {

            // store in session
            $_SESSION['login_errors'] = $errors;

            // go to main page
            header("Location: login_signup_page.php");

            die();
        }
    } catch (PDOException $e) {
        die("Connection failed " . $e->getMessage());
    }
} else {
    header("Location: login_signup_page.php");

    die();
}
