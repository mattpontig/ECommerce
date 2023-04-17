<?php
    session_start();
    $cookie_name = "cart";
    if(!isset($_COOKIE[$cookie_name])) {
        $cookie_value = $_GET["id"];
      } else {
        $cookie_value =  ';' . $_COOKIE['cart'] . $_GET["id"];
    }
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>