<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Echecs</title>
</head>
<body>
    <?php
    $pieces = ['tour', 'cavalier', 'fou', 'reine', 'roi', 'fou', 'cavalier', 'tour', 'pion', 'pion', 'pion', 'pion', 'pion', 'pion', 'pion', 'pion'];
    echo '<table>';
    $line1 = array_slice($pieces, 0, 8);
    $line2 = array_slice($pieces, -8);
    echo '<tr>';
    foreach ($line1 as $key => $value) {
        if ($key/2 == floor($key/2)) {
            echo '<td class="white">'.$value.' NOIR</td>';
        } else {
            echo '<td class="black">'.$value.' NOIR</td>';
        }
    }
    echo '</tr><tr>';
    foreach ($line2 as $key => $value) {
        if ($key/2 == floor($key/2)) {
            echo '<td class="black">'.$value.' NOIR</td>';
        } else {
            echo '<td class="white">'.$value.' NOIR</td>';
        }
    }
    echo '</tr>';
    for ($i=0; $i < 6; $i++) { 
        echo '<tr>';
        for ($a=0; $a < 8; $a++) { 
            if ($a/2 == floor($a/2) && $i/2 == floor($i/2) || $a/2 != floor($a/2) && $i/2 != floor($i/2)) {
                echo '<td class="white"></td>';
            } else {
                echo '<td class="black"></td>';
            }
        }
        echo '</tr>';
    }
    echo '<tr>';
    foreach ($line2 as $key => $value) {
        if ($key/2 == floor($key/2)) {
            echo '<td class="white">'.$value.' BLANC</td>';
        } else {
            echo '<td class="black">'.$value.' BLANC</td>';
        }
    }
    echo '</tr><tr>';
    foreach ($line1 as $key => $value) {
        if ($key/2 == floor($key/2)) {
            echo '<td class="black">'.$value.' BLANC</td>';
        } else {
            echo '<td class="white">'.$value.' BLANC</td>';
        }
    }
    echo '</tr>';
    echo '</table>';
    ?>
</body>
</html>