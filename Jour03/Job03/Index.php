<?php

    $str = "I'm sorry Dave I'm afraid I can't do that";
    $voyelles = ["a", "e", "i", "o", "u", "y", "I"];
    
    for ($i = 0; $v = $voyelles[0,6]; isset($str[$i]); isset($voyelles[$v]); $i++; $v++){/*
        Je ne comprend pas cette exercice et n'arrive pas à trouver une solution sans fonctions. */
        if ($i == $v){
            echo $str[$i];
            $i++;
        }
        else{
            echo "";
            $i++;
        }
    }
?> 
