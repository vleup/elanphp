<?php
    $phrase = "Engage le jeu que je le gagne";
    $test = strrev($phrase);
    $test1 = str_replace(" ", "", $test);
    $test1 = mb_strtolower($test1);
    $test2 = str_replace(" ", "", $phrase);
    $test2 = mb_strtolower($test2);
    if ($test1 == $test2) {
        echo "La phrase «", $phrase, "» est palindrome";
    } else {
        echo "La phrase «", $phrase, "» n'est pas palindrome";
    }
?>