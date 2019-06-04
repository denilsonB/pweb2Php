<?php
 session_start();
    
 if ((!isset($_SESSION['nome'])) || isset($_GET['logout'] )) {
    session_destroy();
    unset($_SESSION['nome']);
    header("location: /php/login.html");
 }
?>