<?php
    //je suis parfaitement conscient que c'est pas ça qu'il faut faire je suis entrain d'étudier la classe DateTime là
    $birthdate = new DateTime('1985-01-17');
    $today = new DateTime('2018-05-21');
    $age = $birthdate->diff($today);
    echo "Age de la personne : ", $age->format('%y années %m mois %d jours');
?>