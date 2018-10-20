<?php

// Importing database
include __DIR__ . "/php_mysqli_connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP MySQLi Select All</title>

    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    

</head>
<body>


        <div class="container">
            <div class="well well-sm">
                <code>
                UPDATE table_name SET field1 = new-value1, field2 = new-value2 [WHERE Clause];
                </code>
            </div>


            <div class="panel panel-body">
                <?php
                    /* Select queries return a resultset */
                    if ($result = $DB->query("UPDATE users SET name='demo' WHERE id = 1")) {

                        echo "
                            <div class=\"alert alert-success\">
                                Update success. <a href=\"./php_mysqli_select.php\">Check the update</a>
                            </div>
                        ";

                    }else{
                        $users = null;
                    }
                ?>
                
            </div>
        </div>



</body>
</html>