<?php

    // ARRAY : A variable that holds multiple value

    // Array using array function.
    $people = array('Mayank','Aayushi','Sagar');
    echo $people[1];

    $ids = array(12,30,21,54,66);
    echo $ids[1];

    // Array without array function. Both are same!
    $cars =  ['BMW','Jaguar','Audi'];
    echo $cars[1];

    // Adding into Array
    $cars[] = 'Bentley';
    echo $cars[3];

    // Count in Arrays
    echo count($cars);

    //Display whole Array
    print_r($cars);

    //Display whole Array with keys, values, datatype and length.
    var_dump($cars);

    // ASSOCIATIVE ARRAY : Key with values.
    $peoples = array('Mayank' => 20, 'Aayushi' => 20, 'Sagar' => 20);
    echo $peoples['Mayank'];

    $idss = [22 => 'Apple', 23 => 'Banana', 24 => 'Cherry'];
    echo $idss[24];

    // MULTIDIMENSIONAL ARRAY
    $carss = array(
        array('BMW',10,20),
        array('Bentley',30,40),
        array('Chevorlet',50,60)
    );

    echo $carss[2][0];

?>