<?php
    session_start();
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job07</title>
</head>
<body>
    <form>
        
        <?php
            
            isset($_COOKIE['count']);
            $cookie = 1;
            setcookie("count", $cookie);
    
            $cookie = ++$_COOKIE['count'];
            setcookie("count", $cookie);
            echo $cookie;
        ?>

        <input type = "reset" value = "reset" name = "cookie">
    </form>
</body>
</html>