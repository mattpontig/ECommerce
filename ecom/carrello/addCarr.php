<?php
  session_start();
  require '../DatabaseClassSingleton.php';
  require '../cookieClass.php';
    $nProd = 1;
    if(isset($_POST["nProd"])){
      $nProd = $_POST["nProd"];
    }

    if(isset($_SESSION["idCarrello"])){
    $idC = $_SESSION["idCarrello"];
    if(isset($_GET["id"]))
      $id = $_GET["id"];
    else $id = $_SESSION["prod"];

    DatabaseClassSingleton::getInstance()->Insert("Insert into acquisto( `idArticolo` , `quantit`,`idCarrello`) values ( ? , ? ,?)", [
      'iii', $id , $nProd,$idC]);
    }
    else{
      cookieClass::addProd($_GET["id"],$nProd);
    
      //header('Location: ../cookie/cGuest.php?id='.$_GET["id"] . "," . $nProd . ";");
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
?>