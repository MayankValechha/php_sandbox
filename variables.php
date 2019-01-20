<?php

    // VARIABLES
    /* 
        Start with $
        Starts with letter or _
        Letters Numbers and Underscores
        Cannot start with a number.
    */

    $name = "Mayank!";
    echo $name;

    // DATATYPE
    /* 
        String
        Integer
        Float
        Boolean 
    */

    $output = "<h1>Hello World!</h1>";
    echo $output;

    $num1 = 10;
    $num2 = 30;
    $num = $num1 + $num2;
    echo $num;

    $firstName = "Mayank";
    $lastName = "Valechha";
    echo $firstName.' '.$lastName.'!';

    $float1 = 10.5;
    $bool1 = true;
    
    // Defining Constant Keywords
    // CONSTANT MUST BE UPPERCASE
    define('SERVER_NAME', 'BAAAAAAHUBALI! Jai ho!');
    echo SERVER_NAME;

    // Constants are case sensitive, but we can make it insensitive by using 3rd parameter of true in define() function.

    define('SERVER_NAME', 'BAAAAAAHUBALI! Jai ho!',true);
    echo SERVER_Name;
        
?>