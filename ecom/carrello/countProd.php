<?php
    if(isset($_COOKIE["cart"])){
        $v = json_decode($_COOKIE['cart']);
        echo count($v);
    }
    else echo '0';
?>