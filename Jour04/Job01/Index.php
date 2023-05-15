<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
</head>
<body>
    
    <label for = "nom">Nom:</label>
    <input type = "text" name = "nom">

    <label for = "prénom">Prénom:</label>
    <input type = "text" name = "prénom">

    <input type = "submit" name = "envoyer">

    <?php
        $_GET["nom"];
        $_GET["prénom"];
        $_GET["envoyer"];
        $i = 0;

        foreach($_GET as $j){
            $i++;
            $j[number];
            echo $i;
        }//
    ?>
</body>
</html>