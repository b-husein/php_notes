<?php
    # Array - variable that can hold multiple values. 

    /* 
        Three types of arrays: 

        1) Indexed
        2) Associative
        3) Multi-dimensional
    
    */

    // 1) INDEXED ARRAYS

    $people = array('Kevin', 'Jeremy', 'Sara');
    // to access one of these using index values;
    // have in mind that arrays are zero based.
    // echo $people[1];

    $ids = array(23, 55, 12);
    // echo $ids[2];

    # Another way to write arrays, without using array function;
    // but it's equivalent to using array function; 
    // and this is a more convenient way;

    $cars = ['Honda', 'Toyota', 'Ford'];
    // add item to array:
    $cars[3] = 'Chevy';
    // add item without using index value:
    $cars[] = 'Mustang';
    // echo $cars[4];

    // FUNCTIONS with Arrays: 

    # count function; 
    // for example, we want to know how many cars
    // we have had in previous array:

    // echo count($cars);

    # print_r function; 
    // which is basically an echo for array
    // it will show us the whole array; 

    // print_r($cars);

    # var_dump();
    // very popular debugging function
    // we can see what kind of data types we have; 

    // var_dump($cars);

    // -------------------------------------------------------------
    
    // 2) ASSOCIATIVE ARRAYS

    // it allows us to define a key and a value; 
    // $arrayName = array('key' => 'value'); 

    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37); 
    // string is a key
    // number is a value

    // to access associative arrays values
    // we will write the following syntax
    // echo $arrayName['key']; 
    // as output we will get a number value from the array.

    // echo $people['Brad'];
    
    // now we will create another array named ids; 
    // we will use another syntax with square brackets
    // and we will set number values to strings

    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
    // echo $ids[22];

    // if we want to add to an array: 
    $people['Jill'] = 42; 
    // echo $people['Jill']; 

    // print_r($people);

    // -------------------------------------------------------------

    // 3) MULTIDIMENSIONAL ARRAYS:

    // it's an array within an array; 

    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12)
    ); 

    // when we echo this out, we will write name of array
    // with two sets of brackets
    // first one will be which index value we want to echo out
    // the second one is the name; 

    // echo $cars[1][2];


?>