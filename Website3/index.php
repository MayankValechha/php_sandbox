<?php
    // Checking for any submit name exists.
    if(filter_has_var(INPUT_POST,'submit')) {
        
        // Input Variables
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // !empty() checking for the input varibales as not empty.
        if(!empty($email) && !empty($name) && !empty($message)){
            // Passed
            echo $name;
            echo $email;
            echo $message;
        }
        else {
            echo 'Not Completed';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
    <title>My Contact Form</title>
</head>
<body>
    <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
                <br>
                <label>Email</label>
                <input type="email" name="email" class="form-control">
                <br>
                <label>Message</label>
                <textarea name="message" class="form-control" ></textarea>
                <br>
                <button class="btn btn-primary" type="submi" name="submit" >Submit</button>
            </div>
        </form>
    </div>
</body>
</html>