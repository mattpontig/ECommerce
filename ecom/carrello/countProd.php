<?php
$t = 0;
    if(isset($_SESSION["idCarrello"])){
        $result = DatabaseClassSingleton::getInstance()->Select("Select * from acquisto where idCarrello=". $_SESSION["idCarrello"]);
        foreach ($result as $row) {
          $t = $t+1;
        }
      }
    echo $t;

?>