<?php
    $grades = array(10, 12, 8, 19, 3, 16, 11, 13, 9);
    $y = 0;
    echo "Les notes obtenues par l'élève sont :";
    foreach ($grades as $x) { //plutot utiliser implode($grades, " ") ici
        $y = $y + $x;
        echo " $x";
    }
    $final = $y/count($grades);
    echo "<br>Sa moyenne générale est donc de : ", number_format($final,2);
?>