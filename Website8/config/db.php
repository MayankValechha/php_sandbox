<?php 
    
    include ('config/config.php');
    //Creating a Connection with the database.
    $conn = mysqli_connect('localhost','root','123456','blog');

    //Check the connection
    //mysqli_connect_errno() gives error and error number.

    if(mysqli_connect_errno()){
        //Connection Failed.
        echo 'Failed to Connect to MYSQL '.mysqli_connect_errno();
    }

?>