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
    <title>PHP PDO delete</title>

    
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

                    $sql = "UPDATE users SET name='Doe' WHERE id=".$_GET['id'];

                    // Prepare statement
                    $stmt = $pdo->prepare($sql);

                    // execute the query
                    $stmt->execute();

                    // echo a message to say the UPDATE succeeded
                    echo $stmt->rowCount() . " records UPDATED successfully";

                ?>
                
            </div>
        </div>



</body>
</html>