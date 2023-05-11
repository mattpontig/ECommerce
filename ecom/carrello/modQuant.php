<?php
  session_start();
  require '../DatabaseClassSingleton.php';

  DatabaseClassSingleton::getInstance()->Update("Update acquisto set `quantit` = ? where idC = ?",[
    'ii', $_POST['q'], $_POST['idC']
]);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
?>