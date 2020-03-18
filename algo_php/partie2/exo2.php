<?php
/*
* wip
*/
    $capitales = array("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome");
    
    function afficherTableHTML($capitales) {
        foreach ($capitales as $key => $value) {
            # code...
        }
        return ksort($table);
    }
    echo '<table><tr><th style="strong">Pays</th><th style="strong">Capitale</th></tr>';
    /*foreach ($capitales as $key => $value) {
            echo "<tr><td>".mb_strtoupper($key)."</td><td>$value</td></tr>";
        }*/
    echo "</table>";
?>