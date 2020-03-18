<?php
    function convertirMajRouge($phrase) {
        return '<p style="color:red;">'.mb_strtoupper($phrase)."</p>";
    }
    echo convertirMajRouge("Mon texte en paramètre");
?>