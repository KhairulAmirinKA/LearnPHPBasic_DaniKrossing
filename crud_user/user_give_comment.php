<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Comment</title>
<style>
        body {
            max-width: 600px;
            margin: 0 auto;
        }

        div {
            margin-top: 2rem;
            border: 1px solid black;
        }

        textarea{
            padding: 2rem;
            font-size: 1rem;
        }
    </style>
</head>

<body>

    <div class="create-user">

        <h1>User Give Comment</h1>
        <form action="../includes/comment_handler.inc.php" method="POST">

            <label for="username">Username</label>
            <input name="username" type="text" id="username" placeholder="first Name" /> <br><br>

            <label for="comment_text">Comment</label>
            <textarea rows="10" cols="40" name="comment_text" placeholder="Write yor comment"></textarea>

            <button type="submit" name="submit">Post Comment</button>

        </form>
    </div>

</body>
</html>