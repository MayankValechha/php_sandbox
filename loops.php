<?php

    // LOOPS : Used to repeat a task number of times.
    // for loop.
    
    echo "<h6>FOR LOOP</h6><br>";
    for($i = 0; $i < 10; $i++){
        echo $i;
        echo '<br>';
    }

    echo "<h6>WHILE LOOP</h6><br>";
    $i = 0;
    while($i < 10 ){
        echo $i;
        echo '<br>';
        $i++;
    }

    echo "<h6>DO-WHILE LOOP</h6><br>";

    echo "<h6>FOR-EACH LOOP</h6><br>";
    $people = array('Mayank','Aayushi','Sagar','Fayeza','Shiwangee');

    // Singular Form of People is Person
    foreach($people as $person) {
        echo $person;
        echo '<br>';
    }

    $people = array('Mayank' => 9329377750,'Aayushi' => 7566200000,'Sagar' => 8878800000);
    foreach($people as $person) {
        echo $person;
        echo '<br>';
    }