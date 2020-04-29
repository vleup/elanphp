<?php
    try {
        $link = new PDO('mysql:host=localhost:3306;dbname=user', 'root', '', [
            
        ]);
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        exit();
    }

    
?>