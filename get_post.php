<?php
    if (isset($_GET['name']))
    {
        echo htmlentities($_GET['name']);
    }

    if (isset($_POST['name']))
    {
        echo htmlentities($_POST['name']);
    }

    if (isset($_REQUEST['name'])) // works for GET and POST
    {
        echo htmlentities($_REQUEST['name']);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>