<?php

// PHP Reference Link: http://php.net/manual/en/function.mysqli-connect.php


// Assigning a databse connection for globaly use.
$DB = NULL;


// Building a database connection with [ php_mysql_practice_database ]
$connection = new mysqli('127.0.0.1', 'root', '', 'php_mysql_practice_database');


// Checking the connection status
// If not connected then display the error. 
if ( ! $connection ) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}else{

    // Updating the database connection
    $DB = $connection;
    
    
    // Connection output

    // echo "<h1>Connected with database</h1><br><a href=\"./../index.php\" >Go to home</a>";
    
    echo "<script>alert(\"Connected with database\");</script>";
}

?>

