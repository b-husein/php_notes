<?php 

# CONDITIONALS are important part of programming in general; 
// used for test of value, comparing several values etc.

/* 
Different types of comparison operators:
     
    == double equals
    === triple equals - matches value and data type
    < less than
    > greater than
    <= less than or equals to
    >= greater than or equals to
    != not equal
    !== not identical
*/

/* $num = 6; 

if($num != 5){
    echo 'true';
} else {
    echo 'false';
} */

// if we want to test for another value
// we can implement else if

/* $num = 6;

 if($num == 5){
    echo '5 passed';
} elseif($num == 6){
    echo '6 passed';
} else {
    echo 'did not pass';
} */

# NESTING if statements

$num = 6; 

if ($num > 4){
    if($num < 10){
        // echo "$num passed";
    }
}

// more simple way is to use logical operators; 

/*
LOGICAL OPERATORS

&& and 
|| or - one has to be true
xor - where one has to be true but not both;

if($num > 4 XOR $num < 10){
    echo "$num passed";
}

*/

# SWITCHES
// will test for value with different cases
// and depending on which case matches
// it will do something; 

$favColor = 'green'; 

switch($favColor) {
    case 'red': 
        echo 'Your favorite color is red'; 
    break; 
    case 'blue': 
        echo 'Your favorite color is blue'; 
    break;
    case 'green': 
        echo 'Your favorite color is green'; 
    break;
    default: 
        echo 'Your favorite color is something else'; 
}





?>