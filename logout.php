<?php
   
    session_destroy();
    session_start();
    unset($_SESSION["isLogged"]);
    header('Location: index.php');
?>