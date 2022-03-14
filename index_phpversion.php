<?php
    include "./database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
                            
        foreach ($database as $data){
            echo '<h1>'. $data["title"]  . '</h1>' . '<br>';
            echo '<li>'. $data["author"]  . '</li> ' . '<br>'; 
            echo '<li>'. $data["year"]  . '</li> ' . '<br>';
            echo '<li>'. $data["poster"]  . '</li> ' . '<br>';
            echo '<li>'. $data["genre"]  . '</li> ' . '<br>';
        }

    ?>
</body>
</html>


