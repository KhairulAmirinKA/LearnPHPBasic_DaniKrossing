<?php

// to prevent type coercion
// example: $x is int. cannot change it to string
declare(strict_types= 1);


function is_input_empty(string $username, string $password){

    return empty($username) || empty($password);
}