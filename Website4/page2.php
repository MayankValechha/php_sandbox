<?php
    // On every page we want to use session, we have to start session, by calling session_start();
    session_start();
    
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>

<?php include 'includes/header.php'; ?>
    <h4>Hello <?php echo $name;  ?>! , You have suceesfully subscribed us with the email : <?php echo $email; ?></h4>
<?php include 'includes/footer.php'; ?>