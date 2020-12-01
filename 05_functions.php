<?php 

    #FUNCTION - A block of code that can be repeatedly called; 

    /*
    Different ways to format functions, variables etc.

    1) Camel Case - myFunction();
    2) Lower Case - my_function(); 
    3) Pascal Case - MyFunction();
    */

    // to define function we will use keyword function and then name it; 

    function simpleFunction(){
        // echo 'Hello PHP';
    }
    
    // call it, or run it:
    simpleFunction(); 

    // we can include values like parameters; 
    // or we can include a parameter with a default value;
    function sayHello($name = 'PHP'){
        echo "Hello $name<br>";
    }

    // sayHello('Joe');

    // we can also RETURN values from functions
    // and that is what we usually do while programming; 

    function addNumbers($num1, $num2){
       return $num1 + $num2; 
    }

    // echo addNumbers(2, 3);

    // Passing arguments by reference; 

    $myNum = 10; 

    function addFive($num){
        $num += 5;
    } 

    function addTen(&$num){
        $num += 10; 
    }

    addFive($myNum);
    
    echo "Value: $myNum<br>";

    addTen($myNum);

    echo "Value: $myNum<br>";

?>