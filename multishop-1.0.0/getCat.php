<?php
    require 'DatabaseClassSingleton.php';
    $result = DatabaseClassSingleton::getInstance()->Select("Select * from categoria");
    foreach ($result as $row) {
        echo "<a href='' class='nav-item nav-link'>" . $row["tipo"] . "</a>";
    }
?>