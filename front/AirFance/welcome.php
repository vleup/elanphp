<?php
    session_start();
    if(isset($_SESSION['user'])) {
        echo 'Welcome';
    }
    else echo 'NOPE';
    
?>