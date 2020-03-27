<?php
    $capitales = ["France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome"];
    
    function afficherTableHTML($capitales) {
        $table = array_change_key_case($capitales, CASE_UPPER);
        ksort($table);
        echo '<table style="border-collapse: collapse"><tr><th style="border: 1px solid black">Pays</th><th style="border: 1px solid black">Capitale</th></tr>';
        foreach ($capitales as $key => $value) {
                echo '<tr><td style="border: 1px solid black">'.$key.'</td><td style="border: 1px solid black">'.$value.'</td></tr>';
            }
        echo "</table>";
    }
    afficherTableHTML($capitales);    
?>