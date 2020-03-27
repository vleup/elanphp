<?php
    $tableauValeurs = [true, 'texte', 10, 25.369, ['valeur1', 'valeur2']];
    foreach ($tableauValeurs as $value) {
        echo var_dump($value).'<br>';
    }
?>