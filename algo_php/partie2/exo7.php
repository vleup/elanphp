<?php
    $elements = ['Choix 1' => false, 'Choix 2' => true, 'Choix 3' => false]
    function genererCheckbox($elements) {
        echo '';
        foreach ($elements as $key => $value) {
            if ($value == true) {
                echo '';
            } else {
                echo '';
            }
        }
        echo '';
    }
?>