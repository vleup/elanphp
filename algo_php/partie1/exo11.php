<?php
    $cars = array("Peugeot", "Renault", "BMW", "Mercedes");
    echo "Il y a ".count($cars)." marques de voitures dans le tableau :<br><ul>";
    foreach ($cars as $x) {
        echo "<li>$x</li>";
    }
    echo "</ul>";
?>