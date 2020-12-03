<?php 
    if(isset($_GET['name'])){
        // print_r($_GET);
        // echo $_GET['name'];
        // in order to prevent XSS attacks we will use htmlentities() function.
        // it will put malicious code <script>alert(1)</script>
        // into html entities &lt;script&gt;alert(1)&lt;/script&gt;
        $name = htmlentities($_POST['name']);
        echo($name);
    }

        // we will use POST if we want to send data and at the same time the data will not be visible in the URL;
        // much more secure way to send data; 
        // to level up, we can use HTTPS and really encrypt that data;

    if(isset($_POST['name'])){
        print_r($_POST);
        $name = htmlentities($_POST['name']);
    }

        // the third way to get this data is by using request;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <form method="POST" action="10_get_post.php">
        <div>
            <label>Name: </label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email: </label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>