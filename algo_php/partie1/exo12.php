<?php
    $lang = array("Mickaël" => "FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG");
    function checklang(array $z) {
        foreach ($z as $x => $y) {
        if ($y == "FRA") {
           echo "Bonjour $x<br>";
        } elseif ($y == "ESP") {
            echo "Hola $x<br>";
        } else {
            echo "Hello $x<br>";
        }
    }
    }
    checklang($lang);
    ksort($lang);
    echo "<br>";
    checklang($lang);
?>