<?php

require_once __DIR__ . "/../config/session_config.php";
require_once __DIR__ . "/signup_view.inc.php";
require_once __DIR__ . "/login_view.inc.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup</title>

    <style>
        body {
            max-width: 600px;
            margin: 0 auto;
        }

        div {
            margin-top: 2rem;
            border: 1px solid black;
        }

        .form-error {
            color: red;
        }
        
        .form-success {
            color: green;
        }
    </style>
</head>

<body>
    <div class="create-user">

        <h1>Signup user</h1>
        <form action="signup.inc.php" method="POST">

            <label for="username">Username</label>
            <input name="username" type="text" id="username" placeholder="first Name" /> <br><br>

            <label for="password">Password</label>
            <input type="text" name="password" id="password" placeholder="Password" /> <br><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" /> <br><br>


            <button type="submit" name="submit">Signup</button>

        </form>

        <?php

        // function from signup_view
        check_signup_errors();
        ?>
        
    </div>



    <div class="login-user">
        <h1>Login user</h1>
        <form action="login.inc.php" method="POST">

            <label for="username">Username</label>
            <input name="username" type="text" id="username" placeholder="first Name" /> <br><br>

            <label for="password">Password</label>
            <input type="text" name="password" id="password" placeholder="Password" /> <br><br>

            <button type="submit" name="submit">Login</button>

        </form>

        <?php 

        // from login_view
        check_login_errors();
         ?>
    </div>



</body>

</html>