<?php 
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION["idCarrello"]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>