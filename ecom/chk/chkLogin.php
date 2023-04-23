<?php
    session_start();
    require '../DatabaseClassSingleton.php';

    // prepare and bind
    $em = $_POST['txtEm'];
    $pwd = md5($_POST['txtPwd']);

    $result = DatabaseClassSingleton::getInstance()->Select("Select * from utente where email='". $em . "' and password='"". $pwd . ");

    if (mysqli_num_rows($result) == 1) {
    // output data of each row
        $row = mysqli_fetch_assoc($result);
        $_SESSION["id"] = $row["id"];
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
?>