<?php
    session_start();
    require '../DatabaseClassSingleton.php';
    // prepare and bind
    $idPref = $_GET['id'];
    DatabaseClassSingleton::getInstance()->Remove("Delete from preferiti where idPref = ?",['i' , $idPref]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>