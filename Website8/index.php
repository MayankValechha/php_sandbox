<?php
    //Creating a Connection with the database.
    $connection = mysqli_connect('localhost','root','123456','blog');

    //Check the connection
    if(mysqli_connect_errno()){
        //Connection Failed.
        echo 'Failed to Connect to MYSQL '.mysqli_connect_errno();
    }

?>