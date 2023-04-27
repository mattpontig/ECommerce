<?php
    //require 'DatabaseClassSingleton.php';
    $result = DatabaseClassSingleton::getInstance()->Select("Select * from categoria");
    foreach ($result as $row) {
        echo "<option value='". $row["id"] ."'>" . $row["tipo"] . "</option>";
    }
?>