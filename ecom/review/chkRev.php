<?php
    session_start();
    require '../DatabaseClassSingleton.php';
    if(isset($_SESSION['id'])){
        if($_GET["nStart"] < 6 && $_GET["nStart"] > 0){
        DatabaseClassSingleton::getInstance()->Insert("Insert into comstar( `idUtente` , `idProdotto`,`stelle`,`commenti`) values ( ? , ? ,?,?)", [
          'iiis', $_SESSION["id"], $_SESSION["prod"],$_GET["nStart"],$_GET["txt"]]);
        }
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>