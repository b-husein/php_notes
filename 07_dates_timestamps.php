<?php 

    # DATES

    // echo date('d'); // day
    // echo date('m'); // month
    // echo date('y'); // year
    // echo date('l'); // day of the week
    // echo date('m-d-Y'); // month-day-year

    # TIME

    // echo date('h'); // Hour
    // echo date('i'); // min
    // echo date('s'); // sec
    // echo date('a'); // min
    // echo date('h:i:sa'); // hour-min-sec

    // Set time zone
    // date_default_timezone_set('America/New_York'); 

    # Make time;

    // $timestamp = mktime(hours, min, sec, mon, day, year);

    /* 
        1606935044

        Unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified; 
    
    */

    $timestamp = mktime(19, 50, 44, 12, 02, 2020);
    // echo $timestamp;
    
    // Change Unix timestamp from a long integer to readable date;
    // echo date('m/d/Y h:i:sa', $timestamp);

    // string to time; 
    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('Next Sunday');
    $timestamp5 = strtotime('+ 2 Days');

    // echo $timestamp2;

    echo date('m/d/Y h:i:sa', $timestamp5);

    





?>