<?php

// to prevent type coercion
// example: $x is int. cannot change it to string
declare(strict_types=1);


// validate empty inputs
function is_input_empty(string $username, string $password, string $email)
{

    return (empty($username) || empty($password) || empty($email));
}


// validate email
function is_email_valid(string $email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}


// check if username is taken
function is_username_taken(object $pdo, string $username)
{

    // get_username is function in signup_model.inc (interact with DB)
    if (get_username($pdo, $username)) {
        return true;
    }
    return false;
}


// check if email is taken
function is_email_registered(object $pdo, string $email)
{

    // get_email is function in signup_model.inc (interact with DB)
    if (get_email($pdo, $email)) {
        return true;
    }
    return false;
}


// create new user
function create_user(object $pdo, string $username, string $password, string $email)
{

    create_user($pdo, $username, $password, $email);
}
