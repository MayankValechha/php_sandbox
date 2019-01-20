<?php 
    $loggedIn = false;
    $arrayy = [10,20,30,40,50]; 

    //Ternary 
    echo ($loggedIn) ? 'You are Logged In!' : 'Not Logged in!';
?>

<!-- Wrting PHP Inside Html -->
<!-- This Colon Method is called as PHP templates method. -->

<!-- Templates method doesn't save us line, but makes code more readable. -->
<div>
    <?php if($loggedIn): ?>
        <h2>Welcome User</h2>
    <?php else: ?>
        <h2>Welcome Guest</h2>
    <?php endif; ?>
</div>

<div>
    <?php foreach($arrayy as $value): ?>
       <?php echo $value.'<br><br>'; ?>
    <?php endforeach; ?>
</div>
