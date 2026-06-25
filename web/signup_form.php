<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup Form</title>
</head>
<body>

    <form action="../includes/signup_handler.inc.php" method="POST">

        <label for="username">Username</label>
        <input name="username" type="text" id="username" placeholder="first Name" /> <br><br>

        <label for="password">Password</label>
        <input type="text" name="password" id="password" placeholder="Password" /> <br><br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" /> <br><br>
    

        <button type="submit" name="submit">Signup</button>
        
    </form>
    
</body>
</html>