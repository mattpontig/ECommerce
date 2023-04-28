<?php
session_start();
require '../DatabaseClassSingleton.php';
if(isset($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = DatabaseClassSingleton::getInstance()->Select("Select * from preferiti where idProd=" .$_GET['id'] .' and idUtente='. $id);
    $c = 0;
    foreach ($result as $row) {
      $c= $c+1;
    }  
    if($c == 0){
  DatabaseClassSingleton::getInstance()->Insert("Insert into preferiti ( `idProd` , `idUtente`) values ( ? , ? )", [
    'ii', $_GET['id'],$id]);
  }
}
  header('Location: ' . $_SERVER['HTTP_REFERER']);
  exit();
?>