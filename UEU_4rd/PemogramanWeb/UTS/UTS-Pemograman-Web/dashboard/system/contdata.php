<?php
    session_start();
    $action = htmlspecialchars($_GET['action']);

    if(isset($action)){
        include("dbconn.php");
        
    }
?>