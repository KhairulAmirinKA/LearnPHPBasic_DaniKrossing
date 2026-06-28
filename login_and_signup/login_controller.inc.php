<?php

// to prevent type coercion
// example: $x is int. cannot change it to string
declare(strict_types= 1);


function is_input_empty(string $username, string $password){

    return empty($username) || empty($password);
}


function is_username_exist(bool|array $result){

    if ($result){
        return true;
    }
    return false;
}


function is_password_correct(string $password, string $hashedPassword){
    return password_verify($password, $hashedPassword);
}