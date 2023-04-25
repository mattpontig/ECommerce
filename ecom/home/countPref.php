<?php
$t = 0;
    if(isset($_SESSION["id"])){
        $result = DatabaseClassSingleton::getInstance()->Select("Select * from preferiti where idUtente=". $_SESSION["id"]);
        foreach ($result as $row) {
          $t = $t+1;
        }
      }
    echo $t;

?>