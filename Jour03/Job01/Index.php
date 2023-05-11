<?php
    $tableau = [200, 204, 173, 98, 171, 404, 459];

    foreach ($tableau as $nombre) {
        if ($nombre % 2 == 0){
            echo "<p>", $nombre, "est un nombre pair", "</p>", "</br>";
        }
        else{ 
            echo "<p>", $nombre, "est un nombre impair", "</p>", "</br>";
        }
    }
?>