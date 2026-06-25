<?php

# no need closing tag for PHP script

// datasource_name 
$dsn = "mysql:host=localhost;dbname=myfirst_db";

$db_username= "root";
$db_password="";

try {
    // PDO= PHP Data Object. to connect to DB
    $pdo = new PDO($dsn, $db_username, $db_password);

    // if we get error, throw exception
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection success";

} catch (PDOException $e) {
    echo "Connection failed " . $e -> getMessage();
}
