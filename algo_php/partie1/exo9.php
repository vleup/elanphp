<?php
    $age = 32;
    $sex = "f";
    echo "Age : $age<br>";
    echo "Sexe : $sex<br>";
    if ($sex == "h" and $age >= 20 or $sex == "f" and $age >= 18 and $age <= 35) {
        echo "La personne est imposable";
    } else {
        echo "La personne est non imposable";
    }  
?>