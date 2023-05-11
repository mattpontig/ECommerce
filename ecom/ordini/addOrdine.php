<?php
    require '../DatabaseClassSingleton.php';
    try {
      // Inizio della transazione
      DatabaseClassSingleton::getInstance()->beginTransaction();
  
      session_start();
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
          if($row['quant']-$row["quantit"] < 0)
            throw new Exception('Errore!!!!!!!!');
            else{
          DatabaseClassSingleton::getInstance()->Update("Update prodotti set `quant` = ? where id = ?",[
            'ii', ($row['quant']-$row["quantit"]), &$row["idArticolo"]]);}
        }
  
      // Conferma della transazione
      DatabaseClassSingleton::getInstance()->commit();
      include '../carrello/createNew.php';
      header('Location: ../completaOrdine.php');
  } catch (Exception $e) {
      // Annullamento della transazione in caso di errore
      DatabaseClassSingleton::getInstance()->rollback();
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit();
  }

?>