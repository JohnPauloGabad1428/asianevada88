<?php session_start();?> 
   <?php
    //cancelling session
    $_SESSION['id'] = null;   
    $_SESSION['username'] = null;
    $_SESSION['firstname'] = null;
    $_SESSION['astname'] = null;
    
    header("Location: ../login.php");
?>    




