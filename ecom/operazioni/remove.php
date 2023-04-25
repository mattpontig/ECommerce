<?php
    session_start();
    require '../DatabaseClassSingleton.php';

    // prepare and bind
    $id = $_GET['id'];
    echo $id;
    DatabaseClassSingleton::getInstance()->Remove("Delete from acquisto where id = ?",['i' , $id]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>