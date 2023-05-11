<?php
    session_start();
    require '../DatabaseClassSingleton.php';

    // prepare and bind
    $em = $_POST['txtEm'];
    $pwd = md5($_POST['txtPwd']);

    $result = DatabaseClassSingleton::getInstance()->Select("Select * from utente where email='". $em . "' and password='". $pwd . "'");
    foreach ($result as $row){
    // output data of each row
        $_SESSION["id"] = $row["id"];
    }
    if(isset($_SESSION["id"])){

    $result = DatabaseClassSingleton::getInstance()->Select("Select * from carrello where idUtente=". $_SESSION["id"]);
    foreach ($result as $row){
    // output data of each row
        $_SESSION["idCarrello"] = $row["id"];
    }

    if(isset($_COOKIE['carrello'])){
        $result = DatabaseClassSingleton::getInstance()->Select("Select * from acquisto where idCook='". $_COOKIE['carrello']."'");
        foreach ($result as $row){
        // output data of each row
        DatabaseClassSingleton::getInstance()->Update("Update acquisto set `idCarrello` = ? where idC = ?",[
            'ii', &$_SESSION["idCarrello"], &$row['idC'] ]);     
        DatabaseClassSingleton::getInstance()->Update("Update acquisto set `idCook` = ? where idC = ?",[
            'is', NULL, &$row['idC'] ]) ;     
        }
    }
}
    header('Location: ../index.php');
?>