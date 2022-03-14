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

            $url = $data["poster"];

            echo '<h1>'. $data["title"]  . '</h1>' ;
            echo '<p>'. $data["author"]  . '</p> ' ; 
            echo '<p>'. $data["year"]  . '</p> ' ;
            echo "<img src=$url>" . '</img> ' ;
            echo '<p>'. $data["genre"]  . '</p> ' ;
        }

    ?>
</body>
</html>


