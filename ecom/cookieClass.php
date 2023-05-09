<?php

class cookieClass
{ 


    // Get mysqli connection
    public static function getCount()
    {
        $t = 0;
        if(isset($_COOKIE["carrello"])) {
            $result = DatabaseClassSingleton::getInstance()->Select("Select * from acquisto where idCook=". $_COOKIE["carrello"]);
            foreach ($result as $row) {
                $t = $t+ $row['quantit'];
            }
        }
        return $t;
    }

    // Get mysqli connection
    public static function addProd($id,$n)
    {
        if(!isset($_COOKIE["carrello"])) {            
            $result = DatabaseClassSingleton::getInstance()->Select("Select max(idCook) as m from acquisto");            
            foreach ($result as $row){
            // output data of each row
                if($row['m'] == 'NULL')
                    $row['m'] = 1;
                $idC = $row['m'];
            }
        }
        else $idC = $_COOKIE["carrello"];
        DatabaseClassSingleton::getInstance()->Insert("Insert into acquisto( `idArticolo` , `quantit`,`idCook`) values ( ? , ? ,?)", [
            'iii', &$id , &$n,&$idC]);
    }

}

?>

