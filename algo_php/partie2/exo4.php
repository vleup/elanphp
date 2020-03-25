<?php
    $capitales = ["France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome", "Espagne"=>"Madrid"];
    function afficherTableHTML($capitales) {
        asort($capitales);
        return $capitales;
    }
    $capitales = afficherTableHTML($capitales);
    echo '<table style="border-collapse: collapse"><tr><th style="border: 1px solid black">Pays</th><th style="border: 1px solid black">Capitale</th>
        <th style="border: 1px solid black">Lien wiki</th></tr>';
    foreach ($capitales as $key => $value) {
            echo '<tr><td style="border: 1px solid black">'.$key.'</td><td style="border: 1px solid black">'.$value.'</td><td style="border: 1px solid black">
                <a href="https://fr.wikipedia.org/wiki/'.$value.'" target="_blank">Lien</a></td></tr>';
        }
    echo "</table>";
?>