<?php
            DatabaseClassSingleton::getInstance()->Insert("Insert into carrello (`data` , `idUtente`) values ( ? , ?)", ['di', date("Y/m/d") , $id]);
            
            $result = DatabaseClassSingleton::getInstance()->Select("Select * from carrello where idUtente=". $_SESSION["id"]);
            foreach ($result as $row){
            // output data of each row
                $_SESSION["idCarrello"] = $row["id"];
            }
?>