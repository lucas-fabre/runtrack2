<?php
    $i = 0;
    while ($i <= 100){
        echo "<p>", $i, "</p>", "<br>";
        $i++;
        if ($i%3 == 0 && $i%5 == 0){
            echo "<p>", "FizzBuzz", "</p>", "<br>";
            $i++;
        }
        if ($i%3 == 0){
            echo "<p>", "Fizz", "</p>", "<br>";
            $i++;
        }
        if ($i%5 == 0){
            echo "<p>", "Buzz", "</p>", "<br>";
            $i++;
        }
    }
?>