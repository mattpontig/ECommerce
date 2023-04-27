<?php
  session_start();
  require '../DatabaseClassSingleton.php';

  if($_POST['q'] < 10 && $_POST['q'] >= 0){
  DatabaseClassSingleton::getInstance()->Update("Update acquisto set `quantit` = ? where idC = ?",[
    'ii', $_POST['q'], $_POST['idC']
]);
  }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
?>