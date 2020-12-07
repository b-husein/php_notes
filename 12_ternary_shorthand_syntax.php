<?php 

    $loggedIn = false; 
    $arr = [1, 2, 3, 4, 5];

    /* if($loggedIn){
        echo 'You are logged in.';
    } else {
        echo 'You are not logged in';
    } */

    // we can put all of the above into one line or 
    // a single statement

    // echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

    /*
    $isRegistered = ($loggedIn == true) ? true : false; 
    echo $isRegistered;

    $age = 20; 
    $score = 15; 

    echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Exceptional')
    :($age > 10 ? 'Horrible':'Average')); 
    
    */

    // alternative syntax for conditionals and loops

    ?>

    <!-- This is what we would usually use if we are embedding code in HTML -->

    <div>
        <!-- The regular way first -->
        <!-- that it's too complicated and doesn't look nice -->
        <?php if($loggedIn) { ?>
            <h1>Welcome user</h1>
        <?php } else { ?>
            <h1>Welcome Guest</h1>
        <?php } ?>
    
    </div>

    <div>
        <!-- Better and cleaner way to write it -->
            <?php if($loggedIn): ?>
                <h1>Welcome user</h1>

                <?php else: ?>
                    <h1>Welcome Guest</h1>

            <?php endif; ?>
    </div>

    <!-- We are not limited to statements here, we can also use loops; -->
    <!-- created array above 
    $arr = [1, 2, 3, 4, 5]; -->

    <div>
    <?php foreach($arr as $val): ?>

        <?php echo $val; ?>

    <?php endforeach; ?>
    </div>

    <!-- We can do the same thing with loops -->

    <div>
        <?php for($i = 0; $i <= 10; $i++): ?>

            <li><?php echo $i; ?></li>

        <?php endfor; ?>
    </div>
