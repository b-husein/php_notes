<?php 
    // Filters are used to validate, check data types and we can also sanitize
    // with filters, for example, if we want an email address to be formatted 
    // and we don't want any characters that aren't supposed to be in the email address
    // we can use a filter for that; 
?>

<?php 
    // The first function we are going to look at is filter_has_var
    // and what it does is we can check for POST or GET values
    // when we submit the form; it basically checks for posted data.
    
    /* 
    if(filter_has_var(INPUT_POST, 'data')){
    echo 'Data Found';
    } else {
    echo 'No Data';
    }
    */
    
    // recommended way to check if the email is valid
    /*
    if(filter_has_var(INPUT_POST, 'data')){
        if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        } else {
            echo 'Email is not valid';
        }
    } 
    */

    // if we want to remove all the characters that do not belong to email address
    // we can sanitize it
    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];

        // remove illegal chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br';

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        } else {
            echo 'Email is not valid';
        }
    } 


?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <input type="text" name="data">
    <button type="submit">Submit</button>

    </form>