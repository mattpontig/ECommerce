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
    
    $result = DatabaseClassSingleton::getInstance()->Select("Select * from acquisto join prodotti on idArticolo = id where idCarrello=". $_SESSION["idCarrello"]);
    foreach ($result as $row){
      // output data of each row
      $db->Update("Update prodotti set `quant` = ? where id = ?",[
        'ii', ($row['quant']-$row["quantit"]), $row["idArticolo"]]);
    }

    include '../carrello/createNew.php';
    header('Location: ../completaOrdine.php');
    exit();
?>