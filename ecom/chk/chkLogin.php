<?php
    session_start();
    require '../DatabaseClassSingleton.php';

    // prepare and bind
    $em = $_POST['txtEm'];
    $pwd = md5($_POST['txtPwd']);

    $result = DatabaseClassSingleton::getInstance()->Select("Select * from utente where email='". $em . "' and password='". $pwd . "'");
    foreach ($result as $row){
    // output data of each row
        $_SESSION["id"] = $row["id"];
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
?>