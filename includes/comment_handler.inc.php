<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $comment = $_POST["comment_text"];

    try {

    // to import from same dir
        require_once __DIR__ . "/dbhost.inc.php";

        $query = "INSERT INTO comments (username, comment_text)
        VALUES (:username, :comment_text);";

        $statement = $pdo -> prepare($query);

        $statement -> bindParam(":username", $username);
        $statement -> bindParam(":comment_text", $comment);

        $statement -> execute();


        // after execution, we close the connection
        $pdo = null;
        $statement = null;

        header("Location: ../crud_user/user_give_comment.php");
        die();
        
    } catch (PDOException $e) {
         die("Query failed: " . $e -> getMessage());
    }

} else {
    header("Location: ../crud_user/user_give_comment.php");
}
