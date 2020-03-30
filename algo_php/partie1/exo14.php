<?php
    $birthdate = new DateTime('1985-01-17');
    $today = new DateTime('2018-05-21');
    $age = $birthdate->diff($today);
    echo "Age de la personne : ", $age->format('%y années %m mois %d jours');
?>