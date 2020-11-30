<?php 

// echo or print
// the difference is that echo doesn't return value
// while print will return one so we can use it within expressions.

// single line comment
# single line comment
/* Multiple
lines 
comments */

// VARIABLES

# $output = 'Hello PHP';

/* 
    - prefix $
    - Start with a letter or an underscore; 
    - Only letters, numbers and underscores.
    - Case sensitive.
*/

// DATA TYPES 

/*
    - Strings (single or double quotes wrapped)
    - Integers (positive or negative numbers)
    - floats (decimals)
        $float1 = 1.1;
    - Booleans (true or false)
        $bool1 = true;
    - Arrays
    - Objects
    - NULL
    - Resource

*/

// COMBINING VARIABLES; CONCATENATION and using arithmetic;

    # put two numbers together
    $num1 = 4;
    $num2 = 10; 
    $sum = $num1 + $num2;
    #echo $sum; 

    # put two strings together;
    // in this case we use concatenation
    // and as part of syntax we use dot ( . )
    // and if we want to put some space within our strings
    // we would have to concatenate with an empty string
    // in Javascript we would use plus sign ( + )
    $string1 = 'Hello';
    $string2 = 'PHP';
    $greeting = $string1 .' '. $string2.'!'; 
    #echo $greeting;
    
    // the other way is by using double quotes
    // where double quotes will parse variables
    $greeting2 = "$string1 $string2";
    #echo $greeting2; 

    # escape sequences; 
    //by using backslash in front of characters;
    $string3 = 'They\'re Here';
    #echo $string3;
    // other way is to use combination of 
    // double and single quotes; 
    // $string3 = "They're here";

// CONSTANTS 
    // the difference between constants
    // and variables is that variable can change
    // while constants are used for values that 
    // we absolutely know aren't going to change. 
    // ie server name or similar. 

    // in order to create a constant, we will
    // use define() function and write the name 
    // in all uppercase - for first parameter; 
    // and as second parameter the value in lowercase; 
    // constants are case sensitive
    // we can make them case insensitive if we include
    // the third parameter - true;

    define('GREETING', 'Hello PHP', true); 
    echo GREETING;

    // so we should use constant only 
    // if we know that 'Hello PHP' will 
    // never change. 
















?>