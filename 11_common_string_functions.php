<?php 
    // We will take a look at some different functions that PHP has to offer

    # substr() 
    // Returns a portion of a string; 

    $output = substr('Hello', 0, 3);
    // output will be 'Hel' because it starts at index position of 0; 
    // and ends at index position of 3;
    // if we want to start from back, we can do that as well
    // by using negative numbers
    $output = substr('Hello', -2);
    // echo $output;

    # strlen()
    // Returns the length of a string

    $output = strlen('Hello PHP');
    //echo $output;

    # strpos()
    // Finds the position of the first occurence of a sub string; 

    $output = strpos('Hello PHP', 'P');
    // echo $output;

    # strrpos();
    // Finds the position of the last occurence of a sub string; 

    //$output = strrpos('Hello PHP', 'P');
    //echo $output;

   # trim(); 
    // Strips or trims whitespace; 

    $text = 'Hello World                        '; 
    var_dump($text); 
    // gives us a value and counts everything
    // in this case we have string(35) as output because of whitespace.

    $trimmed = trim($text);
    var_dump($trimmed);
    // now we have string(11) output
    // because whitespace was trimmed;
    // we will usually use it for form input;

    # strtoupper
    // makes everything uppercase

    $output = strtoupper('Hello PHP');
    // echo ($output);

    # strtolower
    // makes everything lowercase

    $output = strtolower('Hello PHP');
    // echo ($output);

    # ucwords(); 
    // capitalize every word

    $output = ucwords('hello php');
    // echo $output;

    # str_replace(); 
    // Replace all occurences of a search string with a replacement; 

    $text = 'Hello PHP';
    $output = str_replace('Hello', 'Code', $text);
    // echo $output; 

    # is_string(); 
    // Check if string

    $val = 'PHP';
    $output = is_string($val);

    // if it's string, it will return 1 as true;
    // else, it will return nothing as false;

    // echo $output; 

    $values = array(true, false, null, 'PHP', 8, '8');
    
    foreach($values as $value){
        if(is_string($value)){
            // echo "{$value} is a string<br>";
        }
    }

    // the output will be PHP is a string and 8 is a string;

    # gzcompress(); 
    // Compress a string; 

    $string = 'It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.[7] The PHP reference 
    implementation is now produced by The PHP Group.[8] PHP originally stood for Personal Home Page,[7] but it now 
    stands for the recursive initialism PHP: Hypertext Preprocessor.[9] PHP code is usually processed on a web server 
    by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, 
    the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image 
    data – would form the whole or part of an HTTP response. '

    // $compressed = gzcompress($string);

    // echo $compressed;

    // if we want to uncompress it; 
    // $original = gzuncompress($compressed);
    // echo $original;


?>