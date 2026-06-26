<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    try {
        // import from this file
        require_once __DIR__ . "/dbhost.inc.php";

        // insert into DB
        // method 1
        // $query = "INSERT INTO users(username,password,email)
        // VALUES(?,?,?);";

        // // pdo is from dbhost.inc.php
        // $statement = $pdo -> prepare($query);

        // $statement -> execute([$username, $password, $email]);


        // method 2
        
        $query = "UPDATE users
        SET username= :username, password=:password, email=:email
        WHERE ID=1;";

        $statement = $pdo -> prepare($query);

        $statement -> bindParam(":username", $username);
        $statement -> bindParam(":password", $password);
        $statement -> bindParam(":email", $email);

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