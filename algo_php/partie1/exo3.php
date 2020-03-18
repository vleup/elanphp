<?php
    $phrase = "Notre formation DL commence aujourd'hui";
    $word = "demain";
    echo $phrase, "<br>";
    echo str_replace("aujourd'hui", $word, $phrase);
?>