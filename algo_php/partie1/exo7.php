<?php
    $age = 10;
    if ($age >= 12) {
        echo "L'enfant qui a $age ans appartient à la catégorie Cadet";
    } elseif ($age >= 10) {
        echo "L'enfant qui a $age ans appartient à la catégorie Minime";
    } elseif ($age >= 8) {
        echo "L'enfant qui a $age ans appartient à la catégorie Pupille";
    } elseif ($age >= 6) {
        echo "L'enfant qui a $age ans appartient à la catégorie Poussin";
    } else {
        echo "L'enfant qui a $age ans n'appartient à aucune catégorie";
    }
?>