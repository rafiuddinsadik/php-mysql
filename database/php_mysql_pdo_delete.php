<?php

// Importing database
include __DIR__ . "/php_mysql_pdo_connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP PDO Delete</title>

    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    

</head>
<body>

        <div class="container">
            <div class="well well-sm">
                <code>
                DELETE FROM table_name
                WHERE some_column = some_value
                </code>
            </div>


            <?php
                /* Select queries return a resultset */


                // sql to delete a record
                $sql = "DELETE FROM users WHERE id=".$_GET['id'];

                // use exec() because no results are returned
                $pdo->exec($sql);
                echo "Record deleted successfully";

            ?>
                
        </div>

</body>
</html>