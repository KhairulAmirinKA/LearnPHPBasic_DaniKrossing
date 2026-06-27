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
