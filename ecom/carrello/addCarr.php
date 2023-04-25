<?php
  session_start();
  require '../DatabaseClassSingleton.php';
  if(!isset($_SESSION["carrelloId"]) && isset($_SESSION["id"])){
      $result = DatabaseClassSingleton::getInstance()->Select("Select max(id) as max from carrello where idUtente=" . $_SESSION["id"]);
      foreach ($result as $row) {
      $_SESSION["carrelloId"] = $row['max'];
      $row['max'];
      }
    }
    $nProd = 1;
    if(isset($_SESSION["nProd"])){
      $nProd = $_SESSION["nProd"];
    }

    $idC = $_SESSION["carrelloId"];
    DatabaseClassSingleton::getInstance()->Insert("Insert into acquisto( `idArticolo` , `quantit`,`idCarrello`) values ( ? , ? ,?)", [
      'iii', $_GET["id"], $nProd,$idC]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
?>