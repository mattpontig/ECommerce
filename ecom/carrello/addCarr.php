<?php
  session_start();
  require '../DatabaseClassSingleton.php';
    $nProd = 1;
    if(isset($_POST["nProd"])){
      $nProd = $_POST["nProd"];
    }

    $idC = $_SESSION["idCarrello"];
    if(isset($_GET["id"]))
      $id = $_GET["id"];
    else $id = $_SESSION["prod"];

    DatabaseClassSingleton::getInstance()->Insert("Insert into acquisto( `idArticolo` , `quantit`,`idCarrello`) values ( ? , ? ,?)", [
      'iii', $id , $nProd,$idC]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
?>