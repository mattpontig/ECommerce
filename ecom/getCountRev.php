<?php
    if(isset($_SESSION["prod"])){
        $result = DatabaseClassSingleton::getInstance()->Select("Select count(*) as t from comstar where id=" . $_SESSION["prod"]);
        foreach ($result as $row) {
            $_SESSION['numRev'] = $row['t'];
            echo $row['t'];
        }
    }
    else{ 
        $_SESSION['numRev'] = '0';
        echo '0';
    }

?>