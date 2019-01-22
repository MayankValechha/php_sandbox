<?php

    //Setting Cookies
    setcookie('username', 'Mayank', time() + 3600);
    
    //Removing Cookies by passing the time which is passed.
    // UNCOMMENT THIS TO DELETE COOKIE
    // setcookie('username', 'Mayank', time());

    //Checking if username is set in Cookie or not
    if(isset($_COOKIE['username'])) {
        echo 'User is Set <br>';
    } else {
        echo 'User is not Set. <br>';
    }

    //Counting Number of Cookies
    if(count($_COOKIE) > 0){
        echo 'There are '. count($_COOKIE) .' number of cookies are saved';
    } else {
        echo 'There are no cookies.';
    }
?>

<?php include '../includes/header.php'; ?>
<div class="container">
    <h3>You're on Page 2.</h3>

    <!-- Echoing name of Cookies -->
    <?php echo 'User ' . $_COOKIE['username'] . ' is set. <br>'; ?>
</div>
<?php include '../includes/footer.php'; ?>