<?php 
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION["idCarrello"]);
// set the expiration date to one hour ago
    //setcookie("login", "", time() - 3600);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>