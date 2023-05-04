<?php
  session_start();
  require '../DatabaseClassSingleton.php';
  $idC = $_SESSION["idCarrello"];
  $city = $_POST["city"];
  $addr = $_POST["addr"];
  $totPord = $_SESSION["totProd"];
  $zip = $_POST["zip"];
    DatabaseClassSingleton::getInstance()->Insert("Insert into ordini(`idCarrello`,`Address`,`City`,`prezzoTot`,`zip`) values ( ? , ? ,?,?,?)", [
      'issii', &$idC , &$addr,&$city ,&$totPord,&$zip]);

    include '../carrello/createNew.php';
    header('Location: ../completaOrdine.php');
    exit();
?>