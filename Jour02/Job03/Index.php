<?php
    $i = 0;
    while ($i <= 100){
        if ($i <= 20){
            echo "<p>", "<i>", $i, "</i>", "</p>", "<br>";
            $i++;
        }
        if ($i >= 25 && $i <= 50){
            echo "<p>", "<u>", $i, "</u>", "</p>", "<br>";
            $i++;
        }
        if ($i == 42){
            echo "La Plateforme_", "<br>";
            $i++;
        }
        if ($i > 20 && $i < 25){
            echo "<p>", $i, "</p>", "<br>";
            $i++;
        }
        if ($i > 50){
            echo "<p>", $i, "</p>", "<br>";
            $i++;
        }
    }
    ?>