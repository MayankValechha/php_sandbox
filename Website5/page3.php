<?php
    //Saving multiple values in a cookie.
    //Creating an associative array.

    $user = ['name' => 'Mayank', 'email' => 'test@test.com', 'age' => 21];

        //  setcookie('user', $user, time() + 3600);
    //This won't work, beacuse it only accepts string not array.
    
    //To use this, we have to serialize it.
    $user = serialize($user);
    
    setcookie('user', $user, time() + 3600);
    //Now this works.

    //To view this array.
    $user = $_COOKIE['user'];
    // echo $user['name'];  //This won't work.

    // Unseralize array.
    $user = unserialize($_COOKIE['user']);
    echo $user['name'] . '<br>';
    echo $user['age'] . '<br>';
    echo $user['email'];
?>