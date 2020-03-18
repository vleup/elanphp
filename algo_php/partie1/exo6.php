<?php
    $price = 9.99;
    $tax = 0.2;
    $quantity = 5;
    $total = ($price * $quantity) + ($price * $quantity * $tax);
    echo "Prix unitaire de l'article : $price € <br>";
    echo "Quantité : $quantity<br>";
    echo "Taux de TVA : $tax <br>";
    echo "Le montant de la facture à régler est de : $total €";
?>