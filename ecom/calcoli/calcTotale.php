<?php
  $result = DatabaseClassSingleton::getInstance()->Select("Select sum(*) as totale from carrello where id=". $_SESSION["carrelloId"]);
  foreach ($result as $row) {
    echo $row['totale'];
  }
?>