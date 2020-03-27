<?php
    $elements = ['Choix 1' => false, 'Choix 2' => true, 'Choix 3' => false];
    function genererCheckbox($elements) {
        echo '<form>';
        foreach ($elements as $key => $value) {
            if ($value == true) {
                echo '<input type="checkbox" checked><label>'.$key.'</label><br>';
            } else {
                echo '<input type="checkbox"><label>'.$key.'</label><br>';
            }
        }
        echo '</form>';
    }
    genererCheckbox($elements);
?>