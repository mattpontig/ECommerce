<?php 
    session_start();
    if(isset($_SESSION["id"]) == false){
        header("location: index.php?msg=0");
    }else header("location: index.php?msg=1");
?>