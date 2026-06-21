<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handling Form</title>
</head>
<body>

    <form action="includes/form_handler.php" method="POST">

        <label for="firstname">Firstname</label>
        <input name="firstname" type="text" id="firstname" placeholder="first Name" /> <br><br>

        <label for="lastname">Last name</label>
        <input type="text" name="lastname" id="lastname" placeholder="Last Name" /> <br><br>

        <label for="favPet">Favorite pet</label>

        <select name="favPet" id="favPet">

            <option value="none">None</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
        </select> <br><br>

        <button type="submit" name="submit">Submit</button>
        
    </form>
    
</body>
</html>