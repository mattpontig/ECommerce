<?php

class cookieClass
{ 
    public static function getId(){
        return $_COOKIE["carrello"];
    }
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
                    $row['m'] = 0;
                $idC = ($row['m'] +1);
            }
            $cookie_name = "carrello";
            $cookie_value = $idC;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        }
        else $idC = $_COOKIE["carrello"];
        DatabaseClassSingleton::getInstance()->Insert("Insert into acquisto( `idArticolo` , `quantit`,`idCook`) values ( ? , ? ,?)", [
            'iii', &$id , &$n,&$idC]);
    }

}

?>

