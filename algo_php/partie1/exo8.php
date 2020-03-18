<?php
    $i = 1;
    $x = 8;
    echo "Table de $x :<br>";
    while ($i <= 10) {
        $y = $i * $x;
        echo "$i x $x = $y<br>";
        $i = $i + 1;
    }
    echo "Table de $x :<br>";
    for ($i = 1; $i <= 10 ; $i++) { 
        $y = $i * $x;
        echo "$i x $x = $y<br>";
    }
?>