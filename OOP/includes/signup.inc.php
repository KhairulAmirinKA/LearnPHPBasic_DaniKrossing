<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    require_once __DIR__ . "/../classes/DBHost.php";
    require_once __DIR__ . "/../classes/Signup.php";

    $signup = new Signup($username, $password, $email);

}