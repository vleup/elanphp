<?php
    $nomsInput = ["Nom", "Prénom", "Ville"];
    function afficherInput ($nomsInput) {
        foreach ($nomsInput as $value) {
            echo "<label>$value</label><br><input><br>";
        }
    }
    echo "<form>";
    afficherInput($nomsInput);
    echo "</form>";
?>