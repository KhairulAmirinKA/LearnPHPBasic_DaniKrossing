<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        // import from this file
        require_once "dbhost.inc.php";

        // insert into DB
        // method 1
        // $query = "INSERT INTO users(username,password,email)
        // VALUES(?,?,?);";

        // // pdo is from dbhost.inc.php
        // $statement = $pdo -> prepare($query);

        // $statement -> execute([$username, $password, $email]);


        // method 2
        
        $query = "DELETE FROM users
        WHERE username= :username AND password=:password;" ;

        $statement = $pdo -> prepare($query);

        $statement -> bindParam(":username", $username);
        $statement -> bindParam(":password", $password);

        $statement -> execute();
        


        // after execution, we close the connection
        $pdo = null;
        $statement = null;

        header("Location: ../crud_user/signup_form.php");
        die();

    } catch (PDOException $e) {
        
    die("Query failed: " . $e -> getMessage());
    }
}

else{
    header("Location: ../crud_user/signup_form.php");
}