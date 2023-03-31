<?php
    // check for posted data
    if (filter_has_var(INPUT_POST, 'data'))
    {
        echo 'Data found<br>';
    }
    else
    {
        echo 'No data<br>';
    }

    if (filter_has_var(INPUT_POST, 'data'))
    {
        // sanitize data
        $email = $_POST['data'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email . '<br>';

        // validation
        if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL))
        {
            echo 'Valid email<br>';
        }
        else
        {
            echo 'Not an email<br>';
        }
        // or using filter_var
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            echo 'Valid email<br>';
        }
        else
        {
            echo 'Not an email<br>';
        }
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
<form method="post" action="filters.php">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>
</body>
</html>