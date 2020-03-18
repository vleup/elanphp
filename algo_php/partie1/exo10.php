<?php
    $total = 152;
    $given = 200;
    $diff = $given - $total;
    $ten = floor($diff/10);
    $five =floor(($diff-$ten*10)/5);
    $two = floor(($diff-($ten*10+$five*5))/2);
    $one = floor($diff-($ten*10+$five*5+$two*2));
    echo "Montant à payer : $total €<br>";
    echo "Montant versé : $given €<br>";
    echo "Reste à payer : $diff €<br>";
    echo "*******************************************************************<br>";
    echo "Rendue de monnaie :<br>";
    echo "$ten billet(s) de 10 € - $five billet(s) de 5 € - $two pièce(s) de 2 € - $one pièce(s) de 1 €";
?>