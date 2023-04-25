<?php
    session_start();
    require '../DatabaseClassSingleton.php';

    // prepare and bind
    $id = $_GET['id'];
    DatabaseClassSingleton::getInstance()->Remove("Delete from preferiti where id = ?",['i' , $id]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>