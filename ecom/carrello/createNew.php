<?php
            $_SESSION["lastIdCarrello"] = $_SESSION["idCarrello"];
            DatabaseClassSingleton::getInstance()->Insert("Insert into carrello (`idUtente`) values ( ?)", ['i', &$_SESSION["id"]]);
            
            $result = DatabaseClassSingleton::getInstance()->Select("Select * from carrello where idUtente=". $_SESSION["id"]);
            foreach ($result as $row){
            // output data of each row
                $_SESSION["idCarrello"] = $row["id"];
            }
?>