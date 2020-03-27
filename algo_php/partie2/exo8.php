<?php
    $url = 'http://my.mobirise.com/data/userpic/764.jpg';
    $repeat = 4;
    function repeterImage($url, $repeat) {
        for ($i=0; $i < $repeat; $i++) { 
            echo '<img src="'.$url.'">';
        }
    }
    repeterImage($url, $repeat);
?>