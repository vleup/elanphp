<?php
    $elements = ['Monsieur', 'Madame', 'Mademoiselle'];
    function alimenterListeDeroulante($elements) {
        echo '<select>';
        foreach ($elements as $value) {
            echo '<option value="'.$value.'">'.$value.'</option>';
        }
        echo '</select>';
    }
    echo '<form>';
    alimenterListeDeroulante($elements);
    echo '</form>';
?>