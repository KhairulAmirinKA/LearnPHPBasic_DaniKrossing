<?php

// to prevent type coercion
// example: $x is int. cannot change it to string
declare(strict_types=1);


function get_username(object $pdo, string $username)
{

    $query = "SELECT username FROM users WHERE username=:username;";

    $statement = $pdo->prepare($query);

    $statement->bindParam(":username", $username);

    $statement->execute();


    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}


function get_email(object $pdo, string $email)
{

    $query = "SELECT email FROM users WHERE email=:email;";

    $statement = $pdo->prepare($query);
    $statement->bindParam(":email", $email);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}


// insert new user to DB
function set_user(object $pdo, string $username, string $password, string $email)
{

    $query = "INSERT INTO users(username, password, email) 
VALUES (:username, :password, :email);";


    // hash password
    $options = [
        "cost" => 12
    ];

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);


    $statement = $pdo->prepare($query);

    $statement->bindParam(":username", $username);
    $statement->bindParam(":password", $hashedPassword);
    $statement->bindParam(":email", $email);

    $statement->execute();
}
