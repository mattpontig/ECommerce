<?php
    require 'DatabaseClassSingleton.php';
    $result = DatabaseClassSingleton::getInstance()->Select("Select * from categoria");
    echo "<a href='home/cCat.php' class='nav-item nav-link'>All</a>";
    foreach ($result as $row) {
        echo "<a href='home/cCat.php?id=".$row["id"] ."' class='nav-item nav-link'>" . $row["tipo"] . "</a>";
    }
?>