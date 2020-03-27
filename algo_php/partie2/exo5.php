<?php
    $nomsInput = ["Nom", "Prénom", "Ville"];
    function afficherInput ($nomsInput) {
        echo '<form>';
        foreach ($nomsInput as $value) {
            echo '<label>'.$value.'</label><br><input type="text"><br>';
        }
        echo '</form>';
    }
    afficherInput($nomsInput);    
?>