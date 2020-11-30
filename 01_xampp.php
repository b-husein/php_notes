<?php 

// XAMPP installation process

// download link: https://www.apachefriends.org/download.html

// after installation activate Apache & MySQL from XAMPP Control Panel

// FOR SERVER

// open http://localhost/dashboard 

// When working with our server
// the folder that we are interested in 
// is located in xampp installation folder
// and it's named 'htdocs' which is basically the root of web server; 

// FOR phpMyAdmin

// open localhost/phpmyadmin

// from here we can manage databases;
// in order to add password, we can go to 'User accounts'
// localhost -> Edit privileges -> Change password (ie Husein123)
// the next step is to edit a config file and add our password
// xampp -> phpMyAdmin folder -> config.inc.php file;
// with the line of code that contains 'password'
// $cfg['Servers'][$i]['password'] = 'Husein123'; & save
// when we return to browser, we can access our phpmyadmin.
// and when we use MySQL in our script, we will add this password.



?>