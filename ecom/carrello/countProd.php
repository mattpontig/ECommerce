<?php
$t = 0;
    if(isset($_SESSION["carrelloId"])){
        $result = DatabaseClassSingleton::getInstance()->Select("Select * from acquisto where idCarrello=". $_SESSION["carrelloId"]);
        foreach ($result as $row) {
          $t = $t+1;
        }
      }
    echo $t;

?>