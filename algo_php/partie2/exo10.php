<?php
    $labels = ['Nom', 'Prénom', 'Email', 'Ville', 'Sexe'];
    $choices = ['Développeur Logiciel', 'Designer web', 'Intégrateur', 'Chef de projet'];
    function createForm($labels, $choices) {
        echo '<form>';
        foreach ($labels as $value) {
            echo '<label>'.$value.'</label><br><input type="text"><br>';
        }
        createDrop($choices);
        echo '<input type="submit"></form>';
    }
    function createDrop($choices) {
        echo '<select>';
        foreach ($choices as $value) {
            echo '<option value="'.$value.'">'.$value.'</option>';
        }
        echo '</select><br>';
    }
    createForm($labels, $choices);
?>