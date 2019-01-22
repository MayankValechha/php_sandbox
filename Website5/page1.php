<?php
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];

        // (Name of Cookie, Value of Cookie, Expiration of Cookie)
        setcookie('username', $username, time() + 3600);

        // 1 Hour = Current time() + 3600 seconds

        // Going to other page.
        header('Location: page2.php');
    }

?>

<?php include '../includes/header.php'; ?>
<div class="container">
    <h3>PHP Cookies</h3>
    <form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                
                <input type="text" name="username" class="form-control" placeholder="Enter your Username">
                <br>
                
                <button class="btn btn-primary" type="submit" name="submit" >Submit</button>
            </div>
        </form>
</div>

<?php include '../includes/footer.php'; ?>