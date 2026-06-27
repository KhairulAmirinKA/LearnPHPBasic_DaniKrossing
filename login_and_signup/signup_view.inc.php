<?php

// to prevent type coercion
// example: $x is int. cannot change it to string
declare(strict_types=1);


function check_signup_errors()
{

    if (isset($_SESSION['errors_signup'])) {

        // get the values from session
        $errors = $_SESSION['errors_signup'];


        // show all errors
        foreach ($errors as $error){
            echo "<p class='form-error'>" . $error . "</p>";
        }

        // after finishing everything, no need to store session variable
        unset($_SESSION['errors_signup']);
    }
}
