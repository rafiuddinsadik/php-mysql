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
    <title>PHP MySQLi Insert</title>

    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    

</head>
<body>
    
    
        <?php

            // SQL Insert Query

            $sql_insert_query = "INSERT INTO users (name, email, password, gender) VALUES ('Jhon Doe', 'jhon_doe@email.com', '123456', 'Male')";

            // Executing mysqli query for creating a new user            
            $user = $DB->query($sql_insert_query);

        ?>

        <div class="container">
            <div class="well well-sm">
                <code>
                INSERT INTO table_name 
                    ( field1, field2,...fieldN )
                    VALUES
                    ( value1, value2,...valueN );
                </code>
            </div>

            <?php
                if($user){

                    echo "<div class='alert alert-success'>New Record has id $DB->insert_id</div>";
    
                }else{
                 
                    echo "<div class='alert alert-danger'>Faild to Insert data</div>";    
                
                }
            ?>
        </div>



</body>
</html>