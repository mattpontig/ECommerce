<?php 
    session_start();
    if(isset($_SESSION["user"]) == false){
        header("location: index.php?msg=0");
    }else header("location: index.php?msg=1");
?>