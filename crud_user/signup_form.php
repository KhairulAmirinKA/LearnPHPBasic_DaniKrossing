<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup Form</title>

    <style>
        body {
            max-width: 600px;
            margin: 0 auto;
        }

        div {
            margin-top: 2rem;
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <div class="create-user">

        <h1>CREATE user</h1>
        <form action="../includes/signup_handler.inc.php" method="POST">

            <label for="username">Username</label>
            <input name="username" type="text" id="username" placeholder="first Name" /> <br><br>

            <label for="password">Password</label>
            <input type="text" name="password" id="password" placeholder="Password" /> <br><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" /> <br><br>


            <button type="submit" name="submit">Signup</button>

        </form>
    </div>


    <div class="update-user">
        <h1>UPDATE user</h1>
        <form action="../includes/update_user_handler.inc.php" method="POST">

            <label for="username">Username</label>
            <input name="username" type="text" id="username" placeholder="first Name" /> <br><br>

            <label for="password">Password</label>
            <input type="text" name="password" id="password" placeholder="Password" /> <br><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" /> <br><br>


            <button type="submit" name="submit">Update</button>

        </form>
    </div>



    <div class="update-user">
        <h1>DELETE user</h1>
        <form action="../includes/delete_user_handler.inc.php" method="POST">

            <label for="username">Username</label>
            <input name="username" type="text" id="username" placeholder="first Name" /> <br><br>

            <label for="password">Password</label>
            <input type="text" name="password" id="password" placeholder="Password" /> <br><br>

            <button type="submit" name="submit">DELETE</button>

        </form>
    </div>


</body>

</html>