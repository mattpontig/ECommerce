<?php
    session_start();
    require '../DatabaseClassSingleton.php';

    // prepare and bind
    $id = $_GET['id'];
    DatabaseClassSingleton::getInstance()->Remove("Delete from acquisto where idC = ?",['i' , &$id]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>