<?php
  session_start();
    DatabaseClassSingleton::getInstance()->Insert("Insert into acquisto( `idArticolo` , `quant`,`idCarrello`) values ( ? , ? ,?)", [
      'iii', $_GET["prod"], $_GET["nPord"],$_SESSION["idUtente"]
  ]);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
?>