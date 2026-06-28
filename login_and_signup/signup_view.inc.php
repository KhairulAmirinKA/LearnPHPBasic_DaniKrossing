<?php

// to prevent type coercion
// example: $x is int. cannot change it to string
declare(strict_types=1);


function signup_inputs()
{

    if (
        isset($_SESSION['signup_data']['username']) &&
        !isset($_SESSION['errors_signup']['username'])
    ) {

        echo '<input name="username" type="text" id="username" placeholder="first Name"
value="' . $_SESSION['signup_data']['username'] .  '"/> <br><br>';
    }

    else{
        echo '<input name="username" type="text" id="username" placeholder="first Name" /> <br><br>';
    }
}



function check_signup_errors()
{

    if (isset($_SESSION['errors_signup'])) {

        // get the values from session
        $errors = $_SESSION['errors_signup'];


        // show all errors
        foreach ($errors as $error) {
            echo "<p class='form-error'>" . $error . "</p>";
        }

        // after finishing everything, no need to store session variable
        unset($_SESSION['errors_signup']);
    }


    // login_signup_page.php?signup=success
    else if (isset($_GET["signup"]) && $_GET['signup'] === 'success') {
        echo "<p class='form-success'>Signup success</p>";
    }
}
