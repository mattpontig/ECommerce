<?php
  session_start();
  require '../DatabaseClassSingleton.php';
    include 

    $idC = $_SESSION["idCarrello"];

    DatabaseClassSingleton::getInstance()->Insert("Insert into ordini(`idCarrello`,`Address`,`City`) values ( ? , ? ,?,?,?)", [
      'iss', $idC , $nProd,$idC]);
    include 'createNew.php';
    header('Location: ../index.php');
    exit();
?>