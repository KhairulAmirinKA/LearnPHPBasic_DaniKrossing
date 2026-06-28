<?php

// to prevent type coercion
// example: $x is int. cannot change it to string
declare(strict_types=1);


function check_login_errors()
{

    if (isset($_SESSION['login_errors'])) {

        $errors = $_SESSION['login_errors'];

        // iterate
        foreach ($errors as $error){
            echo "<p class='form-error'>" . $error . "</p>";
        }

        unset($_SESSION['login_errors']);
    }

    // login_signup_page.php?login=success
    else if (isset($_GET['login']) && $_GET['login']==='success'){
        echo "<p class='form-success'>Login success</p>";
    }
}
