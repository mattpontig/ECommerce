<?php
$t = 0;
require 'cookieClass.php';
    if(isset($_SESSION["idCarrello"])){
        $result = DatabaseClassSingleton::getInstance()->Select("Select * from acquisto where idCarrello=". $_SESSION["idCarrello"]);
        foreach ($result as $row) {
          $t = $t+ $row['quantit'];
        }
      }
      else{
        $t = cookieClass::getCount();
      }
    echo $t;

?>