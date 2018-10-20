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
    <title>PHP PDO Select All</title>

    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    

</head>
<body>

        <div class="container">
            <div class="well well-sm">
                <code>
                SELECT * FROM table_name;
                </code>
            </div>

            <div class="panel panel-body">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            /* Select queries return a resultset */
                            $sql = 'SELECT * FROM users';
                            foreach ($pdo->query($sql) as $user): 
                        ?>

                                <tr>
                                    <td><?php echo $user["id"]; ?></td>
                                    <td><?php echo $user["name"]; ?></td>
                                    <td>
                                        <a href="./php_mysql_pdo_update.php?id=<?php echo $user["id"]; ?>">Update</a> | 
                                        <a href="./php_mysql_pdo_delete.php?id=<?php echo $user["id"]; ?>">Delete</a>
                                    </td>
                                </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
            </div>
        </div>



</body>
</html>