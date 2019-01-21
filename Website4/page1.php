<?php
    if(isset($_POST['submit'])) {
        // session_start starts the session.
        session_start();

        // Grabing POST values and putting them into $_SESSION superglobal varible.
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        // header(); function can redirect to another page.
        header('Location: page2.php');

        //Here we'll be redirected to page2 after submitting the form.
    }
?>
    <?php include 'includes/header.php'; ?>

    <div class="container">
        <h3>PHP Sessions</h3>
        <form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                
                <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                <br>
                
                <input type="text" name="email" class="form-control" placeholder="Enter your Email">
                <br>
                
                <button class="btn btn-primary" type="submi" name="submit" >Submit</button>
            </div>
        </form>
    </div>

    <?php include 'includes/footer.php'; ?>
