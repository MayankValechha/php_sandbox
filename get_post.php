<?php
    if(isset($_GET['name'])) {
        echo htmlentities($_GET['name']);
        echo $name;
    }

    if(isset($_POST['name'])) {
        $name = htmlentities($_POST['name']);
        echo $name;
    }

    if(isset($_REQUEST['name'])) {
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="get_post.php">
        <label>Name</label><br>
        <input type="text" name="name">
        <br>
        <label>Email</label><br>
        <input type="email" name="email">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>