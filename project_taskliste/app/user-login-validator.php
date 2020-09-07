<?php
    //Login starten und während einer Session laufen zu lassen
    require_once("init.php");
        
    if (!isset($_SESSION['userID'])){
        redirect("user-login.php");
    }
?>