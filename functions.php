<?php

    // FUNCTIONS : Block of code that can be repeatedly called.

    /* 
        camelCase();
        lower_case();
        PascalCase();
    */

    // A Simple Function.
    function greeting() {
        echo "<h3>Hello World!</h3>";
    }

    greeting();

    // A function with paramater.
    function sayHelloTo($name){
        echo "Hello ".$name."!";
    }

    sayHelloTo('Mayank');

    // A function with paramater def value.
    function sayHelloTo1($name = "World"){
        echo "Hello ".$name."!";
    }

    sayHelloTo1('Baahu');

    // A function returning value
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    $add = addNumbers(10,20);
    echo $add;

?>