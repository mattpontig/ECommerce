<?php
    session_start();
    if(isset($_SESSION['id'])){
        DatabaseClassSingleton::getInstance()->Insert("Insert into comstar( `idUtente` , `idProdotto`,`stelle`,`commenti`) values ( ? , ? ,?,))", [
          'iiis', $_SESSION["idUtente"], $_SESSION["prod"],$_GET["nStart"],$_GET["txt"]]);
    }
    header("location: index.php");
?>