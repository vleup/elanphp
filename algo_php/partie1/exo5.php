<?php
    $francs = 100;
    $coeff = 6.55957;
    $euros = $francs / $coeff;
    $euros = number_format($euros, 2, ",", ".");
    echo "Montant en francs : $francs <br>";
    echo "$francs francs = $euros €";
?>