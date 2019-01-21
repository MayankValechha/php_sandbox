<?php

    $msg = '';
    $msgClass = '';

    // Checking for any submit name exists.
    if(filter_has_var(INPUT_POST,'submit')) {
        
        // Input Variables
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // !empty() checking for the input varibales as not empty.
        if(!empty($email) && !empty($name) && !empty($message)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                //Failed
                $msg = 'Please enter correct email.';
                $msgClass = 'alert-danger';
            }
        }
        else {
            $msg = 'Please fill out fields!';
            $msgClass = 'alert-danger';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <title>My Contact Form</title>
</head>
<body>
    <div class="container">
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>">
                <?php echo $msg; ?>
            </div>    
        <?php endif; ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                <br>
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                <br>
                <label>Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?>  </textarea>
                <br>
                <button class="btn btn-primary" type="submi" name="submit" >Submit</button>
            </div>
        </form>
    </div>

    <div class="container">
        <ul class="list-group">
            <h4>Output Data :</h4>
            <?php if(filter_has_var(INPUT_POST, 'submit')) : ?>
                <li class="list-group-item"><?php echo $_POST['name']; ?></li>
                <li class="list-group-item"><?php echo $_POST['email']; ?></li>
                <li class="list-group-item"><?php echo $_POST['message']; ?></li>
            <?php endif; ?>
        </ul>
    </div>
</body>
</html>