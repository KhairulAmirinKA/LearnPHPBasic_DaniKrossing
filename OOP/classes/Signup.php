<?php

class Signup extends DBHost
{

    private $username;
    private $password;
    private $email;


    public function __construct(string $username, string $password, string $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }


    private function insert_user()
    {
        $query = "INSERT INTO users(username, password, email) 
VALUES (:username, :password, :email);";

        // hash password
        $options = [
            "cost" => 12
        ];

        $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT, $options);

        // parent is DBHost. access connect() from there
        $pdo = parent::connect();

        $statement = $pdo->prepare($query);

        $statement->bindParam(":username", $this-> username);
        $statement->bindParam(":password", $hashedPassword);
        $statement->bindParam(":email", $this-> email);

        $statement->execute();
    }
}
