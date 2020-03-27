<?php
    $nomsRadio = ['Monsieur', 'Madame', 'Mademoiselle']
    function afficherRadio($nomsRadio) {
        echo '<form>';
        foreach ($nomsRadio as $value) {
            if ($value == 'Monsieur') {
                echo '<input type="radio"'
            }
        }
    }
    //Quel est le fuck??
?>