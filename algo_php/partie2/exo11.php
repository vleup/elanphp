<?php
    $date = '2018-02-23';
    function formaterDateFr($date) {
        setlocale(LC_TIME, 'fr_FR');
        echo strftime('%A %d %B %G', strtotime($date));
    }
    formaterDateFr($date);
?>