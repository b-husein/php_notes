<?php 
    # LOOPS 
    // are part of every programming language
    // and what they do is execute a block of code
    // for a set number of times based on some kind of condition; 

    /*
    There are 4 different types of loops: 

        1) For loop
        2) While
        3) do while
        4) Foreach

    */

    # 1) For loop 
    // usually used if we know number of times it will be executed
    // and it has couple of params and it takes in initializer, condition and increment.
    // @params - init; condition; inc

    for($i = 0; $i <= 10; $i++){
        // echo $i;
        // echo '<br>';
    }

    # 2) While loop
    // while loop, as parameter will only take condition.
    // and also we will set a variable outside of the loop
    # @params - condition

    $i = 0;

    while($i <= 10){
        // echo $i; 
        // echo '<br>';
        $i++;
    }

    # 3) do while loops
    // aren't used as much
    // @params - condition
    // do while will always run at least once

    $i = 0;

    do{
        // echo $i; 
        // echo '<br>';
        $i++; 
    }

    while($i <= 10);

    # 4) Foreach
    // is a different type of loop because it's meant to work with arrays; 

    $people = array('Brad', 'Jose', 'William');

    // now we want to be able to loop through this array 
    // and access the value
    // so we will say, for indexed array: 

    foreach($people as $person){
        // echo $person;
        // echo '<br>';
    }

    // for associative array
    // let's have a name as the key
    // and email address as a value;

    $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'will@gmail.com');
    
    foreach($people as $person => $email){
        echo $person.': '.$email;
        echo '<br>';
    }





?>