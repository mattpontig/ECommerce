<?php
$t = 0;
$st = 0;
if(isset($_SESSION["prod"])){
    $p = $_SESSION["prod"];
}else $p = $row["id"];

    $res = DatabaseClassSingleton::getInstance()->Select("Select * from comstar where idProdotto=". $p);
        foreach ($res as $r) {
          $t = $t+1;
          $st = $st +$r['stelle'];
    }

    if($t > 0)
        $st = $st/$t;

    $str = '';
    for ($i = 1; $i < 6; $i++) {
            if($i <= $st)
                $str .= '<small class="fa fa-star text-primary mr-1"></small>';
            else 
                $str .= '<small class="far fa-star text-primary mr-1"></small>';
    }


?>