<?php

// PHP Reference Link: http://php.net/manual/en/function.mysqli-connect.php


// Try to connect with database or catch an PDOException Error
try {

    
    // Building a database connection with [ php_mysql_practice_database ] using PDO
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php_mysql_practice_database', 'root', '');

    
    // Connection output

    // echo "
    //         <h1>Connected with database using PDO</h1>
    //         <br>
    //         <a href=\"./../index.php\" >Go to home</a>
    //     ";
    
    echo "
            <script>
                alert(\"Connected with database using PDO\");
            </script>
        ";


} catch (PDOException $e) {

    
    // Learn about die [ http://php.net/manual/en/function.die.php ]
    // Display the PDO Connection error
    die("Error!: " . $e->getMessage() . "<br/>");



}