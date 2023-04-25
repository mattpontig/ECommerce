<?php
  session_start();
  require '../DatabaseClassSingleton.php';
    $nProd = 1;
    if(isset($_SESSION["nProd"])){
      $nProd = $_SESSION["nProd"];
    }

    $idC = $_SESSION["idCarrello"];
    $id = $_GET["id"];

    DatabaseClassSingleton::getInstance()->Insert("Insert into acquisto( `idArticolo` , `quantit`,`idCarrello`) values ( ? , ? ,?)", [
      'iii', $id , $nProd,$idC]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
?>