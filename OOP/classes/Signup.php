<?php

class Signup extends DBHost
{

    private string $username;
    private string $password;
    private string $email;


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

        $statement->bindParam(":username", $this->username);
        $statement->bindParam(":password", $hashedPassword);
        $statement->bindParam(":email", $this->email);

        $statement->execute();

        echo "Insert successful";
    }


    // error handlers
    private function is_input_empty()
    {

        return empty($this->username) || empty($this->password)
            || empty($this->email);
    }


    public function signup_user()
    {

        if ($this->is_input_empty()) {
            header("Location: " .
                '../pages/SignupPage.php');
            die();
        }

    
        // if no error, insert user to DB
        $this -> insert_user();
    }
}
