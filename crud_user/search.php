<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $username = $_POST["username"];

    // db connection
    try {
        require_once __DIR__ . "/../includes/dbhost.inc.php";

        $query = "SELECT * FROM comments WHERE username= :username;";

        $statement = $pdo->prepare($query);

        $statement->bindParam(":username", $username);
        $statement->execute();

        // FETCH_ASSOC. fetch as associative array
        /* example: 
        Array
(
    [email] => 'youremail@yourhost.com'
    [password] => 'yourpassword'
)
    */
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);


        $pdo = null;
        $statement = null;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: crud_user/search_form.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search results</title>

    <style>
        div{
            border: 1px solid black;
            margin: 2rem auto;
            max-width: 600px;
        }
        </style>
</head>

<body>

    <h3>Search results</h3>

    <?php

    if (empty($results)) {
        echo "<div>
<p>No result</p>
</div>
";
    } else {

        echo "<br><br>";
        print_r($results);

        echo "<br><br>";

        foreach ($results as $row) {
            echo "<div>";

            echo "<h4>". htmlspecialchars($row['username']) . "</h4>";
            echo "<p>". htmlspecialchars($row["comment_text"]) . "</p>";
            echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";

            echo "</div>";
        }
    }


    ?>
</body>

</html>