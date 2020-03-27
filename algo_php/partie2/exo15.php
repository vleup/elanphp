<?php
    $addresses = ['elan@elan-formation.fr', 'contact@elan'];
    foreach ($addresses as $value) {
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse $value est une adresse e-mail valide<br>";
        } else {
            echo "L'adresse $value est une adresse e-mail invalide<br>";
        }
    }
?>