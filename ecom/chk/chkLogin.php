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
    }

    $result = DatabaseClassSingleton::getInstance()->Select("Select * from carrello where idUtente=". $_SESSION["id"]);
    foreach ($result as $row){
    // output data of each row
        $_SESSION["idCarrello"] = $row["id"];
    }

    header('Location:../cookie/cLogin.php');
    exit();
?>