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

    sayHello('Joe');

?>