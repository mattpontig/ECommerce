<?php
    if(isset($_COOKIE["cart"])){
        $pieces = explode(";", $_COOKIE['cart']);
        echo (count($pieces));
    }
    else echo '0';
?>