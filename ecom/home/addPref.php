<?php
session_start();
require '../DatabaseClassSingleton.php';
if(isset($_SESSION["id"])){
    $id = $_SESSION["id"];
  DatabaseClassSingleton::getInstance()->Insert("Insert into preferiti ( `idProd` , `idUtente`) values ( ? , ? )", [
    'ii', $_GET['id'],$id]);
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
  exit();
?>